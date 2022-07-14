@extends('Layout.secundary-login')

@section('title', 'Sucesso Empregos - Login Candidato')

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
                        <p>
                            Procurar emprego de forma tradicional toma tempo, custa caro e tem abrangência muito 
                            menor. Considere gastos com transporte, alimentação, impressões de curriculo e internet móvel.
                            Curriculos por e-mail então vão direto para lixeira ou nem são vistos. Esteja presente onde as empresas
                            procuram, esse lugar é aqui. Pague R% 9,90 e fique disponível para 100% das empresas de Guarapuava e Região. 
                        </p>
                    </div>
                </div>
                <div class="note-thumb">
                    <img src="{{ asset('img/note-thumb.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="hero__form__wrapper">
                        <h4>Já sou cadastrado</h4>
                        <form method="POST" action="{{route('login')}}">
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
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required
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
                                <a class="btn btn-link" href="{{ url('candidato/registro') }}">
                                    {{ __('Criar uma Conta') }}
                                </a>
                            </div>
                            <div class="hero__form__bottom d-flex justify-content-between pt-3">
                                <button type="submit" style="width: 100%!important;">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- Hero area end --------->

@endsection
