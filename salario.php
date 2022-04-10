<?php

class salario{
 private $salarioFixo;
 private $valorVendas;
 private $valorComissao;

 //salario
 public function getSalarioFixo()
 {
  return $this->salarioFixo;
 }

 public function setSalarioFixo($salarioFixo)
 {
  $this->salarioFixo = $salarioFixo;

 }

 //vendas

 public function getValorVendas()
 {
  return $this->valorVendas;
 }

 public function setValorVendas($valorVendas)
 {
  $this->valorVendas = $valorVendas;
 }

 // comissão
 public function getValorComissao()
 {
  return $this->valorComissao;
 }

 public function setValorComissao($valorComissao)
 {
  $this->valorComissao = $valorComissao;

  return $this;
 }



 function valorRecebidoComComissao(){
     return $this->salarioFixo + ($this->salarioFixo * $this->valorComissao);
 }
}

?>