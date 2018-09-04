@extends('layout.app')


@section('body')   

    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">

                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">
                            Cadastro de produtos
                        </h5>
                        <p>
                            Aqui você cadastra os produtos <br />
                            Só não esqueça de cadastrar as categorias
                        </p>
                        <a href="/produtos" class="btn btn-primary">
                        Cadastre seus Produtos</a>
                    </div>
                </div>

                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">
                            Cadastro de categorias
                        </h5>
                        <p>
                            Aqui você cadastra as categorias
                        </p>
                        <a href="/categorias" class="btn btn-primary">
                        Cadastre as categorias</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
 