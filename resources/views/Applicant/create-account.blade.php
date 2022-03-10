@extends('Layout.secundary-login')

@section('title', 'Sucesso Empregos - Registro')

@section('content')

    <!--------- Hero area start --------->
    <section class="hero__area">
        <div class="hero__shape-2">
            <img src="{{ asset('img/shapes/shape-2.png') }}" alt="">
        </div>
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero__content__wrapp">
                        <h4>Você sabia que procurar <br>
                            emprego de forma tradicional custa
                            <span> mais caro e tem pouca eficiência?</span>
                        </h4>
                        <p>Procurar emprego de forma tradicional custa 10x mais caro do que usar nossa plataforma.
                            Considere os gastos com transporte, alimentação, impressões de currículo e internet móvel,
                            você gastará muito mais tempo e dinheiro, com uma abrangência muito menor. Enviar currículo
                            por e-mail para as empresas é pior ainda, são quase 100% das vezes descartados.</p>
                        <h5>Pague <span>R$9,90</span> por mês e fique disponível <br> para 100% das empresas de
                            Guarapuava <br> e região!</h5>
                    </div>
                </div>
                <div class="note-thumb">
                    <img src="{{ asset('img/note-thumb.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="hero__form__wrapper">
                        <h4>Criar minha conta</h4>
                        <form method="POST" action="{{ route('register-candidate') }}">
                            @csrf
                            <div class="single__input__item">
                                <label for="name">{{__('Digite seu nome') }}</label>

                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                            <div class="single__input__item">
                                <label for="email">{{ __('Digite um email') }}</label>

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
                                <button type="submit" style="width: 100%!important;">Criar Conta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->

@endsection
