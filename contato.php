<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    include 'gtag.php';
    include 'assets/css/styles.php';
    ?>

    <link rel="shortcut icon" href="assets/favicon.ico?v=2" type="image/x-icon">
    <link rel="icon" href="assets/favicon.ico?v=2" type="image/x-icon">

    <title>Solicite Orçamento | YouSea - Marketing Digital</title>
</head>
<body>

    <main>

        <section class="contato bg-light">
            <div class="container flex">
                <div class="contato-form bg-rounded-white">
                    <div id="contact_title">
                        <h2 class="subtitle">Tem alguma dúvida?</h2>
                        <h3>Entre em contato com a gente!</h3>
                    </div>

                    <div style="display:none;" id="thankyou_message">
                        <h2 class="subtitle">Obrigada!</h2>
                        <h3>Em breve você receberá uma resposta de nossos especialistas!</h3>
                        <p>Aguarde enquanto você é redirecionado para a nossa página inicial</p>
                    </div>

                    <form action="https://script.google.com/macros/s/AKfycbxUHPiT7cRN3hE96mmQN-zEPf8sTW_q54tKa9fB/exec" method="POST" id="gform">
                        <div class="form-control form-inline-two">
                            <div>
                                <label for="nome">Nome *</label>
                                <input type="text" placeholder="Seu Nome" name="nome" required>
                            </div>
                            <div>
                                <label for="email">Email *</label>
                                <input type="email" placeholder="Seu Email" name="email" required>
                            </div>
                        </div>

                        <div class="form-control form-inline-two">
                            <div>
                                <label for="empresa">Empresa *</label>
                                <input type="text" placeholder="Seu Empresa" name="empresa" required>
                            </div>
                            <div>
                                <label for="cargo">Cargo *</label>
                                <input type="text" placeholder="Seu Cargo" name="cargo" required>
                            </div>
                        </div>

                        <div class="form-control">
                            <div>
                                <label for="solicitacao">Solicitação *</label>
                                <select name="solicitacao" required>
                                    <option value="" disabled="disabled" selected>Selecione um tipo</option>
                                    <option value="Orçamento">Orçamento</option>
                                    <option value="Dúvida">Dúvida</option>
                                    <option value="Reportar Bug">Reportar Bug</option>
                                    <option value="Comentário">Comentário</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-control">
                            <div>
                                <label for="nome">Sua Mensagem</label>
                                <textarea type="text" placeholder="Seu Empresa" name="mensagem" rows="5"></textarea>
                            </div>
                            <input type="text" name="origem" value="Contato" style="display:none;" >
                        </div>

                        <input type="submit" value="Entre em Contato" class="btn btn-red">
                    </form>

                </div>

                <div class="contato-redes">
                    <img src="img/logo.png" class="img-responsive logo" alt="Logo YouSea">
                    <div class="flex flex-align-center">
                        <img src="img/contato/marketing.png" class="img-responsive" alt="Valor 1">
                        <h4>Marketing Digital e de Conteúdo</h4>
                    </div>
                    <div class="flex flex-align-center">
                        <img src="img/contato/webdesign.png" class="img-responsive" alt="Valor 2">
                        <h4>Web Design e SEO</h4>
                    </div>
                    <div class="flex flex-align-center">
                        <img src="img/contato/redes-sociais.png" class="img-responsive" alt="Valor 3">
                        <h4>Redes Sociais</h4>
                    </div>

                    <hr class="blue">

                   <div class="contato-redes-sociais">
                        <div class="flex">
                            <a href="mailto:contato@yousea.me" target="_blank">
                                <i class="fas fa-envelope fa-lg"></i>
                                <span>   contato@yousea.me</span>
                            </a>
                        </div>
                        <div class="flex">
                            <a href="https://www.facebook.com/yousea.marketing/" target="_blank">
                                <i class="fab fa-facebook-square fa-lg"></i>
                                <span>  /yousea.marketing</span>
                            </a>
                        </div>
                        <div class="flex">
                            <a href="https://www.linkedin.com/company/yousea/" target="_blank">
                                <i class="fab fa-linkedin fa-lg"></i>
                                <span>  /yousea</span>
                            </a>
                        </div>
                        <div class="flex">
                            <a href="https://www.instagram.com/yousea.me/" target="_blank">
                                <i class="fab fa-instagram fa-lg"></i>
                                <span>  /yousea.me</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contato bg-light">
            <div class="container servicos-depoimentos">
                <div class="citacao _960px">
                    <h3>Um Case de Sucesso</h3>
                    <blockquote>
                      <p>A YouSea tem uma equipe extremamente educada e carismática, dando atenção ao cliente desde o primeiro contato. Elas seguem uma metodologia para garantir a maior qualidade e acerto para com os objetivos do cliente! O processo e a metodologia foi um dos pontos fortes ao contratar o serviço!</p>
                      <p>A equipe demonstra conhecimento e habilidade para executar as atividades, não necessitando muito envolvimento do cliente no andamento do processo, o que para mim significa plena confiança nesse trabalho. A YouSea demonstra o respeito pelos princípio éticos da integridade e competência, valores que dificilmente você encontra no mercado!</p>
                      <p>Eu recomendo os serviços e soluções para outros pessoas e empresas!</p>
                    </blockquote>
                    <div class="citacao-fonte">
                        <img src="../img/contato/seigo-histec.png" alt="Foto do Cliente - Depoimento">
                        <p>- Guilherme Seigo Matsumoto, <br> Histec Comercial</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="footer-copyright">
            <p>© Copyright 2018 | YouSea Marketing Digital</p>
        </div>
    </footer>

    <?php
        include 'assets/js/scripts.php';
    ?>
    <script data-cfasync="false" type="text/javascript" src="assets/js/form-handler.js"></script>

</body>
</html>
