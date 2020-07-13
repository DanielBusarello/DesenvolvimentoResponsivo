$(document).ready(function(){
    // Botão do menu
    $('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado');
    });

    // Slide depoimentos
    $('.depoimentos__caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true,
    });
    
    // Validação do Formulario de Contato
    $('.formulario').validate({
        rules: {
            nome: 'required',
            email:{
                required: true,
                email: true
            },
            mensagem: 'required'
        },
        messages: {
            nome: 'Por favor preencha o campo Nome',
            email: {
                required: 'Por favor preencha o e-mail.',
                email: 'Por favor preencha um e-mail válido'
            },
            mensagem: 'Por favor preencha o campo Mensagem'
        }
    });
});
