@extends('Layout.tertiary-alt')

@section('title', 'Avalie nossos Serviços')

@section('content')

<!--------- Hero area start --------->
<section class="hero__area evaluate-hero pt-3 pb-0">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7">
                <div class="evalutaion__content__wrapper">
                    <h3>Gostou do nosso site?</h3>
                    <p> Essa ferramenta tem o objetivo de eliminar o tempo de espera por candidatos quando as
                        empresas precisam contratar. Agora, é só baixar o currículo e contratar, simples assim! Se
                        possível, gostaríamos da sua opinião pra melhorarmos nossos serviços.</p>
                    <div class="evaluation__content__bottom__btns">
                        <a href="" class="bg-red">QUERO AVALIAR</a>
                        <a href="">CONCLUIR E SAIR</a>
                    </div>
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
