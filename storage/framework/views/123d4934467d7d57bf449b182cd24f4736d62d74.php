

<?php $__env->startSection('content'); ?>
    <h4 class="text-light box2">Vizualizando dados do Curso</h4>
    <hr/>
    <p class="text-light box2">ID: <?php echo e($course->id); ?></p>
    <p class="text-light box2">Nome: <?php echo e($course->name); ?></p>

    <div class="text-md-center box">
        <a class="btn btn-outline-secondary" href="<?php echo e(route('course.index')); ?>"><span aria-hidden="true">&larr;</span>Voltar</a>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\school-system-oficial\resources\views/course/show.blade.php ENDPATH**/ ?>