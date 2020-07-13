<?php include('partes/cabecalho.php'); ?>
        <header class="cabecalho-home">
            <h2 class="cabecalho-home__titulo">Texto grande aqui!</h2>
            <p class="cabecalho-home__subtitulo">Texto menor aqui!</p>
            <a class="cabecalho-home__role" href="#servicos">role para ver mais</a>
        </header>
        <section id="servicos" class="servicos"> <!--Seção serviços // Atributo "id" serve para nomear uma seção a fim de chamá-la quando necessário-->
            <div class="container">
                <h2 class="home__titulo">O que fazemos</h2> 
                <section class="servicos__item">
                    <img src="img/icone-desenvolvimento-web.png" alt="ícone planeta terra">
                    <h3>Desenvolvimento Web</h3>
                    <p class="servicos__texto">Desenvolvimento web é o termo utilizado para descrever o desenvolvimento de sites, na Internet ou numa intranet.</p>
                </section>
                <section class="servicos__item">
                    <img src="img/icone-E-commerce.png" alt="ícone carrinho de compras">
                    <h3>E-Commerce</h3>
                    <p class="servicos__texto">Comércio eletrônico ou comércio eletrónico, e-commerce, comércio virtual ou venda não-presencial, é um tipo de transação comercial feita especialmente através de um equipamento eletrônico, como, por exemplo, computadores, tablets e smartphones.</p>
                </section>
                <section class="servicos__item">
                    <img src="img/icone-cafe.png" alt="ícone de xícara de café">
                    <h3>Café</h3>
                    <p class="servicos__texto">O café é uma bebida produzida a partir dos grãos torrados do fruto do cafeeiro. É servido tradicionalmente quente, mas também pode ser consumido gelado.</p>
                </section> 
            </div> <!--fim container-->
        </section> <!--Fim seção serviços-->
        <section class="depoimentos"><!--Seção depoimentos-->
            <div class="container">
                <h2 class="home__titulo home__titulo--bracon">O que falam de nós</h2>
                <div class="depoimentos__caixa">
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="ícone de uma pessoa">
                        <p class="depoimentos__texto">A empresa é muito prestativa.</p>
                        <p class="depoimentos__pessoa">Nome da pessoa - Cargo</p>
                    </section>
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="ícone de uma pessoa">
                        <p class="depoimentos__texto">A empresa é muito prestativa.</p>
                        <p class="depoimentos__pessoa">Nome da pessoa - Cargo</p>
                    </section>
                    <section class="depoimentos__item">
                        <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="ícone de uma pessoa">
                        <p class="depoimentos__texto">A empresa é muito prestativa.</p>
                        <p class="depoimentos__pessoa">Nome da pessoa - Cargo</p>
                    </section>
                </div> <!--fim depoimento__caixa-->
            </div><!--fim container-->
        </section><!--Fim seção depoimentos-->
<?php include('partes/rodape.php'); ?>   