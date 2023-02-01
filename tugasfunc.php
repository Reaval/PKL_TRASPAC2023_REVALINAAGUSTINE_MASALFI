<?php
function penjumlahan($num1,$num2){

    $hasilPenjumlahan = $num1 + $num2;
    echo 'hasil dari '.$num1.' + '.$num2.'adalah '.$hasilPenjumlahan.'</br>';
}
penjumlahan(10,8);
function pengurangan($num1,$num2){
   
    $hasilPengurangan = $num1 - $num2;
    echo 'hasil dari '.$num1.' - '.$num2.'adalah '.$hasilPengurangan.'</br>';
}
pengurangan(10,8);
function perkalian($num1,$num2){
 
    $hasilPerkalian = $num1 * $num2;
    echo 'hasil dari '.$num1.' x '.$num2.'adalah '.$hasilPerkalian.'</br>';
}
perkalian(10,8);
function modulus($num1,$num2){
    
    if($num2 == 0){
        echo 'invalid </br>';
    }else{
        $hasilModulus = $num1 % $num2;
        echo 'hasil dari '.$num1.' % '.$num2.'adalah '.$hasilModulus.'</br>';
    }
    
}
modulus(10,0);
function pembagian($num1,$num2){
    if($num2 == 0) {
        echo 'invalid </br>';
    }else{
        $hasilPembagian = $num1 / $num2;
        echo 'hasil dari '.$num1.' / '.$num2.'adalah '.$hasilPembagian.'</br>';
    }
    }
    
pembagian(10,0);
?>