<?php

for ($contador = 1; $contador <= 15; $contador ++){
    if ($contador == 10){
        continue;
    }
    echo "#$contador" . PHP_EOL;
}