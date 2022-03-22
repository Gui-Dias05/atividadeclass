<?php
echo"<a href='Livro.class.php'><button>Livro</button></a><br><br>\n";
echo"<a href='Usuario.class.php'><button>Usuario</button></a><br><br>\n";
echo"<a href='Cidade.class.php'><button>Cidade</button></a><br><br>\n";

class Estado{

    public $id;
    public $nome;
    public $sigla;

    public function __construct($id, $nm, $sig){
        echo  "<br>";
        $this->id = $id;
        $this->nome = $nm;
        $this->sigla = $sig;
    }

    public function __toString(){
        $str ="ID: " .$this->id."<br>Nome: ".$this->nome."<br> Sigla: ".$this->sigla;
            return $str;
    }
}
$estado1 = new Estado("1","Santa Catarina", "SC");
echo "<br>" .$estado1."";
$estado2 = new Estado("2","São Paulo", "SP");
echo "<br>" .$estado2."";
$estado3 = new Estado("3","Rio de Janeiro", "RJ");
echo "<br>" .$estado3."";
?>