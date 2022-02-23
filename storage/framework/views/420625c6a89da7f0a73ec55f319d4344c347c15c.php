

<?php $__env->startSection('content'); ?>
    <section class="border rounded col-xl-10 box2">
        <h2 class="text-md-center box text-light">Cadastro de Professor</h2>

        <div class="col-xl-6 col-md-8">
            <form action="<?php echo e(route('professor.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label class="box2 text-light" for="name">Nome:</label>
                <input type="text" class="form-control box2" placeholder="Nome do Professor" name="name" required> <br>

                <label class="box2 text-light" for="name">Telefone:</label>
                <input id="telephone" type="text" class="form-control box2" name="telephone" required placeholder="(XX) XXXXX-XXXX"
                onblur="mascaraCelular( this, mtel );" /><br>
            <div id="msgcelular"></div>
place
                <label class="box2 text-light" for="name">Email:</label>
                <input type="text" class="form-control box2" placeholder="E-mail do Professor" name="email" required> <br>


                <div class="text-md-center box">
                    <button type="submit" class="btn btn-lg btn-success" name="comand">Salvar</button>
                    <button type="reset" class="btn btn-outline-secondary">Limpar</button>
                    <a class="btn btn-outline-secondary" href="<?php echo e(route('professor.index')); ?>"><span aria-hidden="true">&larr;</span>Voltar</a>
                </div>
            </form>
        </div>
        <?php if(count($errors) > 0): ?>
            <?php echo e(dd($errors)); ?>

        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\school-system-oficial\resources\views/professor/create.blade.php ENDPATH**/ ?>