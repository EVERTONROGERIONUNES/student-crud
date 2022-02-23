<?php $__env->startSection('content'); ?>

<div id="principal">

<div id="direita">
    <br>
    <a href="<?php echo e(route('course.index')); ?>"><img class="rounded mx-auto d-block" src="<?php echo e(asset("img/books.png")); ?>"/></a>
    <h4 class="text-center text-light">Cursos</h4>
</div>

<div id="direita2">
    <br>
    <a href="<?php echo e(route('class.index')); ?>"><img class="rounded mx-auto d-block" src="<?php echo e(asset("img/turma.png")); ?>"/></a>
    <h4 class="text-center text-dark">Turmas</h4>
</div>


<div id="direita3">
    <br><br><br><br>
    <a href="<?php echo e(route('professor.index')); ?>"><img class="rounded mx-auto d-block" src="<?php echo e(asset("img/professor.png")); ?>"/></a>
    <br><br>
    <h4 class="text-center text-light">Professores</h4>
</div>

<div id="direita4">
    <br><br><br><br>
    <a href="<?php echo e(route('assign.index')); ?>"><img class="rounded mx-auto d-block" src="<?php echo e(asset("img/atribuir.png")); ?>"/></a>
    <br><br>
    <h4 class="text-center text-dark">Atribuições</h4>
</div>

<div id="direita5">
    <br>
    <a href="<?php echo e(route('module.index')); ?>"><img class="rounded mx-auto d-block" src="<?php echo e(asset("img/module.png")); ?>"/></a>
    <h4 class="text-center text-light">Módulos</h4>
</div>

<div id="direita6">
    <br>
    <a href="<?php echo e(route('discipline.index')); ?>"><img class="rounded mx-auto d-block" src="<?php echo e(asset("img/discipline.png")); ?>"/></a>
    <h4 class="text-center text-light">Disciplinas</h4>
</div>

<div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\school-system-oficial\resources\views/home.blade.php ENDPATH**/ ?>