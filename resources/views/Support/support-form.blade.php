@extends('Layout.quaternary')

@section('title', 'Precisa de Ajuda?')

@section('content')


    <!--------- Hero area start --------->
    <section class="hero__area support-hero">
        <div class="container position-relative">
            <div class="row ">
                <div class="col-lg-6 col-md-6">
                    <div class="support__content__wrapper">
                        <h4>Está com dúvidas ou problemas?
                            A gente te ajuda!</h4>
                        <div class="evalutaion__content__wrapper text-start support-content-wrapper">
                            <form action="{{url('/suporte/register-support')}}" method="POST">
                                @csrf
                                <div class="single__input__item">
                                    <label for="name">Nome Completo</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="single__input__item">
                                    <label for="email"> E-mail </label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="single__input__item">
                                    <label for="subject"> Assunto </label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                                <div class="single__input__item">
                                    <label for="problem">Mensagem</label>
                                    <textarea name="problem" id="problem" class="form-control"></textarea>
                                </div>
                                <div class="evaluation__content__bottom__btns">
                                    <button type="submit" class="bg-red"> Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="support__thumb">
                        <img src="{{asset('img/support-thumb.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->

@endsection
