<?php
$idade = 21;

// o "\n" serve para pular uma linha:

echo 'Olá mundo! Minha idade é ' . $idade . ' anos'."\n";
//resultado: Olá mundo! Minha idade é 21 anos.

echo "Olá mundo!\nMinha idade é $idade anos. \n";
//resultado: 
//Olá mundo! 
//Minha idade é 21 anos.

echo "\tMinha idade é $idade anos.\n";
//resultado:    Minha idade é 1 anos.

echo "Olá mundo!" . PHP_EOL;

echo "Eu tenho $idade anos.";
