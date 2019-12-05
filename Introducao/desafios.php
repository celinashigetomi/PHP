<?php
//desafio de exibir numeros impares
for ($contador=1; $contador<100; $contador+=2){
    echo "#$contador". PHP_EOL;
}

//desafio de monstrar a tabuada de 1 a 9
for ($numero1 = 1; $numero1 <= 9; $numero1 ++) {
    for ($numero2= 1; $numero2 <= 9; $numero2 ++) {
        $resultadoMultiplicacao = $numero1 * $numero2;
        echo "$numero1 x $numero2 = $resultadoMultiplicacao". PHP_EOL;
    }
} 

//desafio de exibir o imc da pessoa e seu estado
$peso = 120;
$altura = 1.62;
$imc = ($peso / ($altura **2));

echo "Seu IMC é $imc" . PHP_EOL;

if ($imc <= 16){
    echo "Subpeso severo";
}else if($imc >= 16 && $imc <= 19.9){
    echo "Subpeso";
}else if($imc >= 20 && $imc <= 24.9){
    echo "Normal" ;
}else if ($imc >= 25 && $imc <= 29.9){
    echo "Sobrepeso" ;
}else if ($imc >= 30 && $imc <= 39.9){
    echo "Obeso" ;
}else if ($imc >= 40){
    echo "Obeso Mórbido" ;
} 