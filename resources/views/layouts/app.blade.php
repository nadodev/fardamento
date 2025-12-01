<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fábrica de Fardamento - Uniformes Profissionais de Alta Qualidade desde 2004">
    <title>@yield('title', 'Fábrica de Fardamento - Uniformes Profissionais')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#FFD217] text-[#002164]">
    @yield('content')
</body>
</html>

