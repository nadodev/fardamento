<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Mensagem de Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #002164;
            color: #FFD217;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 30px -30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .info-section {
            margin-bottom: 25px;
        }
        .info-section h2 {
            color: #002164;
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 2px solid #FFD217;
            padding-bottom: 5px;
        }
        .info-item {
            margin-bottom: 15px;
        }
        .info-label {
            font-weight: bold;
            color: #002164;
            display: inline-block;
            min-width: 100px;
        }
        .info-value {
            color: #333;
        }
        .message-box {
            background-color: #f9f9f9;
            border-left: 4px solid #002164;
            padding: 15px;
            margin-top: 20px;
            border-radius: 4px;
        }
        .message-box p {
            margin: 0;
            white-space: pre-wrap;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nova Mensagem de Contato</h1>
        </div>

        <div class="info-section">
            <h2>Informações do Contato</h2>
            <div class="info-item">
                <span class="info-label">Nome:</span>
                <span class="info-value">{{ $nome }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">E-mail:</span>
                <span class="info-value">{{ $email }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Telefone:</span>
                <span class="info-value">{{ $telefone }}</span>
            </div>
            @if($empresa)
            <div class="info-item">
                <span class="info-label">Empresa:</span>
                <span class="info-value">{{ $empresa }}</span>
            </div>
            @endif
            @if($loja)
            <div class="info-item">
                <span class="info-label">Loja de Interesse:</span>
                <span class="info-value">{{ $loja === 'matriz' ? 'Loja Matriz' : 'Loja Filial' }}</span>
            </div>
            @endif
        </div>

        <div class="info-section">
            <h2>Mensagem</h2>
            <div class="message-box">
                <p>{{ $mensagem }}</p>
            </div>
        </div>

        <div class="footer">
            <p>Esta mensagem foi enviada através do formulário de contato do site {{ config('app.name') }}.</p>
            <p>Data: {{ now()->format('d/m/Y H:i:s') }}</p>
        </div>
    </div>
</body>
</html>





