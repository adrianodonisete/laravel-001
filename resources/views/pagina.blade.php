<html>
<head>
    <title> teste teste</title>

    <!--<link href="{{asset('css/app.css')}}" rel="stylesheet" />-->
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet" />

</head>

<body>

    @component('components.meucomponente', ['mensagem' => 'Aviso aos navegantes'])
        <strong>Teste de mensagem</strong>

        @slot('titulo')
            Erro Fatal
        @endslot

        @slot('tipo')
            danger
        @endslot
    @endcomponent

    @component('components.meucomponente', ['mensagem' => 'Aviso aos navegantes'])
        <strong>Teste de mensagem</strong>

        @slot('titulo')
            Erro Fatal
        @endslot

        @slot('tipo')
            primary
        @endslot
    @endcomponent

    @alerta(['mensagem' => 'Aviso aos navegantes'])
        <strong>Teste de mensagem</strong>

        @slot('titulo')
            Erro Fatal
        @endslot

        @slot('tipo')
            warning
        @endslot
    @endalerta

    @alerta(['mensagem' => 'Aviso aos navegantes', 
        'titulo' => 'Erro Fatal',
        'tipo' => 'success'])

        <strong>Teste de mensagem</strong>

    @endalerta

    <!--<script src="{{asset('js/app.js')}}" type="text/javascript"></script>-->
    <script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>


</body>
</html>