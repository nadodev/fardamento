<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrcamentoProdutoRequest;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use App\Mail\OrcamentoProdutoMail;
use App\Models\Produto;
use App\Models\ProdutoFoto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProdutoController extends Controller
{
    public function index(): View
    {
        $produtos = Produto::with('fotos')->latest()->paginate(15);

        return view('admin.produtos.index', compact('produtos'));
    }

    public function create(): View
    {
        return view('admin.produtos.create');
    }

    public function store(StoreProdutoRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['nome']);

        if ($request->has('caracteristicas_text') && ! empty($request->caracteristicas_text)) {
            $data['caracteristicas'] = array_filter(
                array_map('trim', explode("\n", $request->caracteristicas_text))
            );
        }

        $produto = Produto::create($data);

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto criado com sucesso!');
    }

    public function show(Produto $produto): View
    {
        $produto->load('fotos');

        return view('admin.produtos.show', compact('produto'));
    }

    public function edit(Produto $produto): View
    {
        $produto->load('fotos');

        return view('admin.produtos.edit', compact('produto'));
    }

    public function update(UpdateProdutoRequest $request, Produto $produto): RedirectResponse
    {
        $data = $request->validated();

        if ($request->has('nome') && $produto->nome !== $data['nome']) {
            $data['slug'] = Str::slug($data['nome']);
        }

        if ($request->has('caracteristicas_text') && ! empty($request->caracteristicas_text)) {
            $data['caracteristicas'] = array_filter(
                array_map('trim', explode("\n", $request->caracteristicas_text))
            );
        }

        $produto->update($data);

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto): RedirectResponse
    {
        foreach ($produto->fotos as $foto) {
            if (str_starts_with($foto->caminho, 'storage/')) {
                $path = str_replace('storage/', '', $foto->caminho);
                Storage::disk('public')->delete($path);
            } else {
                Storage::disk('public')->delete($foto->caminho);
            }
        }

        $produto->delete();

        return redirect()->route('admin.produtos.index')
            ->with('success', 'Produto excluído com sucesso!');
    }

    public function storeFoto(Request $request, Produto $produto): RedirectResponse
    {
        $validated = $request->validate([
            'fotos' => ['required', 'array'],
            'fotos.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        $ordemBase = (int) $produto->fotos()->max('ordem');

        foreach ($validated['fotos'] as $index => $arquivo) {
            $path = $arquivo->store('produtos/'.$produto->id, 'public');

            ProdutoFoto::create([
                'produto_id' => $produto->id,
                'caminho' => 'storage/'.$path,
                'ordem' => $ordemBase + $index + 1,
            ]);
        }

        return redirect()->route('admin.produtos.edit', $produto)
            ->with('success', 'Foto(s) adicionada(s) com sucesso!');
    }

    public function destroyFoto(Produto $produto, ProdutoFoto $foto): RedirectResponse
    {
        if ($foto->produto_id !== $produto->id) {
            return redirect()->route('admin.produtos.edit', $produto)
                ->with('error', 'Foto não pertence a este produto.');
        }

        if (str_starts_with($foto->caminho, 'storage/')) {
            $path = str_replace('storage/', '', $foto->caminho);
            Storage::disk('public')->delete($path);
        } else {
            Storage::disk('public')->delete($foto->caminho);
        }

        $foto->delete();

        return redirect()->route('admin.produtos.edit', $produto)
            ->with('success', 'Foto removida com sucesso!');
    }

    public function solicitarOrcamento(OrcamentoProdutoRequest $request, Produto $produto): RedirectResponse
    {
        try {
            $validated = $request->validated();
            $emailDestino = config('mail.contato_destino');
            $emailDestinoEnv = env('MAIL_CONTATO_DESTINO');

            // Tenta usar o config primeiro, se vazio tenta o env diretamente
            if (empty($emailDestino) && ! empty($emailDestinoEnv)) {
                $emailDestino = $emailDestinoEnv;
            }

            if (empty($emailDestino)) {
                Log::error('Email de destino não configurado para orçamento', [
                    'config_mail_contato_destino' => config('mail.contato_destino'),
                    'env_MAIL_CONTATO_DESTINO' => env('MAIL_CONTATO_DESTINO'),
                ]);

                return redirect()->route('produto.detalhes', $produto->slug)
                    ->with('error', 'Erro na configuração do email. Por favor, tente novamente mais tarde.')
                    ->withInput();
            }

            $mailable = new OrcamentoProdutoMail(
                nome: $validated['nome'],
                email: $validated['email'],
                telefone: $validated['telefone'],
                empresa: $validated['empresa'] ?? null,
                quantidade: $validated['quantidade'] ?? null,
                mensagem: $validated['mensagem'],
                produtoNome: $validated['produto'],
                produtoCodigo: $validated['codigo'],
            );

            Mail::to($emailDestino)->send($mailable);

            Log::info('Email de orçamento enviado com sucesso', [
                'email_destino' => $emailDestino,
                'produto' => $produto->nome,
            ]);

            return redirect()->route('produto.detalhes', $produto->slug)
                ->with('success', 'Solicitação de orçamento enviada com sucesso! Entraremos em contato em breve.');
        } catch (\Exception $e) {
            Log::error('Erro ao enviar email de orçamento', [
                'erro' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'dados' => $request->all(),
            ]);

            return redirect()->route('produto.detalhes', $produto->slug)
                ->with('error', 'Ocorreu um erro ao enviar a solicitação. Por favor, tente novamente ou entre em contato diretamente.')
                ->withInput();
        }
    }
}
