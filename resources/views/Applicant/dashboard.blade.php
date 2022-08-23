@extends('Layout.secundary')

@section('title', 'Sucesso Empregos - Dashboard')

@section('content')

<!--------- Hero area start --------->
<section class="hero__area">
    <div class="hero__shape-2">
        <img src="{{ asset('img/shapes/shape-2.png') }}" alt="">
    </div>
    <div class="container position-relative">
        <div class="row ">
            <div class="col-md-6 mt-5" style="text-align:left">
                <div class="hero__content__wrapp">
                    <h4>
                        <span>Boas vindas {{ $name }} </span>
                        <p style="margin-top: 10px; font-size: 20px; font-weight: 400;">Obrigado por visitar o nosso site e saiba que estamos sempre empenhados em conseguir um ótimo emprego para você.<br>
                            Torcemos muito pelo seu <span>Sucesso!</span></p>
                    </h4>
                    @if ($plano != null)
                    <h5>Plano ativo: <span>{{ $plano->name }}</span></h5>
                    <h5>Seu plano expira em:<span> {{ $expiration }} </span></h5>
                    @if ($blocked != 'null')
                    <h5>Currículo bloqueado para o CNPJ:<span> {{ $blocked }} </span></h5>
                    @else
                    <h5>Nenhum CNPJ bloqueado</h5>
                    @endif
                    @else
                    <span style="font-size: 35px; color:#F5264B; font-weight:900; text-transform: uppercase;">Atenção {{ $name }}!</span>
                    <h5 style="font-weight: 400;">Você não tem nenhum plano ativo no momento, seu currículo estará inativo para buscas no sistema.
                    </h5>
                    <h5><a href="{{ url('candidato-planos') }}">Clique aqui</a> para ativar seu plano</h5>
                    @endif
                </div>
            </div>
            <div class="col-md-6 mt-5" style="text-align:center; align-self: center;">
                @if ($curriculum == null)
                <div class="evaluation__content__bottom__btns">
                    <a href="{{ url('curriculos/cadastro') }}">Cadastrar meu currículo!</a>
                </div>
                @if ($plano != null)
                <a class="btn btn-renove" href="{{ url('candidato-planos') }}" style="color: white; margin-top: 40px;">Gerenciar
                    Planos</a>
                @endif
                @else
                <div class="mt-5">
                    <div class="evaluation__content__bottom__btns">
                        <a href="{{ url('meu-curriculo') }}">Visualizar meu currículo</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->
<style>
    .btn-renove {
        background-color: #FEBC2C;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 20px;
    }

    @media only screen and (max-width: 600px) {
        .btn-renove {
            width: 100% !important;
        }

        .evaluation__content__bottom__btns,
        evaluation__content__bottom__btns {
            width: 100% !important;
            display: contents;
        }
    }
</style>


@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        if ({{ $payment == true }}) {
            Swal.fire({
                toast: true,
                position: "top-end",
                timerProgressBar: false,
                icon: "warning",
                timer: 5000,
                title: "Você possui pagamento de plano pendente.",
                text: "Regularize agora mesmo",
                showConfirmButton: false,
                cancelButtonText: "ok",
                allowEscapeKey: true,
            });
        }
    })
</script>
