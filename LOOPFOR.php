<?php

echo "Operasi angka ganjil genap <br/>";
$maksimal = 100;
$dimulai = 1;
for($i=$dimulai; $i<=$maksimal; $i++){
    if($i % 2 == 1){
        echo "Angka ".$i;
        echo " itu bilangan ganjil.<br>";
    }else{
        echo "Angka ".$i;
        echo " itu bilangan genap.<br>";

    }
}