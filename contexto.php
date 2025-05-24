<?php

$carteira = 7;

$quantidade = 10;

$produto = 'biscoito';

switch($produto){
  case 'pao':
    $preco_unitario = 0.6;
    break;
  case 'biscoito':
    $preco_unitario = 2.2;
    break;
  default:
    $preco_unitario = 0;
}

// if($produto == 'pao'){
//   $preco_unitario = 0.6;
// } else if($produto == 'biscoito') {
//   $preco_unitario = 2.2;
// } else {
//   $preco_unitario = 0;
// }


$total = $preco_unitario * $quantidade;


if($total <= $carteira){
  echo "Comprei $quantidade itens, por R$ " . number_format($total, 2, ',', '.');
} else {
  $diferenca = $total - $carteira;
  echo "Não deu pra comprar, falataram R$ " . number_format($diferenca, 2, ',', '.');
}


// echo $total <= $carteira ?
// "Comprei $quantidade itens, por R$ " . number_format($total, 2, ',', '.') :
// "Não deu pra comprar, falataram R$ " . number_format($diferenca, 2, ',', '.');
