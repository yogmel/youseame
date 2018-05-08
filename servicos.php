<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    include 'gtag.php';
    include 'assets/css/styles.php';
    ?>

    <title>Serviços | YouSea - Marketing Digital</title>
</head>
<body>
    
    <?php
    include 'assets/parts/topnavbar-white.php';
    ?>

    <header class="pagina-header" style="background-image: url(img/servicos/banner-servicos.png);" id="sobreHeader">
        <div class="container">
            <div class="pagina-titulo">
                <h4>Nossos Serviços</h4>
                <hr>
                <h1>Não desperdice seu potencial</h1>
                <p>Nós temos as ferramentas e estratégias principais pra sua empresa sair na frente na era digital!</p>
            </div>
        </div>
    </header>
    
    <main>

        <section class="servicos bg-light">
            <div>
                <h2>Nós ajudamos sua empresa a alcançar seus objetivos</h2>

                <!-- Marketing Digital e de Conteudo -->
                <div class="servico-item pagina-serv flex flex-align-center space-between">
                    <div class="img-servicos" style="background-image: url(img/servicos/marketing-digital.png);"></div>
                    <div class="servicos-categoria">
                        <h3>Marketing Digital e de Conteúdo</h3>
                        <p>As palavras têm poder e nós sabemos disso! Cative seus clientes através de conteúdo relevante, convertendo leitores em clientes. Parece complicado? Nós mapeamos os melhores caminhos para você.</p>
                        <div class="servico-produtos">
                            <div class="flex flex-align-center">
                                <i class="fas fa-paper-plane fa-2x"></i>
                                <p>Produção de conteúdo (Inbound Marketing)</p>
                            </div>
                            <div class="flex flex-align-center">
                                <i class="fas fa-book fa-2x"></i>
                                <p>Artigos, Ebooks, E-mail Marketing, etc.</p>
                            </div>
                            <div class="flex flex-align-center">
                                <i class="fas fa-chart-pie fa-2x"></i>
                                <p>Estratégias de Copywriting, teste A/B e ranqueamento</p>
                            </div>
                        </div>
                        <div class="flex servicos-acessar">
                            <a href="servicos/marketing-digital-conteudo.php" class="btn btn-red">Saiba Mais</a>
                            <a href="contato.php" class="contratar-cta btn btn-red-negativo">Contrate agora</a>
                        </div>
                    </div>
                </div>

                <!-- Servicos - Website e SEO -->
                <div class="servico-item pagina-serv flex flex-align-center space-between">
                    <div class="img-servicos" style="background-image: url(img/servicos/website-seo.png);"></div>
                    <div class="servicos-categoria">
                        <h3>Web Design e SEO</h3>
                        <p>Assim como dominar uma segunda língua, ter um site moderno, otimizado e eficiente deixou de ser um diferencial e se tornou fundamental. Se você não tem OU quer aumentar o impacto do seu negócio, nós sabemos como!</p>
                        <div class="servico-produtos">
                            <div class="flex flex-align-center">
                                <i class="fas fa-desktop fa-2x"></i>
                                <p>Website</p>
                            </div>
                            <div class="flex flex-align-center">
                                <i class="fas fa-newspaper fa-2x"></i>
                                <p>Landing Pages Blog</p>
                            </div>
                            <div class="flex flex-align-center">
                                <i class="fas fa-chart-line fa-2x"></i>
                                <p>Otimização e Responsividade</p>
                            </div>
                        </div>
                        <div class="flex servicos-acessar">
                            <a href="servicos/website-seo.php" class="btn btn-red">Saiba Mais</a>
                            <a href="contato.php" class="contratar-cta btn btn-red-negativo">Contrate agora</a>
                        </div>
                    </div>
                </div>

                <!-- Redes Sociais -->
                <div class="servico-item pagina-serv servico-item flex flex-align-center space-between">
                    <div class="img-servicos" style="background-image: url(img/servicos/social-media.png);"></div>
                    <div class="servicos-categoria">
                        <h3>Redes Sociais (Marketing e Gerenciamento)</h3>
                        <p>Ganhe curtidas e seja visto através dos canais mais utilizados pelo seu público. Enquanto você foca no seu sabe fazer de melhor, nós trabalhamos para que a sua presença digital seja completa ao criar postagens, engajar reações e obter resultados únicos para o seu negócio.</p>
                        <div class="servico-produtos">
                            <div class="flex flex-align-center">
                                <i class="fas fa-thumbs-up fa-2x"></i>
                                <p>Gerenciamento e Interatividade nas mídias sociais</p>
                            </div>
                            <div class="flex flex-align-center">
                                <i class="far fa-calendar-alt fa-2x"></i>
                                <p>Análise e criação de campanhas</p>
                            </div>
                        </div>
                        <div class="flex servicos-acessar">
                            <a href="servicos/redes-sociais.php" class="btn btn-red">Saiba Mais</a>
                            <a href="contato.php" class="contratar-cta btn btn-red-negativo">Contrate agora</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="bg-red text-center">
            <h2 class="subtitle">Não tem certeza do que precisa?</h2>
            <p>Entre em contato conosco que podemos te ajudar!</p>
            <a href="contato.php" class="btn btn-white consultores-cta">Fale com nossos Consultores</a>
        </section>
        
    </main>

    <?php
    include 'assets/parts/footer.php';
    include 'assets/js/scripts.php';
    ?>
    
</body>
</html>