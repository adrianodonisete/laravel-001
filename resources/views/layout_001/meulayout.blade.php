<html>
<head>
    <title> Produtos </title>
    
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet" />

</head>

<body>
    

    @hasSection('minha_secao_produtos')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Produtos</h5>

            <p class="card-text">
                @yield('minha_secao_produtos')
            </p>

            <a href="javascript:;" class="card-link">Informações</a>
            <a href="javascript:;" class="card-link">Ajuda</a>
        </div>
    </div>
    @endif

    



   <script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>
</body>
</html>