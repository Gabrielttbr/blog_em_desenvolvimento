<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Blog relacionado a dúvidas sobre programação">
    <meta name="keywords" content="HTML, CSS, JavaScript, Programação, testes, php">
    <meta name="author" content="Gabriel Carlos Cavalcante">
    <title>EM DESENVOLVIMENTO</title>
    @livewireStyles
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="bg-white p-0 m-0 max-w-full h-full max-h-screen h-screen" >
    {{ $slot  }}
    @livewireScripts
</body>
</html>