

<?php $__env->startSection('content'); ?>
    
<div class="row container">    
    <h5 class="text-center">Visualizar</h5> <hr>
        <div class="col-8 m-auto">
       
            Nome: <?php echo e($cliente->nome); ?><br>
            CPF: <?php echo e($cliente->pages); ?><br>
            Email: <?php echo e($cliente->email); ?> <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\laravel\sistema\resources\views/cliente/show.blade.php ENDPATH**/ ?>