

<?php $__env->startSection('content'); ?>

<section class="border rounded col-xl-10 box2">
    <h2 class="text-md-center box text-light">Editar Professor</h2>
    <div class="col-xl-6">
        <form action="<?php echo e(route('professor.update', $professor->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <label class="box2 text-light" for="name">Nome: </label>
            <input value="<?php echo e($professor->name); ?>" placeholder="" class="form-control box2" type="text" name="name" required> <br>
            <input value="<?php echo e($professor->telephone); ?>" id="telephone" placeholder="" class="form-control box2" type="text" name="telephone" required onblur="mascaraCelular( this, mtel );"> <br>
            <input value="<?php echo e($professor->email); ?>" placeholder="" class="form-control box2" type="text" name="email" required> <br>
            <div class="text-md-center box">

                <button type="submit" class="btn btn-lg btn-success" name="comand">Salvar</button>
                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                <a class="btn btn-outline-secondary" href="<?php echo e(route('professor.index')); ?>"><span aria-hidden="true">&larr;</span>Voltar</a>

            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\school-system-oficial\resources\views/professor/edit.blade.php ENDPATH**/ ?>