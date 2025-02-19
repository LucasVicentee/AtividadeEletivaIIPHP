<?php

class Retangulo {
    private $largura;
    private $altura; 

    public function __construct($largura, $altura)
    {
        $this -> largura = $largura;
        $this -> altura = $altura;
    }

    public function CalcularArea(){
        return  $this -> largura * $this -> altura;
    }

    public function IdentificarForma(){
        if ($this -> altura == $this -> largura){
            return "É um quadrado";
        }
        else{
            return "Não é um quadrado";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];

    $retangulo = new Retangulo($largura, $altura);

    $area = $retangulo -> CalcularArea();

    echo "<h2>Resultado:</h2>";
    echo "<p>É quadrado?: " . ($retangulo -> IdentificarForma() ? "SIM" : "NÂO") . "</p>";
    echo "<p>A área do retângulo é: " . number_format($area, 2) . " m², " . $retangulo -> IdentificarForma($altura, $largura) . "</p>";
}
?>