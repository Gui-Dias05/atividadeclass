<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Estado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php include_once "menu.php"; ?>
    </header>
    <div>
    <?php 
        include_once "../conf/default.inc.php";
        require_once "../conf/Conexao.php";
        $nmr = 0;

        class Estado {
            public $id;
            public $nome;
            public $sigla;

            public function __construct($id, $nome, $sigla) {
                $this->id = $id;
                $this->nome = $nome;
                $this->sigla = $sigla;
            }

            public function __toString() {
                $str = "<br>\n ID: ".$this->id."<br>\n Nome: ".$this->nome."<br>\n Sigla: ".$this->sigla;
                return $str;
            }

            public function inserir(){
                $pdo = Conexao::getInstance();
                $stmt = $pdo->prepare('INSERT INTO Estado (EstadoNome, EstadoSigla) VALUES(:EstadoNome, :EstadoSigla)');
                $stmt->bindParam(':EstadoNome', $this->nome, PDO::PARAM_STR);
                $stmt->bindParam(':EstadoSigla', $this->sigla, PDO::PARAM_STR);
                return $stmt->execute();
            }

            public function atualizar() {
                $pdo = Conexao::getInstance();
                $id = $this->id;
                $estadonome = $this->nome;
                $sigla = $this->sigla;
                $stmt = $pdo->query("UPDATE `ativteste`.`Estado` SET `EstadoNome` = '$estadonome', `EstadoSigla` = '$sigla' WHERE (`EstadoID` = '$id');");
                $stmt->execute();
            }

            public function deletar() {
                $pdo = Conexao::getInstance();
                $stmt = $pdo->prepare("DELETE FROM `ativteste`.`Estado` WHERE EstadoID = :EstadoID");
                $stmt->bindParam(':EstadoID', $this->id, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->execute(); 
            }
        }
    ?>
    </div>
</body>
</html>