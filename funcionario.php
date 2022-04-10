<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/funcionario.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
</head>
<body>
    <header class="topo">
      <div><h1>Funcionario</h1></div>
    </header>

    <section class="conteudo">
        <div class="salario">
            <h1>Folha Salarial</h1>
            <?php 
            include './model/salario.php';

            $salario = new salario;

            $salario->setSalarioFixo(2200);
            $salario->setValorVendas(1975);
            $salario->setValorComissao(0.03);

            echo '<br><h2>Salario do funcionario: '.$salario->getSalarioFixo()
            .'<br><br>Quanto vendeu: ' .$salario->getValorVendas()
            .'<br><br>Ganha 3% de comissão'
            .'<br><br>Recebe no total: ' .$salario->valorRecebidoComComissao().'</h2>'
            ?>
        </div>

    </section>
    
</body>
</html>