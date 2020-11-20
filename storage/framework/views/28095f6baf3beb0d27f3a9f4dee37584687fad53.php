<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dom Pizzas</title>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
     <!--CSS do bootstrep.css-->
     <!--<link rel="stylesheet" href="materialize/css/bootstrap.min.css">-->
     
     <!--CSS do materialize.css-->
     <link rel="stylesheet" href="<?php echo e(url('assets/materialize/css/materialize.min.css')); ?>">

     <script type="text/javascript" src="/assets/materialize/js/jquery-3.5.1.min.js"></script> 
    
    <script type="text/javascript" src="/assets/materialize/js/materialize.min.js"></script>

    <script type="text/javascript" src="/assets/materialize/js/jquery.mask.js"></script>
    
</head>
<body>
    <nav class="blue-grey">
        <div class="nav-wrapper container">
            <div class="brand-logo light"><a href="/pedidos">Rede Dom Pizza</a></div>

            <ul class="right">
                <li><a href="#"><i class="material-icons left">add_shopping_cart</i>Pedidos</a></li>
                <li><a href="<?php echo e(url('sistema/cliente')); ?>"><i class="material-icons left">account_circle</i>Clientes</a></li>
                <!--<li><a href="cliente.php"><i class="material-icons left">search</i>Cliente</a></li> -->
                <li><a href="#"><i class="material-icons left">local_mall</i>Produtos</a></li>
                <li><a href="#"><i class="material-icons left">exit_to_app</i></a></li>    



            </ul>


        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

   


        
        <!--Inicialização Jquery-->
    <script> type="text/javascript">
         $(document).ready(function(){
            $('.modal').modal();
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('.cep').mask('00000-000');
            $('.phone').mask('0000-0000');
            $('.phone_with_ddd').mask('(00) 00000-0000');
            $('.phone_us').mask('(000) 000-0000');
            $('.mixed').mask('AAA 000-S0S');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.money2').mask("#.##0,00", {reverse: true});
            $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
              translation: {
                'Z': {
                  pattern: /[0-9]/, optional: true
                }
              }
            });
            $('.ip_address').mask('099.099.099.099');
            $('.percent').mask('##0,00%', {reverse: true});
            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
            $('.fallback').mask("00r00r0000", {
                translation: {
                  'r': {
                    pattern: /[\/]/,
                    fallback: '/'
                  },
                  placeholder: "__/__/____"
                }
              });
            $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
           
        
        });
    
    </script>
</body>
</html><?php /**PATH C:\MAMP\laravel\sistema\resources\views/templates/template.blade.php ENDPATH**/ ?>