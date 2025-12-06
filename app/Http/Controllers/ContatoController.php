<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoRequest;
use App\Mail\ContatoMail;
use App\Models\Empresa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        $empresas = Empresa::with(['fotos', 'contatos'])
            ->where('ativo', true)
            ->orderByRaw("CASE WHEN tipo = 'matriz' THEN 0 ELSE 1 END")
            ->orderBy('id')
            ->get();

        return view('contato', compact('empresas'));
    }

    /**
     * Handle the contact form submission.
     */
    public function store(ContatoRequest $request): RedirectResponse
    {
        try {
            $validated = $request->validated();
            $emailDestino = config('mail.contato_destino');
            $emailDestinoEnv = env('MAIL_CONTATO_DESTINO');

            Log::info('Iniciando envio de email de contato', [
                'email_destino_config' => $emailDestino,
                'email_destino_env' => $emailDestinoEnv,
                'email_destino_empty' => empty($emailDestino),
                'email_destino_null' => is_null($emailDestino),
                'mailer' => config('mail.default'),
                'from_address' => config('mail.from.address'),
                'from_name' => config('mail.from.name'),
                'dados' => [
                    'nome' => $validated['nome'],
                    'email' => $validated['email'],
                    'telefone' => $validated['telefone'],
                ],
            ]);

            // Tenta usar o config primeiro, se vazio tenta o env diretamente
            if (empty($emailDestino) && ! empty($emailDestinoEnv)) {
                $emailDestino = $emailDestinoEnv;
                Log::info('Usando email do env diretamente', ['email' => $emailDestino]);
            }

            if (empty($emailDestino)) {
                Log::error('Email de destino não configurado', [
                    'config_mail_contato_destino' => config('mail.contato_destino'),
                    'env_MAIL_CONTATO_DESTINO' => env('MAIL_CONTATO_DESTINO'),
                    'env_MAIL_FROM_ADDRESS' => env('MAIL_FROM_ADDRESS'),
                ]);

                return redirect()->route('contato')
                    ->with('error', 'Erro na configuração do email. Por favor, verifique se MAIL_CONTATO_DESTINO está configurado no .env');
            }

            $mailable = new ContatoMail(
                nome: $validated['nome'],
                email: $validated['email'],
                telefone: $validated['telefone'],
                loja: $validated['loja'] ?? null,
                empresa: $validated['empresa'] ?? null,
                mensagem: $validated['mensagem'],
            );

            Log::info('Mailable criado, tentando enviar email');

            Mail::to($emailDestino)->send($mailable);

            Log::info('Email enviado com sucesso', [
                'email_destino' => $emailDestino,
            ]);

            return redirect()->route('contato')
                ->with('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
        } catch (\Exception $e) {
            Log::error('Erro ao enviar email de contato', [
                'erro' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'dados' => $request->all(),
            ]);

            return redirect()->route('contato')
                ->with('error', 'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente ou entre em contato diretamente.')
                ->withInput();
        }
    }
}
