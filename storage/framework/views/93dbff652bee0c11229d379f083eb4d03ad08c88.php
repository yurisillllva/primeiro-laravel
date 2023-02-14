<?php $__env->startSection('title', 'Produto'); ?>
<?php $__env->startSection('content'); ?>
<?php
$valor_prod = number_format($produto->valor, 2, ',', '.');
?>
<div class="jumbotron">
  <h1 class><?php echo $produto->nome; ?></p>
    <a cl="display-4"><?php echo $produto->nome; ?>
  </h1>
  <p class="lead"><?php echo $produto->descricao; ?> - Valor R$ <?php echo $valor_prod; ?></p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="<?php echo e(route('produtos')); ?>" role="button">Ver Produtos</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yuri/Documentos/Yuri/Laravel/primeiro-projeto-laravel/resources/views/produtos/show.blade.php ENDPATH**/ ?>