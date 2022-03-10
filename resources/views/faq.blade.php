@extends('Layout.tertiary-faq-suggestion')

@section('title', 'FAQ - Sucesso Empregos')

@section('content')

<!--------- Hero area start --------->
<section class="faq__area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq__wrapper">
                    <h3>FAQ - Perguntas Frequentes</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Como funciona o Sucesso Empregos?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Nossa plataforma funciona como uma base de dados de currículos atualizada que as
                                    empresas acessam quando precisam contratar. Quando o candidato conclui seu
                                    cadastro e preenchimento do seu currículo ele fica disponível para todas as
                                    empresas que acessarem a plataforma em busca de candidatos. Quando as empresas
                                    se cadastram em busca de profissionais elas utilizam um sistema de filtros para
                                    encontrar os currículos mais adequados as vagas ofertadas naquele momento, e
                                    assim baixam os currículos para análise.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Quais os benefícios de se cadastrar no Sucesso Empregos?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong> Para o candidato</strong> se cadastrar na nossa plataforma custa 10x
                                    mais barato do que
                                    entregar currículos de forma tradicional considerando custos com transporte,
                                    alimentação, impressão de currículo e internet móvel, além disso tem um alcance
                                    e eficiência muito maior e tudo isso sem sair de casa. Agora o emprego pode
                                    bater na sua porta! <strong>Para as empresas</strong> não precisa mais abrir uma
                                    vaga e ficar
                                    aguardo candidaturas por semanas, basta entrar, baixar o currículo mais adequado
                                    e chamar para trabalhar. Sem perca de tempo!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    O Sucesso Empregos é pago?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Sim, para o candidato poder usar nossa plataforma, é necessário assinar um
                                    <strong> plano
                                        pago</strong> com valores bem acessíveis. Para as empresas temos planos
                                    pagos e gratuitos
                                    dependendo da necessidade. Procuramos encontrar um equilibro e preços bem
                                    atrativos para não deixar ninguém de fora. Barato para o candidato e barato para
                                    a empresa, assim o emprego acontece!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    O Sucesso Empregos é confiável?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Sim, a Sucesso Empregos é uma das principais plataformas que trabalham contra
                                    o desemprego em Guarapuava e região. Somos responsáveis pela recolocação de
                                    milhares de profissionais através da nossa plataforma. Por isso, se você estiver
                                    desempregado, ou simplesmente procurando uma nova oportunidade, venha para a
                                    Sucesso Empregos!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                    Como sei que o recrutador acessou meu currículo?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Você receberá uma notificação em sua dashboard e no seu e-mail avisando que o
                                    recrutador baixou seu currículo. Currículo baixado é sinal de interesse por
                                    parte do recrutador e possivelmente você entrará para um processo de seleção.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Como saberei se fui selecionado para alguma vaga?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Caso seu currículo seja selecionado, a empresa entrará em contato para fazer a
                                    entrevista através de contato telefônico, WhatsApp ou e-mail.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                    É possível se candidatar sem ter uma conta?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                 aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Não. É necessário que você esteja cadastrado em nosso portal para poder se
                                    candidatar e cadastrar seu currículo. Para realizar seu cadastro, basta clicar
                                    no botão Sou Candidato/Cadastrar currículo na página inicial do site e seguir os
                                    passos, ou <strong> clique aqui,</strong> e siga o processo de cadastramento.

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                    Esqueci minha senha, o que fazer?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                 aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Entre na opção “esqueci minha senha” ao fazer o login, que o sistema enviará de
                                    imediato no e-mail cadastrado novos dados de acesso.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                    Não recebi o e-mail de recuperação de senha. O que fazer?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Provavelmente o e-mail cadastrado está errado. Nesse caso, entre em contato com
                                    o suporte para alteração e verificação de
                                    e-mail.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq__thumb__wrapper">
                    <img src="{{asset('img/shapes/faq-thumb.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->


@endsection
