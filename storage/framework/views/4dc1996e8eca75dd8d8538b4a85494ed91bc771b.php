

<?php $__env->startSection('content'); ?>

<section class="border rounded col-xl-10 box2">
    <h2 class="text-md-center box text-light">Editar Módulo</h2>
    <div class="col-xl-6">
        <form action="<?php echo e(route('module.update', $module->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <label class="box2 text-light" for="name">Nome: </label>
            <input name="name" value="<?php echo e($module->name); ?>" placeholder="" class="form-control box2" type="text"  required> <br>
            
            <label class="box2 text-light" for="name">Turma:</label>
                <select id="class" class="form-control box2"  name="nameclass" required>
                <option value="<?php echo e($module->classmodel->id ?? ''); ?>"><?php echo e($module->classmodel->name ?? ''); ?></option> 
                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($class->id); ?>"><?php echo e($class->name); ?></option>   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select> <br>
                
            <div class="text-md-center box">

                <button type="submit" class="btn btn-lg btn-success" name="comand">Salvar</button>
                <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                <a class="btn btn-outline-secondary" href="<?php echo e(route('module.index')); ?>"><span aria-hidden="true">&larr;</span>Voltar</a>

            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\school-system-oficial\resources\views/module/edit.blade.php ENDPATH**/ ?>