<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
    include('partes/cabecalho.php'); 

    //Verificar se o usuário postou as informações no formulário.
    $nome = '';
    $email = '';
    $mensagem = '';
    $erroFormulario = '';
    $sucessoFormulario = '';
    if( isset($_POST['submit']) ){ //isset serve para ver se um valor foi setado;
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        if(
            $nome != '' 
            && $email != '' 
            && $mensagem != '')
        {
            //usuario preencheu corretamente
            $mensagemEmail = 'Nome: ' . $nome . ' - ';
            $mensagemEmail .= 'Email: ' . $email . ' - ';
            $mensagemEmail .= 'Mensagem: ' . $mensagem;
            if(mail('contato@site.com.br', 'Mensagem', $mensagemEmail)){
                //email enviado
                $sucessoFormulario = "Mensagem enviada com sucesso";
            }
            else{
                $erroFormulario = "Falha ao enviar a mensagem, tente mais tarde ou através do e-mail: xxx@gmail.com";
            }
        }
        else{
            //usuario nao preencheu todos os campos
            $erroFormulario = "Por favor verifique o preenchimento dos campos";
        }
    }
?>
    <header class="pagina-cabecalho">
        <h1 class="pagina-cabecalho__titulo">Contato</h1>
    </header>
    <section class="container pagina-conteudo">
        <p class="text-center">Dúvidas sobre nossos serviços? Envie uma mensagem para que possamos ajudá-lo.</p>
        <form action="contato.php" class="formulario" method="post">
            <?php if($erroFormulario != '') : ?>
                <div class="formulario__erro">
                    <?php echo $erroFormulario ?>
                </div>
            <?php endif; ?>
            <?php if($sucessoFormulario != '') : ?>
                <div class="formulario__sucesso">
                    <?php echo $sucessoFormulario ?>
                </div>
            <?php endif; ?>
            <div class="formulario__grupo formulario__grupo--coluna-esq">
                <label class="formulario__label" for="nomeusuario">Nome</label><br>
                <input class="formulario__campo" type="text" name="nome" id="nomeusuario">
            </div>
            <div class="formulario__grupo formulario__grupo--coluna-dir">
                <label class="formulario__label" for="emaildecontato">E-mail</label><br>
                <input class="formulario__campo" type="email" name="email" id="emaildecontato">
            </div>
            <div class="formulario__grupo">
                <label class="formulario__label" for="mensagem">Mensagem</label><br>
                <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" class="formulario__botao" value="Enviar" name="submit">
        </form>
        <p class="text-center"> 
            A empresa está a 10 anos em Dubai.<br>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. A delectus voluptatibus reprehenderit labore, perferendis quo accusantium alias numquam sint animi fuga quasi laudantium similique debitis excepturi incidunt sapiente dolores dolore.
        </p>
    </section>
    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.1786539292652!2d55.27218234936765!3d25.197196983817154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1spt-BR!2sbr!4v1569881640817!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> <!--tag iframe -> Abrir um site dentro do outro-->
    </div>
<?php include('partes/rodape.php'); ?> 