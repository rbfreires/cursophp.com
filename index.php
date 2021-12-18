<?php

//Soma
echo "Soma em PHP.<br><br>";
$a = 50;
$b = 25;

$resultado = $a + $b;

echo "Resultado: $resultado <hr><br>";

//Variáveis Dinâmicas
echo "Variáveis Dinâmicas<br><br>";
$bebida = "refrigerante";
$$bebida = "Pepsi";

echo "Minha bebida preferida é: $refrigerante";
echo "<br><hr><br>";

//Tipos de dados
echo "Tipos de dados<br><br>";
echo "String<br>";
$nome = "100 dias";
var_dump($nome);
echo "$nome <br><br>";
if (is_string($nome)) :
    echo "É uma string";
else :
    echo "Não é uma string";
endif;

//Int
echo "<hr><br>Int<br>";
$num = 90;
var_dump($num);
echo "$num <br><br>";
if (is_int($num)) :
    echo "É um Inteiro";
else :
    echo "Não é um Inteiro";
endif;

//Float
echo "<hr><br>Float<br>";
$altura = 1.76;
var_dump($altura);
echo "$altura <br><br>";
if (is_float($altura)) :
    echo "É um Float";
else :
    echo "Não é um Float";
endif;

//booleano
echo "<hr><br>Boleano<br>";
$Admin = true;
var_dump($Admin);
echo "$Admin <br><br>";
if (is_bool($Admin)) :
    echo "É um booleano";
else :
    echo "Não é um booleano";
endif;

//Compostos
echo "<hr><br>Compostos<br>";
$carros = array("Fox", "Renault", "EcoSport", 100, 2.5, true);
var_dump($carros);
if (is_array($carros)) :
    echo "É um Array";
else :
    echo "Não é um Array";
endif;

// //Object
// echo "<hr><br>Object<br>";
// class client
// {
//     public $nome;
//     public function atribuirNome($nome)
//     {
//         $this->$nome = $nome;
//     }
// }
// $cliente = new client();
// $cliente->atribuirNome("Theo");
// var_dump($cliente);
