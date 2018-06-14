<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    include 'gtag.php';
    include 'assets/css/styles.php';
    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.6.0/tiny-slider.css">
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.6.0/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.6.0/min/tiny-slider.js"></script>

    <title>Página à deriva | YouSea - Marketing Digital</title>
</head>
<body>

    <?php
    include 'assets/parts/topnavbar.php';
    ?>

    <header class="header404" id="homeHeader">
        <div class="_960px">
            <h1>Oh não, parece que o link que você seguiu está à deriva!</h1>
        </div>
    </header>

    <main>

        <section class="valores">
            <div class="container">
                <h2>Não se preocupe! Você pode voltar a página inicial ou navegar pelos nossos serviços:</h2>
                <div class="flex space-between">
                    <div class="valor-item">
                        <a href="servicos/marketing-digital-conteudo.php?origem=404"><img src="img/servicos/marketing/marketing-sobre.png" class="img-responsive" alt="ilustração de um computador onde na tela se pode observar gráficos em barra"></a>
                        <a href="servicos/marketing-digital-conteudo.php?origem=404"><h3>Marketing Digital e de Conteúdo</h3>
                        <p>Cative seus clientes através de conteúdo relevante, diferenciando sua marca no mercado</p></a>
                    </div>
                    <div class="valor-item">
                        <a href="servicos/website-seo.php?origem=404"><img src="img/servicos/webdesign/webdesign-seo.png?origem=404" class="img-responsive" alt="Ilustração de uma página do Google Analytics e outras representações de sistemas de otimização de websites"></a>
                        <a href="servicos/website-seo.php?origem=404"><h3>Web Design e SEO</h3>
                        <p>Tenha um site moderno, otimizado e eficiente para mostrar ao mundo o melhor do seu negócio. </p></a>
                    </div>
                    <div class="valor-item">
                        <a href="servicos/redes-sociais.php?origem=404"><img src="img/servicos/redes-sociais/redes-sociais.png" class="img-responsive" alt="Ilustração de uma tela de computador e uma tela de tablet, de onde surgem diversos balões com ícones de redes sociais conhecidas"></a>
                        <a href="servicos/redes-sociais.php?origem=404"><h3>Redes Sociais</h3>
                        <p>Ganhe curtidas e seja visto através dos canais mais utilizados pelo seu público. </p></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 404 - Contato -->
        <section class="contato bg-red">
            <div class="container flex">
                <div class="contato-form _600px">
                    <h2 class="subtitle">Tem alguma dúvida?</h2>
                    <h3>Entre em contato com a gente!</h3>

                    <div class="form-control form-inline-two">
                        <div>
                            <label for="nome">Nome *</label>
                            <input type="text" placeholder="Seu Nome" required>
                        </div>
                        <div>
                            <label for="nome">Email *</label>
                            <input type="text" placeholder="Seu Email" required>
                        </div>
                    </div>

                    <div class="form-control form-inline-two">
                        <div>
                            <label for="nome">Empresa *</label>
                            <input type="text" placeholder="Seu Empresa" required>
                        </div>
                        <div>
                            <label for="nome">Cargo *</label>
                            <input type="text" placeholder="Seu Cargo" required>
                        </div>
                    </div>

                    <div class="form-control">
                        <div>
                            <label for="nome">Solicitação *</label>
                            <input type="text" placeholder="Seu Solicitação" required>
                        </div>
                    </div>

                    <div class="form-control">
                        <div>
                            <label for="nome">Sua Mensagem *</label>
                            <textarea type="text" placeholder="Seu Empresa" rows="5" required></textarea>
                        </div>
                    </div>

                    <input type="submit" value="Entre em Contato" class="btn btn-red">

                </div>

            </div>
        </section>

    </main>

    <?php
    include 'assets/parts/footer.php';
    include 'assets/js/scripts.php';
    ?>

</body>
</html>
