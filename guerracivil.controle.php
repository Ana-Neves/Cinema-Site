<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/filmes.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guerra Civil</title>
</head>
<body>
    <header class="topo">
      <div><h1>Você Escolheu: Guerra Civil</h1></div>
    </header>

    <section class="conteudo">
        <div class="ingresso">
            <h1>Detalhes da Compra</h1>
            <?php 
            include '../model/valor.model.php';

            $valor = new valorFilme;

            $valor->setValorDoIngresso(35);
            $valor->setQuantidade(2);
            $valor->setDesconto(0.10);

            echo '<br><h2>Valor do ingresso:'.$valor->getValorDoIngresso()
            .'<br><br>Quantidades Pedidas:' .$valor->getQuantidade()
            .'<br><br>A porcentagem do desconto é de: 10%'
            .'<br><br>Valor de dois ingressos:' .$valor->valorDeDoisIngressos()
            .'<br><br>Valor Total:' .$valor->valorTotal().'</h2>'
            
            ?>
             <form>
            <input type="radio" name="opcao" id="">Pix
            <input type="radio" name="opcao" id="">Cartão
            <input type="radio" name="opcao" id="">Dinheiro
            </form>
        </div>
    </section>

    
</body>
</html>