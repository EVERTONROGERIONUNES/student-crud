

<?php $__env->startSection('content'); ?>

<section class="border rounded col-xl-10 box2 border-secondary">

<h2 class="text-md-center box">Curso</h2>

<div class="container col-xl-10 box">

    <table class="table table-striped table-dark">
        <tr>
            <th class="text-md-center">ID</th>
            <th class="text-md-center">Nome</th>
            <th class="text-md-center" colspan="3">Comandos</th>
        </tr>
        <?php if(isset($courses)): ?>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-md-center"><?php echo e($course->id); ?></td>
                    <td class="text-md-center"><?php echo e($course->name); ?></td>
                    <td class="text-md-center"><a href="<?php echo e(route('course.show', $course->id)); ?>"><button class="btn btn-primary">Mostrar</button></a></td>
                    <td class="text-md-center"><a href="<?php echo e(route('course.edit', $course->id)); ?>"><button class="btn btn-warning">Editar</button></a></td>
                    <td class="text-md-center">
                        <form method="POST" action="<?php echo e(route('course.destroy', $course->id)); ?>">
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

    <div class="text-md-center box">
    <a href="<?php echo e(route('course.create')); ?>"><button class="btn btn-lg btn-success">Novo</button></a>
    <a class="btn btn-outline-secondary" href=""><span aria-hidden="true">&larr;</span>Voltar</a>
    </div>

</div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OneDrive-Etec\OneDrive - Etec Centro Paula Souza\FATEC\SEMESTRE V\DSII\scholl-system\resources\views/course/index.blade.php ENDPATH**/ ?>