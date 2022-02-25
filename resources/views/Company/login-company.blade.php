@extends('Layout.tertiary')

@section('title', 'Login Empresa')

@section('content')

    <!--------- Hero area start --------->
    <section class="hero__area presa-hero">
        <div class="hero__shape-2">
            <img src="{{asset('img/shapes/shape-3.png')}}" alt="">
        </div>
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero__content__wrapp">
                        <h4>Baixe <span>GRÁTIS</span> os <br>
                            melhores currículos <br>
                            de Guarapuava e região <br>
                            e contrate agora mesmo!
                        </h4>
                        <p class="text-md">Utilizando nossos filtros avançados, sua empresa consegue baixar os
                            currículos Guarapuavanos
                            mais adequados para cada vaga, escolhendo candidatos por tempo de experiência, área de
                            formação, idade, gênero e muito mais!</p>
                        <a href="">Preencha seu currículo!</a>
                    </div>
                </div>
                <div class="note-thumb note-thumb-2">
                    <img src="{{asset('img/thumb/thumb-3.png')}}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="hero__form__wrapper">
                        <h4 class="text-red">Já sou cadastrado</h4>
                        <form action="">
                            <div class="single__input__item">
                                <label for="">Login</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="single__input__item">
                                <label for="">Senha</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="hero__form__bottom d-flex justify-content-between pt-3">
                                <a href="">Esqueceu a senha?</a>
                                <button type="submit" class="btn-red">entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->

@endsection
