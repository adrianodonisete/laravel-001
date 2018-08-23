<html>
<head>
<title> teste teste @yield('titulo')</title>

</head>

<body>
    @section('barralateral')
        essa parte do codigo é do pai
    @show

    <div>
        @yield('conteudo')

    </div>

</body>
</html>