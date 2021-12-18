<?php

//CONSTANTES
define("NOME", "Rafael Barros");
define("IDADE", 24);
define("ALTURA", 1.76);
define("CASADO", true);

define("TIMES", ['vasco', 'flamengo', 'santos']);

echo 'Meu nome é ' . NOME . ', minha idade é ' . IDADE . ' e minha altura é ' . ALTURA . '.';
echo "<hr>";
echo TIMES[0];
var_dump(TIMES);

function exibeNome()
{
    echo NOME;
}
exibeNome();
