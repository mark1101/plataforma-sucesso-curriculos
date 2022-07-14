@extends('Layout.secundary')

@section('title', 'Sucesso Empregos - Dashboard')

@section('content')

    <!--------- Hero area start --------->
    <section class="hero__area">
        <div class="hero__shape-2">
            <img src="{{ asset('img/shapes/shape-2.png') }}" alt="">
        </div>
        <div class="container position-relative">
            <div class="row ">
                <div class="col-md-6 mt-5" style="text-align:left">
                    <div class="hero__content__wrapp">
                        <h4>
                            <span>Bem-vindo, {{ $name }} </span>
                        </h4>
                        <h5>Plano ativo: <span>{{ $plano->name }}</span></h5>
                        <h5>Seu plano expira em:<span> {{ $expiration }} </span></h5>
                        @if ($blocked != 'null')
                            <h5>Currículo bloqueado para o CNPJ:<span> {{ $blocked }} </span></h5>
                        @else
                            <h5>Nenhum CNPJ bloqueado</h5>
                        @endif
                    </div>
                    <div class="hero__content__wrapp">
                        <a class="btn btn-renove" href="{{ url('candidato-planos') }}" style="color: white">Gerenciar Planos</a>
                    </div>
                </div>
                <div class="col-md-6 mt-5" style="text-align:center">
                    @if ($curriculum == null)
                        <div class="evaluation__content__bottom__btns">
                            <a href="{{ url('curriculos/cadastro') }}">Criar agora meu currículo!</a>
                        </div>
                    @else
                        <div class="mt-5">
                            <div class="evaluation__content__bottom__btns">
                                <a href="{{ url('meu-curriculo') }}">Visualizar meu currículo</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->
    <style>
        .btn-renove {
            background-color: #FEBC2C;
            ;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 20px;
        }

    </style>


@endsection
