@extends('Layout.tertiary-alt')

@section('title', 'Obrigado Pela Sugestão')

@section('content')

    <!--------- Hero area start --------->
    <section class="hero__area evaluate-hero pt-3 pb-0">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-7">
                    <div class="evalutaion__content__wrapper suggestion-content-wrapper pb-4">
                        <h2>Sugestão enviada!</h2>
                        <p>Obrigado por contribuir para <br>
                        melhorarmos nosso site para você.</p>
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



