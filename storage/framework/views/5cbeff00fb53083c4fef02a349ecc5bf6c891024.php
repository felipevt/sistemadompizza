

<?php $__env->startSection('content'); ?>
    
    
<div class="row container">
    <div class="col s12">
        <h5 class="light">Clientes</h5><hr>
        <br><br>
        <a href="<?php echo e(url('sistema/cliente/create')); ?>" class="btn-floating btn-large waves-effect waves-light red mb-"><i class="material-icons">add</i></a><br><br><br>
        
        <table class="highlight">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $cliente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clientes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($clientes->nome); ?></td>
                    <td ><?php echo e($clientes->documento); ?></td>
                    <td><?php echo e($clientes->email); ?></td>
                    <td class="phone_with_ddd"><?php echo e($clientes->telefone); ?></td>
                    <td>
                        <a href="">
                            <button data-target='modal1' class='btn modal-trigger'><i class='material-icons'>edit</i></button>
                        </a>

                        <a href="">
                            <button data-target='modal1' class='btn modal-trigger red'><i class='material-icons'>delete</i></button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody> 
            </tbody>

       

        </table>

    
    </div>
</div>

    
            
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\laravel\sistema\resources\views/cliente/home.blade.php ENDPATH**/ ?>