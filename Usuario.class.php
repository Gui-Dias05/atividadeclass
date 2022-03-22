<?php
echo"<a href='Livro.class.php'><button>Livro</button></a><br><br>\n";
echo"<a href='Cidade.class.php'><button>Cidade</button></a><br><br>\n";
echo"<a href='Estado.class.php'><button>Estado</button></a><br><br>\n";
    class Usuario{
        var $nome;
        var $login;
        var $senha;
        var $idade;

        function falar(){
            return $this->nome;

        }
        function efetuarLogin($lg, $sn){
            echo "Login: ".$lg."<br>Senha: ".$sn;

        }
        function fazAniversario(){
            return $this->idade;

        }
    }

    $usuario1 = new Usuario();
    $usuario1->nome = 'Guilherme Ariel Dias';
    $usuario1->login = 'Dias';
    $usuario1->senha = '987654321';
    $usuario1->idade = '16';
    
    $usuario2 = new Usuario();
    $usuario2->nome = 'Adriana Ignacio Storckmann';
    $usuario2->login = 'adri';
    $usuario2->senha = '123456789';
    $usuario2->idade = '40';

    echo "<br>";
    echo $usuario1->falar();
    echo "<br>";
    echo $usuario2->nome;
    echo "<br>";
    echo $usuario2->efetuarLogin('adri', '123456789');
    echo "<br>";
    echo $usuario1->fazAniversario();
    echo "<br>";
    echo $usuario2->fazAniversario();
?>