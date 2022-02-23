

<?php $__env->startSection('content'); ?>
    <h4>Vizualizando dados do Curso</h4>
    <hr/>
    <p>ID: <?php echo e($course->id); ?></p>
    <p>Nome: <?php echo e($course->name); ?></p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OneDrive-Etec\OneDrive - Etec Centro Paula Souza\FATEC\SEMESTRE V\DSII\school-system\resources\views/course/show.blade.php ENDPATH**/ ?>