<?php

class valorFilme{
 private $valorDoIngresso;
 private $quantidade;
 private $desconto;      



 //valor do ingresso
 public function getValorDoIngresso()
 {
  return $this->valorDoIngresso;
 }

 public function setValorDoIngresso($valorDoIngresso)
 {
  $this->valorDoIngresso = $valorDoIngresso;

  return $this;
 }

 //quantidade
 public function getQuantidade()
 {
  return $this->quantidade;
 }

 public function setQuantidade($quantidade)
 {
  $this->quantidade = $quantidade;

  return $this;
 }


 //desconto
 public function getDesconto()
 {
  return $this->desconto;
 }

 public function setDesconto($desconto)
 {
  $this->desconto = $desconto;

  return $this;
 }

 function valorDeDoisIngressos(){
     return $this->valorDoIngresso * $this->quantidade;
 }

 function valorTotal(){
     return $this->valorDeDoisIngressos() - ($this->desconto * $this->valorDeDoisIngressos());
 }
}



?>