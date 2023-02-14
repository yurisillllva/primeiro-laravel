<?php $__env->startSection('title', 'Editar Produto'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mt-4">
  <form method="POST" action="<?php echo e(route('produtos.editar', $produto)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>;
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" class="form-control" id="" name="nome" value="<?php echo e($produto->nome); ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Valor</label>
          <input type="text" class="form-control" id="" name="valor" value="<?php echo e($produto->valor); ?>">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Estoque</label>
          <input type="text" class="form-control" id="" name="estoque" value="<?php echo e($produto->estoque); ?>">
        </div>
      </div>
    </div>




    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descrição</label>
      <textarea class="form-control" id="" name="descricao" rows="3"><?php echo e($produto->descricao); ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yuri/Documentos/Yuri/Laravel/primeiro-projeto-laravel/resources/views/produtos/edit.blade.php ENDPATH**/ ?>