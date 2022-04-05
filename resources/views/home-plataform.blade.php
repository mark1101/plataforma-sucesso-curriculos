@extends('Layout.master')

@section('title', 'Sucesso Empregos')

@section('content')

    <!--------- Hero area start --------->
    <section class="hero__area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero__content__wrapper">
                        <h3><span>Guarapuava </span> <br>
                            e região!</h3>
                        <p class="has-limit">Somos mais que uma plataforma de empregos. Representamos a união de
                            Candidatos e Empresas que
                            realmente precisam se encontrar. Somos o verdadeiro ponto de encontro entre vagas e
                            candidatos.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero__area__right text-center">
                        <div class="hero__btns">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="hero__btn__card">
                                        <p>Sou candidato</p>
                                        <a style="color: white" href="{{ url('/candidato/entrar') }}">CADASTRAR CURRÍCULO</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="hero__btn__card theme--red">
                                        <p> Sou empresa</p>
                                        <a style="color: white" href="{{ url('/empresa/entrar') }}"> BAIXAR CURRÍCULO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero__thumb mt-5">
                            <img src="{{ asset('img/hero-thumb.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__shape-1">
            <img src="{{ asset('img/hero-shape.png') }}" alt="">
        </div>
    </section>
    <!--------- Hero area end --------->



    <!--------- Service Items area start --------->
    <section class="services__items__area">
        <div class="container">
            <div class="service__boxes__wrapper">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-md-6 pb-2">
                        <div class="service__box__card">
                            <div class="service__box__card__icon">
                                <img src="{{ asset('img/icons/i-3.png') }}" alt="">
                            </div>
                            <h4> por que devo entrar?</h4>
                            <p>Pois é muito mais fácil, barato e eficiente do que entregar currículos físicos ou por
                                e-mail. Você sabia que procurar emprego de forma tradicional custa 10x mais caro do que
                                usar nossa plataforma? Considere os gastos de transporte, alimentação, impressões de
                                currículo e internet móvel – você perceberá que você gasta mais do que o necessário
                                apenas para conseguir um emprego.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-6">
                        <div class="service__box__card">
                            <div class="service__box__card__icon">
                                <img src="{{ asset('img/icons/i-2.png') }}" alt="">
                            </div>
                            <h4>o que fazemos </h4>
                            <p>Nossa tarefa é bastante simples, porém de extrema importância, se você pensar a respeito.
                                Oferecemos uma plataforma para os candidatos exporem seus currículos para possíveis
                                empregadores. A cidade de Guarapuava carece de uma plataforma desse nível, sendo
                                predominante a ação arcaica de entrega de currículos físicos ou por e-mail, por isso,
                                oferecemos uma alternativa muito mais fácil, barata e com um retorno muito mais
                                satisfatório.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-6">
                        <div class="service__box__card">
                            <div class="service__box__card__icon">
                                <img src="{{ asset('img/icons/i-1.png') }}" alt="">
                            </div>
                            <h4>Quem somos</h4>
                            <p>Somos uma empresa especializada na procura de empregos na cidade de Guarapuava e região.
                                Acreditamos na ideia que a entrega de currículos deveria ser uma tarefa muito mais
                                simples e dinâmica, facilitando a interação entre candidato e empregador.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Service Items area end --------->



    <!--------- Eficient area start --------->
    <section class="eficient__area">
        <div class="container">
            <div class="eficient__content">
                <p>Eficiência para o candidato e rapidez para as <br> empresas na hora de contratar. Este é nosso <br>
                    principal
                    objetivo.</p>
                <h3>Cadastre-se no SucessoEmpregos.com <br>
                    e saia na frente! </h3>
            </div>
        </div>
    </section>
    <!--------- Eficient area end --------->



    <!--------- Newsletter area start --------->
    <section class="newsletter__area">
        <div class="container">
            <h4>Alguma dúvida?</h4>
            <div class="newsletter__btn">
                <a href="{{ url('faq') }}">leia nosso faq!</a>
            </div>
        </div>
    </section>
    <!--------- Newsletter area end --------->


@endsection
