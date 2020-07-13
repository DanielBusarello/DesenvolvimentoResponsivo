<?php 
    global $tituloPagina;
    $tituloPagina = "Portfólio";
    include('partes/cabecalho.php'); 
?>
        <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Portfólio</h1>
        </header>
        <section class="pagina-conteudo">
            <p class="text-center">
                Um bom portfólio traz diversas vantagens para o seu dono.<br>
                Ele é literalmente uma vantagem competitiva que faz a diferença entre conseguir um bom trabalho ou não.
            </p>
            <nav>
                <ul class="lista-trabalhos">
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/aircraft-2806035_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/aircraft-2806035_min.jpg" alt="Avião">
                            <h2 class="lista-trabalhos__titulos">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/gear-2291916_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/gear-2291916_min.jpg" alt="Engrenagem">
                            <h2 class="lista-trabalhos__titulos">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/hong-kong-1990268_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/hong-kong-1990268_min.jpg" alt="Hong Kong">
                            <h2 class="lista-trabalhos__titulos">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/landscape-2268775_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/landscape-2268775_min.jpg" alt="Paisagem de um vale">
                            <h2 class="lista-trabalhos__titulos">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/saddle-2614038_1280.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/saddle-2614038_min.jpg" alt="Banco de uma bicicleta antiga">
                            <h2 class="lista-trabalhos__titulos">Nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/portfolio/town-2430571_1920.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/miniaturas/town-2430571_min.jpg" alt="Cidade">
                            <h2 class="lista-trabalhos__titulos">Nome do trabalho</h2>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
<?php include('partes/rodape.php'); ?> 