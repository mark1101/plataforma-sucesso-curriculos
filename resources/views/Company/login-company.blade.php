@extends('Layout.tertiary-login')

@section('title', 'Sucesso Empregos - Login Empresa')

@section('content')

    <!--------- Hero area start --------->
    <section class="hero__area presa-hero">
        <div class="hero__shape-2">
            <img src="{{ asset('img/shapes/shape-3.png') }}" alt="">
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
                        <a href="">Baixar currículos</a>
                    </div>
                </div>
                <div class="note-thumb note-thumb-2">
                    <img src="{{ asset('img/thumb/thumb-3.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="hero__form__wrapper">
                        <h4 class="text-red">Já sou cadastrado</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="single__input__item">
                                <label for="email">{{ __('Digite seu email') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="single__input__item">
                                <label for="password">{{ __('Sua senha') }}</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="hero__form__bottom d-flex justify-content-between pt-3">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Recuperar senha') }}
                                    </a>
                                @endif
                                <a class="btn btn-link" href="{{ url('empresa/registro') }}">
                                    {{ __('Criar uma Conta') }}
                                </a>
                            </div>
                            <div class="hero__form__bottom d-flex justify-content-between pt-3">
                                <button type="submit" class="btn-red" style="width: 100%!important;">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->

@endsection
