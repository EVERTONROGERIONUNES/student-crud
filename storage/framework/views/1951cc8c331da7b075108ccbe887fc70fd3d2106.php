

<?php $__env->startSection('content'); ?>
    <section class="border rounded col-xl-10 box2 border-secondary">
        <h2 class="text-md-center box">Cadastro de Turma</h2>

        <div class="col-xl-6">
            <form action="<?php echo e(route('class.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label class="box2" for="name">Nome:</label>
                <input type="text" class="form-control box2" placeholder="Nome da Turma" name="name" required> <br>

                <label class="box2" for="name">Curso:</label>
                <select id="course" class="form-control box2"  name="namecourse" required>
                
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($course->id); ?>"><?php echo e($course->name); ?></option>   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select> <br>

                <div class="text-md-center box">
                    <button type="submit" class="btn btn-lg btn-success" name="comand">Salvar</button>
                    <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                    <a class="btn btn-outline-secondary" href="<?php echo e(route('class.index')); ?>"><span aria-hidden="true">&larr;</span>Voltar</a>
                </div>
            </form>
        </div>
        <?php if(count($errors) > 0): ?>
            <?php echo e(dd($errors)); ?>

        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OneDrive-Etec\OneDrive - Etec Centro Paula Souza\FATEC\SEMESTRE V\DSII\school-system\resources\views/class/create.blade.php ENDPATH**/ ?>