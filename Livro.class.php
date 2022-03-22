<?php
echo"<a href='Usuario.class.php'><button>Usuário</button></a> <br><br>\n";
echo"<a href='Cidade.class.php'><button>Cidade</button></a> <br><br>\n";
echo"<a href='Estado.class.php'><button>Estado</button></a><br><br>\n";

    class Livro{
        public $autor;
        public $anoPublicacao;
        public $titulo;
        /*var $autor;
        var $anoPublicacao;
        var $titulo;*/


        public function __construct($tt,$au,$an){
            echo  "Criando objeto....\n <br>";
            $this->titulo = $tt;
            $this->autor = $au;
            $this->anoPublicacao = $an;
        }

        public function __toString(){
            $str ="Autor: " .$this->autor."<br>Título: ".$this->titulo."<br>Ano publicação: ".$this->anoPublicacao;
            	return $str;
        }
        /*function abrirPagina($nr){
            echo "Página: ".$nr." aberto!";
        }
        function mostrarTitulo(){
            return $this->titulo;
        }*/
    }

    $livro1 = new Livro("Meu Livro", "Guilherme Ariel Dias", 2022);
    echo $livro1;
    

    /*$livro1 = new Livro();
    $livro1->titulo = "Batman";
    livro1->autor = "Frank Miller";
    $livro1->anoPublicacao = "1988";
    $livro2 = new Livro();
    $livro2->titulo = "20 Mil Léguas Submarinas";
    $livro2->autor = "Júlio Verne";
    $livro2->anoPublicacao = "1800";

    echo $livro1->mostrarTitulo();
    echo "<br>";
    echo $livro1->abrirPagina(10);
    echo "<br><br>";
    echo $livro2->mostrarTitulo();
    echo "<br>";
    echo $livro2->abrirPagina(30);
    echo $livro1->abrirPagina(10);
    echo "<br>";*/
?>