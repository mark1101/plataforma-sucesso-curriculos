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
                <div class="col-md-6 mt-5" style="text-align:center">
                    <div class="hero__content__wrapp">
                        <h4>
                            <span>Bem-vindo, {{$name}} </span>
                        </h4>
                        <h5>Seu plano expira em:<span> 10 </span> dias</h5>
                    </div>
                </div>
                <div class="col-md-6 mt-5" style="text-align:center">
                    @if($curriculum == null)
                        <div class="evaluation__content__bottom__btns">
                            <a href="{{ url('curriculos/cadastro') }}">Criar agora meu currículo!</a>
                        </div>
                    @else
                        <div class="mt-5">
                            <div class="evaluation__content__bottom__btns">
                                <a href="{{ url('') }}">Visualizar meu currículo</a>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="evaluation__content__bottom__btns">
                                <a href="{{ url('') }}">Editar meu currículo</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->


@endsection
