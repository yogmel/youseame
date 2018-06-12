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
                        <h2 class="subtitle">Pronto para orçar com a gente?</h2>
                        <h3>Nos envie seus dados que entraremos em contato o mais breve possível!</h3>
                    </div>

                    <div style="display:none;" id="thankyou_message">
                        <h2 class="subtitle">Obrigada!</h2>
                        <h3>Em breve você receberá uma resposta de nossos especialistas!</h3>
                        <p>Aguarde enquanto você é redirecionado para a nossa página inicial</p>
                    </div>
                    
                    <form action="https://script.google.com/macros/s/AKfycbwz2T12qmYfVE7-WL_1h4aUhWLUphgokp0tUUzR4nPnpZFu-YE/exec" method="POST" id="gform">
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
                                    <option value="" disabled="disabled">Selecione um tipo</option>
                                    <option value="orcamento" selected>Orçamento</option>
                                    <option value="duvida">Dúvida</option>
                                    <option value="bug">Reportar Bug</option>
                                    <option value="comentario">Comentário</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-control">
                            <div>
                                <label for="nome">Sua Mensagem</label>
                                <textarea type="text" placeholder="Seu Empresa" name="mensagem" rows="5"></textarea>
                            </div>
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
                        <p>A profissional Mellina Yonashiro é extremamente educada e carismática em seu atendimento e atenção para influente. A mesma segue uma metodologia para garantir a maior qualidade e acerto para com os objetivos do cliente! O uso de metodologias foi um dos pontos a considerar a contratar o serviço!</p>
                        <p>A profissional demonstra conhecimento e habilidade para executar as atividades e prontos necessitando de pouco envolvimento do cliente, o que significa plena confiança do cliente sobre a profissional. A Mellina demonstra o respeito pelos princípio éticos da integridade e  competência. Valores que dificilmente se encontra no mercado!</p>
                        <p>Recomendo os serviços para outros pessoas e empresas!</p>
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
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/fonts/fontawesome-all.min.js"></script>
    <script data-cfasync="false" type="text/javascript" src="assets/js/form-handler.js"></script>

</body>
</html>