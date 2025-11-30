<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        $produtos = [
            [
                'nome' => 'Uniformes Sociais',
                'slug' => 'uniformes-sociais',
                'descricao' => 'Elegância e profissionalismo para o ambiente corporativo. Perfeitos para empresas que valorizam a apresentação e imagem profissional.',
                'codigo' => 'UNF-001',
                'lojas' => ['matriz'],
                'caracteristicas' => [
                    'Tecidos de alta qualidade e durabilidade',
                    'Personalização completa com logo e cores da empresa',
                    'Conforto e elegância para o ambiente de trabalho',
                    'Variedade de modelos e tamanhos',
                    'Acabamento impecável e profissional'
                ],
                'ativo' => true,
            ],
            [
                'nome' => 'EPI\'s',
                'slug' => 'epis',
                'descricao' => 'Segurança e proteção para diversas áreas de atuação. Equipamentos de proteção individual de alta qualidade e certificados.',
                'codigo' => 'EPI-001',
                'lojas' => ['filial'],
                'caracteristicas' => [
                    'Certificados e aprovados pelos órgãos competentes',
                    'Alta qualidade e durabilidade',
                    'Conforto durante o uso prolongado',
                    'Variedade de modelos para diferentes atividades',
                    'Atendimento às normas de segurança'
                ],
                'ativo' => true,
            ],
            [
                'nome' => 'Saúde e Beleza',
                'slug' => 'saude-beleza',
                'descricao' => 'Conforto e higiene para profissionais da saúde e estética. Tecidos especiais que garantem bem-estar e durabilidade.',
                'codigo' => 'SB-001',
                'lojas' => ['matriz', 'filial'],
                'caracteristicas' => [
                    'Tecidos antimicrobianos e fáceis de limpar',
                    'Conforto para longas jornadas de trabalho',
                    'Design moderno e profissional',
                    'Resistência a lavagens frequentes',
                    'Variedade de modelos para diferentes especialidades'
                ],
                'ativo' => true,
            ],
            [
                'nome' => 'Personalizados',
                'slug' => 'personalizados',
                'descricao' => 'Uniformes totalmente personalizados conforme sua necessidade. Criamos soluções exclusivas para sua empresa.',
                'codigo' => 'PER-001',
                'lojas' => ['matriz'],
                'caracteristicas' => [
                    'Design exclusivo e personalizado',
                    'Desenvolvimento sob medida para sua empresa',
                    'Consultoria especializada',
                    'Múltiplas opções de tecidos e acabamentos',
                    'Acompanhamento completo do projeto'
                ],
                'ativo' => true,
            ],
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
