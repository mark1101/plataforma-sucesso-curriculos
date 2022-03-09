@extends('Layout.tertiary')

@section('title', 'Sucesso Empregos - Registro')

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
                    </div>
                </div>
                <div class="note-thumb note-thumb-2">
                    <img src="{{asset('img/thumb/thumb-3.png')}}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="hero__form__wrapper">
                        <h4 class="text-red">Crie sua conta Empresa</h4>
                        <form method="POST" action="{{ route('register-company') }}">
                            @csrf
                            <div class="single__input__item">
                                <label for="name">{{__('Digite o nome da sua empresa') }}</label>

                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>

                            <div class="single__input__item">
                                <label for="cnpj">{{__('Digite o CNPJ da sua empresa') }}</label>

                                <input id="cnpj" type="text" class="form-control" name="cnpj" required>
                            </div>

                            <div class="single__input__item">
                                <label for="address">{{__('Endereço da sua Empresa') }}</label>

                                <input id="address" type="text" class="form-control" name="address" required>
                            </div>

                            <div class="single__input__item">
                                <label for="email">{{ __('Digite o email corporativo') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="single__input__item">
                                <label for="password">{{ __('Crie uma senha') }}</label>

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
                                <button class="btn-red" type="submit" style="width: 100%!important;">Criar Conta</button>
                            </div>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->

@endsection
