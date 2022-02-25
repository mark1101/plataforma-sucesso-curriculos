@extends('Layout.tertiary-alt')

@section('title', 'Buscar Currículos')

@section('content')


<!--------- Hero area start --------->
<section class="hero__area search-hero ">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-lg-6 col-md-6">
                <div class="support__content__wrapper">
                    <h4>Selecione os filtros e <br>
                        encontre o candidato de ouro!</h4>
                    <div class="evalutaion__content__wrapper text-start support-content-wrapper">
                        <form action="">
                            <div class="row gx-3 gy-1">
                                <div class="col-sm-6">
                                    <div class="single__input__item">
                                        <label for=""> Estado</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected=""></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single__input__item">
                                        <label for=""> Estado</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected=""></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single__input__item">
                                        <label for=""> Função que o candidato exercerá</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single__input__item">
                                        <label for=""> Escolaridade</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected=""></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single__input__item">
                                        <label for=""> Tempo de Experiência</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected=""></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single__input__item">
                                        <label for=""> Formação</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="evaluation__content__bottom__btns">
                                <button type="button" class="bg-red"> Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search__thumb">
        <img src="{{asset('img/shapes/search-thumb.png')}}" alt="">
    </div>
</section>
<!--------- Hero area end --------->

@endsection
