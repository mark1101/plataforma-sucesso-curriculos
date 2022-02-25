@extends('Layout.tertiary-alt')

@section('title', 'Obrigado')

@section('content')

<!--------- Hero area start --------->
<section class="hero__area evaluate-hero pt-3 pb-0">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7 mb-3">
                <div class="evalutaion__content__wrapper">
                    <h3> Obrigado!</h3>
                    <form action="">
                        <p>Sua opinião é muito importante para nós.</p>
                        <div class="evaluation__content__bottom__btns">
                            <button type="submit" class="bg-red"> Voltar para a página inicial</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="evaluate__thumb">
                    <img class="fr-desktop" src="{{asset('img/evaluate-thumb.svg')}}" alt="">
                    <img class="fr-mobile d-none" src="{{asset('img/thumb/evalute-thumb-2.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->

@endsection
