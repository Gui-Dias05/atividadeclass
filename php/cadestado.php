<!DOCTYPE html>
<html>
<head> 
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro do Estado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    body{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    </style>
</head> 
<body>
<?php
    include_once "../conf/default.inc.php";
    require_once "../conf/Conexao.php";
    include_once "acao.php";
    $comando = isset($_GET['comando']) ? $_GET['comando'] : "";
    $tabela = "estado";
    $dados;
    if ($comando == 'update'){
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    if ($id > 0)
        $dados = buscarDados($id, $tabela);
    }
    $estadoid = isset($_POST['EstadoID']) ? $_POST['EstadoID'] : "";
    $estadonome = isset($_POST['EstadoNome']) ? $_POST['EstadoNome'] : "";
    $estadosigla = isset($_POST['EstadoSigla']) ? $_POST['EstadoSigla'] : "";
?>
    <header>
        <?php include_once "menu.php"; ?>
    </header>
    <content>
    <form action="acao.php" method="post" id="form" >
        <h1>Cadastro Estado</h1>
        <br>
        <div class="form-group">
        <label for=""><h3 class="input text-dark">Nome do estado:</h3></label>
        <input style="background-color: #353839; color: white;"type="text" class="form-control" required type="text" name="EstadoNome" id="EstadoNome" placeholder="Digite o estado" value="<?php if ($comando == "update"){echo $dados['EstadoNome'];}?>">
        </div><br>
        <div class="form-group">
        <label for=""><h3 class="input text-dark">Sigla:</h3></label>
        <input style="background-color: #353839; color: white;" type="text" class="form-control" required type="text" name="EstadoSigla" id="EstadoSigla" placeholder="Digite a sigla" value="<?php if ($comando == "update"){echo $dados['EstadoSigla'];}?>">
        </div>
        <br>
        <input type="hidden" name="comando" id="" value="<?php if($comando == "update"){echo "update";}else{echo "insert";}?>">
        <input type="hidden" id="tabela" name="tabela" class="tabela" value="estado">
        <input type="hidden" name="id" id="" value="<?php if($comando == "update"){echo $id;}?>">
        <button type="submit" class="btn btn-dark" id="acao" value="ENVIAR">Enviar</button>
    </form>
    </content>
</body>
</html>