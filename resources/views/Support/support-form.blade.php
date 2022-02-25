@extends('Layout.quaternary')

@section('title', 'Precisa de Ajuda?')

@section('content')


<!--------- Hero area start --------->
<section class="hero__area support-hero ">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-lg-6 col-md-6">
                <div class="support__content__wrapper">
                    <h4>Está com dúvidas ou problemas?
                        A gente te ajuda!</h4>
                    <div class="evalutaion__content__wrapper text-start support-content-wrapper">
                        <div class="single__input__item">
                            <label for="">Nome Completo</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="single__input__item">
                            <label for=""> E-mail </label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="single__input__item">
                            <label for=""> Assunto </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="single__input__item">
                            <label for="">Mensagem</label>
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                        <div class="evaluation__content__bottom__btns">
                            <button type="button" class="bg-red"> Enviar</button>
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
