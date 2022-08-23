@extends('Layout.tertiary-loginadm')

@section('title', 'Painel administrativo')

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
                    <p class="text-md">Painel administrativo para a plataforma Sucesso Empregos. A visualização/utilização e eventual compartilhamento dos dados referentes aos usuários da plataforma é de responsabilidade do administrador.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero__form__wrapper">
                    <h4 style="text-align: center;" class="text-red">Área de Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="single__input__item">
                            <label for="email">{{ __('Digite o email de administrador') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="single__input__item">
                            <label for="password">{{ __('Digite a senha administradora') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

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