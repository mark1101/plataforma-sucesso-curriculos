@extends('Layout.quaternary')

@section('title', 'Obrigado')

@section('content')


<!--------- Hero area start --------->
<section class="hero__area support-hero ">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-lg-6 col-md-6">
                <div class="support__content__wrapper">
                    <h4>Sua mensagem foi enviada
                        com sucesso!</h4>
                    <div class="evalutaion__content__wrapper  support-content-wrapper pb-4">
                        <div class="text-md">Em breve nossa equipe entrará em contato <br>
                            com você para solucionarmos seu problema. <br>
                            Obrigado!
                        </div>
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
