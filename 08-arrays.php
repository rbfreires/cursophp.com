<?php

//Arrays
$carros = array(1 => "BMW", 2 => "MERCEDES", 3 => "FERRARI", 4 => "MUSTANG", 5 => "LAMBURGUINI", 6 => "JAGUAR", 7 => "PORCHE");
$carros[] = "CAMARO";
$carros[10] = "CADILAC";
print_r($carros);
echo "<hr>";
echo $carros[10];
echo "<hr>";

$motos = array();
$motos[] = "YAMAHA";
$motos[] = "HONDA";
$motos[5] = "SUZUKY";
print_r($motos);
echo "<hr>";

$clientes = [1 => "Rafael", "Gleisi", "Lucas", "Théo", "Cesar", "Regina"];
print_r($clientes);
echo "<hr>";

//Count
echo 'O número de clientes cadastrados é de:     ' . count($clientes) . "<br>";
echo 'O número de carros cadastrados é de:     ' . count($carros) . "<br>";
echo 'O número de motos cadastrados é de:     ' . count($motos) . "<br>";
echo "<hr>";

//Foreach
foreach ($carros as $valor) {
    echo $valor . "<br>";
}
echo "<hr>";
foreach ($motos as $fabricantes) {
    echo $fabricantes . "<br>";
}
echo "<hr>";
foreach ($clientes as $cadastrados) {
    echo $cadastrados . "<br>";
}
echo "<hr>";

//Arrays Associativos
$pessoa = array("nome" => "Rafael", "idade" => 23, "altura" => 1.76);
$pessoa["cidade"] = "Nova Iguaçu";
print_r($pessoa);
echo "<hr>";
foreach ($pessoa as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}
echo "<hr>";

//Arrays Multidimencionais
$times = array(
    "Cariocas" => array("1" => "Vasco da Gama", "2" => "Flamengo", "3" => "Botafogo", "4" => "Fluminense"),
    "Paulistas" => array("1" => "São Paulo", "2" => "Corintians", "3" => "Palmeiras", "4" => "Santos"),
    "Grenal" => array("1" => "Paraná", "2" => "Atlético Paranense", "3" => "Grêmio", "4" => "Internacional")
);
echo $times["Grenal"][3] . "<br><br>";
print_r($times);
echo "<br><br>";

foreach ($times["Cariocas"] as $indice => $valor) {
    echo $indice . "º colocado: " . $valor . "<br><br><hr>";
}
foreach ($times["Paulistas"] as $indice => $valor) {
    echo $indice . "º colocado: " . $valor . "<br><br><hr>";
}
foreach ($times["Grenal"] as $indice => $valor) {
    echo $indice . "º colocado: " . $valor . "<br><br><hr>";
}
