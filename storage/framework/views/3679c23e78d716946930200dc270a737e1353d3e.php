

<?php $__env->startSection('content'); ?>

<?php
$module = $discipline->module;
?>

    <h4 class="text-light box2">Vizualizando dados da Disciplina</h4>
    <hr/>
    <p class="text-light box2">ID: <?php echo e($discipline->id); ?></p>
    <p class="text-light box2">Nome: <?php echo e($discipline->name); ?></p>
    <p class="text-light box2">Módulo: <?php echo e($module->name); ?></p>

    <div class="text-md-center box">
        <a class="btn btn-outline-secondary" href="<?php echo e(route('discipline.index')); ?>"><span aria-hidden="true">&larr;</span>Voltar</a>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\school-system-oficial\resources\views/discipline/show.blade.php ENDPATH**/ ?>