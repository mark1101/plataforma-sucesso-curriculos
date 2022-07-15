@extends('Layout.tertiary')

@section('title', 'Sucesso Empregos - Dashboard')

@section('content')

    <!--------- Hero area start --------->
    <section class="hero__area">
        <div class="hero__shape-2">
            <img src="{{ asset('img/shapes/shape-3.png') }}" alt="">
        </div>

        <div class="row">
            <div class="col-md-6 mt-5 text-info " style="padding-left: 35.5px">
                <div class="hero__content__wrapp">
                    <h4 style="text-transform: capitalize">
                        <span>Bem-vindo, {{ $name }} </span>
                    </h4>
                    <h3 class="textt" style="color:white">Plano ativo: <span>{{ $plan->name }}</span></h3>
                    <h3 class="textt" style="color:white">Você ainda tem: <span>{{ $credit }}</span> créditos</h3>
                    <h3 class="textt" style="color:white">Quantidade adquirida: <span>{{ $curriculum }}</span> currículos</h3>
                </div>
            </div>

            <div class="col-md-6 mt-5" style="text-align:-webkit-center">

                <div class="evaluation__content__bottom__btns-red button_action" >
                    <a href="{{ url('/empresa/encontrar-curriculos') }}">Encontrar Currículos</a>
                </div>

                <div class="evaluation__content__bottom__btns-red mt-3 button_action" >
                    <a href="{{ url('/empresa/acessar-curriculos') }}">acessar meus currículos</a>
                </div>

            </div>
        </div>

    </section>
    <!--------- Hero area end --------->

    <style>

        .text{
            font-size: 25px;
        }

        @media only screen and (max-width: 600px) {
            .textt {
                color: #707070 !important;
                font-size: 20px !important;
            }
        }

        @media only screen and (min-width: 800px) {
            .text-info {
                padding-left: 146.5px !important;
            }
        }

        .button_action{
            max-width: 50%;
        }

        @media only screen and (max-width: 600px) {
            .button_action {
                max-width: 100%;
            }
        }

    </style>


@endsection
