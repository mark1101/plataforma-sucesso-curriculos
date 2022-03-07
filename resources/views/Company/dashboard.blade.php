@extends('Layout.secundary')

@section('title', 'Sucesso Empregos - Dashboard Empresa')

@section('content')

    <!--------- Hero area start --------->
    <section class="hero__area">
        <div class="hero__shape-2">
            <img src="{{ asset('img/shapes/shape-2.png') }}" alt="">
        </div>
        <div class="container position-relative">
            <div class="row ">
                <div class="col-md-6" style="text-align:center">
                    <div class="hero__content__wrapp">
                        <h4>
                            <span>Bem-vindo, ... </span>
                        </h4>
                        <h5>Seu plano expira em:<span> 10 </span> dias</h5>
                        <h5>Você ainda pode fazer<span> 10 </span> downloads</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero__area" style="text-align:center">
                        <div class="hero__content__wrapp">
                            <a href="{{ url('curriculos/cadastro') }}">Preencha seu currículo!</a>
                        </div>
                        <div class="mt-5">
                            <div class="hero__content__wrapp">
                                <a href="{{ url('') }}">Edite seu currículo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->


@endsection
