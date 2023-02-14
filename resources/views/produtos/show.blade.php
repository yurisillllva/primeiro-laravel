@extends('layouts.template')
@section('title', 'Produto')
@section('content')
<?php
$valor_prod = number_format($produto->valor, 2, ',', '.');
?>
<div class="jumbotron">
  <h1 class><?php echo $produto->nome; ?></p>
    <a cl="display-4"><?php echo $produto->nome; ?>
  </h1>
  <p class="lead"><?php echo $produto->descricao; ?> - Valor R$ <?php echo $valor_prod; ?></p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="{{route('produtos')}}" role="button">Ver Produtos</a>
</div>
@endsection
