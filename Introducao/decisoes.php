<?php
$idade = 16;
$numeroDePessoas = 1;
echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else if ($idade >= 16 && $numeroDePessoas >= 1){
    echo "Você só tem $idade anos e possui acompanhante. Você não pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";