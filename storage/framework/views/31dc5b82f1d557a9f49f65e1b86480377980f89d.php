

<?php $__env->startSection('content'); ?>

<!--Formulário de cadastro-->
<div class="row container">
                <p>&nbsp;</p>
    <form action="<?php echo e(url('sistema/cliente')); ?>" method="post" class="col s10">
         <fieldset class="formulario" style="padding: 15px">
            <legend><img src="<?php echo e(url('imagens/avatar_padrao.png')); ?>" alt="[imagem]" width="100"></legend>
            <h5 class="light center">Cadastro de Clientes</h5>
             <!--CAMPO NOME-->
            <div class="input-field col s12">
                 <i class="material-icons prefix">account_circle</i>
                 <input type="text" name="nome" id="nome" maxlength="40" require autofocus>
                 <label for="nome">Nome do Cliente</label>
            </div>

            <!--CAMPO EMAIL-->
            <div class="input-field col s12">
                 <i class="material-icons prefix">email</i>
                 <input class="validate" type="email" name="email" id="email" maxlength="50" required>
                 <label for="email">Email do Cliente</label>
            </div>

             <!--CAMPO NOME-->
             <div class="input-field col s12">
                 <i class="material-icons prefix">account_circle</i>
                 <input type="text" name="cpf" class='cpf' id="cpf" maxlength="15" require autofocus>
                 <label for="documento">CPF/CNPJ</label>
            </div>
             
            <!--CAMPO TELEFONE-->
            <div class="input-field col s12">
                 <i class="material-icons prefix">phone</i>
                 <input type="tel" class="phone_with_ddd" name="telefone" id="telefone" maxlength="15" required>
                 <label for="telefone">Telefone do Cliente</label>
            </div>

            <!--BOTÕES-->
            <div class="input-field col s12">
                 <input type="submit" value="salvar" class="btn blue">
                 <input type="reset" value="limpar" class="btn red">
            </div>



        </fieldset>
    </form>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\laravel\sistema\resources\views/cliente/create.blade.php ENDPATH**/ ?>