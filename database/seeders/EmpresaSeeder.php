<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\EmpresaContato;
use App\Models\EmpresaFoto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmpresaSeeder extends Seeder
{
    public function run(): void
    {
        // Empresa Matriz
        $matriz = Empresa::create([
            'nome' => 'Loja Matriz',
            'slug' => 'loja-matriz',
            'descricao' => 'Nossa loja matriz, localizada no centro da cidade, oferece atendimento completo e uma ampla variedade de produtos.',
            'endereco' => 'Rua Principal, 123 - Centro',
            'telefone' => '(11) 1234-5678',
            'email' => 'matriz@fardamentos.com.br',
            'tipo' => 'matriz',
            'horario_funcionamento' => 'Segunda a Sexta, 8h às 18h | Sábado, 8h às 13h',
            'ativo' => true,
        ]);

        // Fotos da Matriz
        if (file_exists(public_path('imagem/06.PNG'))) {
            EmpresaFoto::create([
                'empresa_id' => $matriz->id,
                'caminho' => 'imagem/06.PNG',
                'titulo' => 'Fachada da Loja Matriz',
                'ordem' => 1,
            ]);
        }

        // Contatos da Matriz
        EmpresaContato::create([
            'empresa_id' => $matriz->id,
            'tipo' => 'telefone',
            'valor' => '(11) 1234-5678',
            'label' => 'Telefone Principal',
            'ordem' => 1,
        ]);

        EmpresaContato::create([
            'empresa_id' => $matriz->id,
            'tipo' => 'whatsapp',
            'valor' => '(11) 98765-4321',
            'label' => 'WhatsApp',
            'ordem' => 2,
        ]);

        EmpresaContato::create([
            'empresa_id' => $matriz->id,
            'tipo' => 'email',
            'valor' => 'matriz@fardamentos.com.br',
            'label' => 'E-mail',
            'ordem' => 3,
        ]);

        // Empresa Filial
        $filial = Empresa::create([
            'nome' => 'Loja Filial',
            'slug' => 'loja-filial',
            'descricao' => 'Nossa loja filial, estrategicamente localizada, oferece comodidade e praticidade para nossos clientes.',
            'endereco' => 'Avenida Secundária, 456 - Bairro Novo',
            'telefone' => '(11) 9876-5432',
            'email' => 'filial@fardamentos.com.br',
            'tipo' => 'filial',
            'horario_funcionamento' => 'Segunda a Sexta, 9h às 17h',
            'ativo' => true,
        ]);

        // Fotos da Filial
        if (file_exists(public_path('imagem/07.PNG'))) {
            EmpresaFoto::create([
                'empresa_id' => $filial->id,
                'caminho' => 'imagem/07.PNG',
                'titulo' => 'Fachada da Loja Filial',
                'ordem' => 1,
            ]);
        }

        if (file_exists(public_path('imagem/08.PNG'))) {
            EmpresaFoto::create([
                'empresa_id' => $filial->id,
                'caminho' => 'imagem/08.PNG',
                'titulo' => 'Interior da Loja Filial',
                'ordem' => 2,
            ]);
        }

        // Contatos da Filial
        EmpresaContato::create([
            'empresa_id' => $filial->id,
            'tipo' => 'telefone',
            'valor' => '(11) 9876-5432',
            'label' => 'Telefone Principal',
            'ordem' => 1,
        ]);

        EmpresaContato::create([
            'empresa_id' => $filial->id,
            'tipo' => 'whatsapp',
            'valor' => '(11) 91234-5678',
            'label' => 'WhatsApp',
            'ordem' => 2,
        ]);

        EmpresaContato::create([
            'empresa_id' => $filial->id,
            'tipo' => 'email',
            'valor' => 'filial@fardamentos.com.br',
            'label' => 'E-mail',
            'ordem' => 3,
        ]);
    }
}
