

<?php $__env->startSection('content'); ?>


<section class="border rounded col-xl-10 box2">

<h2 class="text-md-center box text-light">Atribuição</h2>

<div class="container col-xl-10 box">
   
    <div class="table-responsive">
    <table class="table table-striped table-dark" id="myTable">
        <tr>
            <th class="text-md-center">ID</th>
            <th class="text-md-center">Professor</th>
            <th class="text-md-center">Disciplina</th>
            <th class="text-md-center" colspan="3">Comandos</th>
        </tr>
        <?php if(isset($assigns)): ?>
            <?php $__currentLoopData = $assigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
    
            $professor = $assign->professors;
            $discipline = $assign->disciplinesA;

            ?>
                <tr>
                    <td class="text-md-center"><?php echo e($assign->id); ?></td>
                    <td class="text-md-center"><?php echo e($professor->name); ?></td>
                    <td class="text-md-center"><?php echo e($discipline->name); ?></td>
                    <td class="text-md-center"><a href="<?php echo e(route('assign.show', $assign->id)); ?>"><button class="btn btn-primary">Visualizar</button></a></td>
                    <td class="text-md-center"><a href="<?php echo e(route('assign.edit', $assign->id)); ?>"><button class="btn btn-warning">Editar</button></a></td>
                    <td class="text-md-center">
                        <form method="POST" action="<?php echo e(route('assign.destroy', $assign->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Deseja Realmente Excluir?');">Excluir</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="6">NÃO EXISTEM DADOS PARA SEREM EXIBIDOS!</td>
            </tr>
        <?php endif; ?>

    </table>
    </div>
    <div class="text-md-center box">
    <a href="<?php echo e(route('assign.create')); ?>"><button class="btn btn-lg btn-success">Novo</button></a>
    <a class="btn btn-outline-secondary" href="<?php echo e(route('login')); ?>"><span aria-hidden="true">&larr;</span>Voltar</a>
    </div>

</div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\school-system-oficial\resources\views/assign/index.blade.php ENDPATH**/ ?>