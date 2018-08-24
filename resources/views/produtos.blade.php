<html>
<head>
    <title> Produtos </title>
    
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet" />

</head>

<body>
teste
    @if(isset($produtos))

        @if(count($produtos) == 0)
            <h2>Nenhum produto</h2>
        @elseif(count($produtos) === 1)
            <h2>Um produto</h2>  
        @else
            <h2>Vários produtos</h2>  
        @endif


    @else
        <h2>Sem variável produtos</h2>
    @endif




   <script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>
</body>
</html>