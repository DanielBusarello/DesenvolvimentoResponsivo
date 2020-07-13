<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php 
        $titulo = "Design Responsivo";
        global $tituloPagina;
        if($tituloPagina != ''){
            $titulo .= ' | ' . $tituloPagina;
        }
    ?>
    <title><?php echo $titulo ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
    <header class="cabecalho">
        <div class="container">
            <?php if($tituloPagina == ''): ?>
                <h1 class="logo">Design Responsivo</h1>
            <?php else: ?>
                <a href="index.php" class="logo">Design Responsivo</a>
            <?php endif; ?>
            <nav class="menu-principal menu-principal--fechado">
                <button class="menu-principal__btn">Abrir/fechar menu</button> <!--menu-principal__btn--fechar-->
                <ul class="menu-principal__lista"> <!--lista é um elemenento da classe "menu-principal"-->
                    <li><a class="menu-principal__item <?php echo $tituloPagina == '' ? 'menu-principal__item--atual' : '' ?>" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Sobre nós' ? 'menu-principal__item--atual' : '' ?>" href="sobre.php">Sobre nós</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Portfólio' ? 'menu-principal__item--atual' : '' ?>" href="portfolio.php">Portfólio</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Contato' ? 'menu-principal__item--atual' : '' ?>" href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div><!--fim container-->
    </header>
    <main>