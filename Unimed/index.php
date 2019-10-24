<?php
session_start();

  if(isset($_POST['cadastrar'])) {
    require_once('conecta.php');
    require_once('DAOproposta.php');

    $cadastrar = new PropostaDAO();

    $nome = trim(strip_tags($_POST['nome']));
    $idade = trim(strip_tags($_POST['idade']));
    $categoria_plano = trim(strip_tags($_POST['tipo']));
    $total = trim(strip_tags($_POST['valor']));

    $insere = $cadastrar->cadastra($nome, $idade, $categoria_plano, $total);
  }
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Unimed</title>
</head>

<body>
    <div class="header">
        <img class="unim" src="unimed.png" alt="LOGO UNIMED">
    </div>

    <div class="box1" id="bx">
        <center>
            <div class="caixa">
                    <p>Insira seu dados:</p>
                    <form>
                            <input type="text" placeholder="Nome" id="nome">
                            <input type="text" placeholder="Idade" id="idade">
                            <select class="selecionar" id="tipo"><option>Enfermaria</option><option>Apartamento</option></select>
                    </form>
                    <button class="log" onclick="sumir(); conta()">Calcular Valor Base</button>
            </div>
        </center>
    </div>
    <div class="box3" id="bx2">
            <center>
                <div class="caixa">
                        <p>Selecione o número de dependentes:</p>
                        <form>
                                <select class="selecionar" id="b" onclick="mostraIn()"><option>0</option><option><div>1</div></option><option>2</option><option>3</option></select>
                                <input type="text" placeholder="Insira a idade 1" id="n1">
                                <input type="text" placeholder="Insira a idade 2" id="n2">
                                <input type="text" placeholder="Insira a idade 3" id="n3">
                            </form>
                        <button class="log" onclick="dependente(); sumir2()">Visualizar Mensalidade</button>
                </div>
            </center>
        </div>

        <div class="box4" id="bx3">
                <center>
                        <div class="caixa">
                                <p>Orçamento:</p>
                                <form action="#" method="POST">
                                        <input type="text" name="nome" placeholder="Nome" id="nome2" readonly>
                                        <input type="text" placeholder="ident" id="ident2" readonly>
                                        <input type="text" name="valor" placeholder="Valor" id="valor2" readonly>
                                        <input type="text" name="idade" placeholder="Idade" id="idade3" readonly>
                                        <input type="text" name="tipo" placeholder="Entidade" id="tipo2" readonly>
                                        <button class="log" type="submit" name="cadastrar">Confirmar</button><button type="" class="log2">Cancelar</button>
                                </form>
                                
                        </div>
                    </center>
            </div>
</body>

</html>