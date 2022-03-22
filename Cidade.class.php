<?php
echo"<a href='Livro.class.php'><button>Livro</button></a><br><br>\n";
echo"<a href='Usuario.class.php'><button>Usuario</button></a><br><br>\n";
echo"<a href='Estado.class.php'><button>Estado</button></a><br><br>\n";

class cidade{

    private $id;
    private $nome;
    private $estadoid;

    public function __construct($id, $nm, $eid){
        echo  "<br>";
        $this->id = $id;
        $this->nome = $nm;
        $this->estadoid = $eid;
    }

    public function __toString(){
        $str ="ID: " .$this->id."<br>Nome: ".$this->nome."<br> ID Estado: ".$this->estadoid;
            return $str;
    }
}
$cidade1 = new Cidade("1","Rio do Sul", "1");
echo "<br>" .$cidade1."";
$cidade2 = new Cidade("2","Ituporanga", "1");
echo "<br>" .$cidade2."";
$cidade3 = new Cidade("3","Guarujá", "2");
echo "<br>" .$cidade3."";
$cidade4 = new Cidade("4","Arraial do Cabo", "3");
echo "<br>" .$cidade4."";

?>