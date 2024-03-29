@extends('Layout.tertiary-faq-suggestion')

@section('title', 'Sugestão')

@section('content')


    <!--------- Hero area start --------->
    <section class="hero__area evaluate-hero pt-3 pb-0">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-7">
                    <div class="evalutaion__content__wrapper suggestion-content-wrapper">
                        <h5>Possui alguma sugestão de melhorias
                            em nosso site? Escreva aqui!</h5>
                        <form action="{{url('/sugestao/register-suggestion')}}" method="POST">
                            @csrf
                            <textarea name="suggestion" id="suggestion" placeholder="Deixe sua sugestão aqui…"
                                      class="form-control" required></textarea>
                            <div class="evaluation__content__bottom__btns">
                                <button type="submit" class="bg-red"> Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 col-md-5">
                    <div class="evaluate__thumb">
                        <img class="fr-desktop" src="{{asset('img/suggestion-thumb.svg')}}" alt="">
                        <img class="fr-mobile d-none" src="{{asset('img/thumb/suggestion-thumb-2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->

@endsection



