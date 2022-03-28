@extends('Layout.tertiary')

@section('title', 'Sucesso Empregos - Dashboard')

@section('content')

    <!--------- Hero area start --------->
    <section class="hero__area">
        <div class="hero__shape-2">
            <img src="{{ asset('img/shapes/shape-3.png') }}" alt="">
        </div>

        <div class="row">
            <div class="col-md-6 mt-5" style="padding-left: 146.5px">
                <div class="hero__content__wrapp">
                    <h4 style="text-transform: capitalize">
                        <span>Bem-vindo, {{ $name }} </span>
                    </h4>
                    <h5>Seu plano expira em:<span> 10 </span> dias</h5>
                </div>
            </div>

            <div class="col-md-6 mt-5" style="text-align:-webkit-center">

                <div class="evaluation__content__bottom__btns-red" style="max-width: 50%">
                    <a href="{{ url('/empresa/encontrar-curriculos') }}">Encontrar Currículos</a>
                </div>

                <div class="evaluation__content__bottom__btns-red mt-3" style="max-width: 50%">
                    <a href="{{ url('/empresa/acessar-curriculos') }}">acessar meus currículos</a>
                </div>

            </div>
        </div>

    </section>
    <!--------- Hero area end --------->


@endsection
