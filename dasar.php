<?php
/*$nama= "rere";
$nama1= "reyra";
eCho "nama saya " .$nama. "<br/>";
function biodata(){
    $Nama= "Agung";
    global $nama1;
    eCho "nama saya " .$nama1. "<br/>";
    echo "<p>nama saya $Nama</p>";
}
biodata();
//define("nama","value","caseSensitive");
define("siswa", "saya siswa 71",);
echo siswa;
echo " <br/>";
define('murid',["jijin","jara","wilwil"]);
echo murid[2];
echo "<br/>";

$x = 100;
$y = 800;
if($x > $y){
    echo "X lebih besar dari y"."<br/>";
}else{
    echo "Y lebih besar dari x"."<br/>";
}

$x = "10.90" +100;
var_dump(is_numeric($x));

//kondisi
//ifelse
$NamaLengkap = "Andina";
$Nilai = 60;
echo $NamaLengkap;
echo "<br/>";
echo $Nilai;
echo "<br/>";
if ($Nilai>=78){
    echo "Selamat nilai anda diatas kkm";
}else{
    echo "maaf nilai anda dibawah kkm";
}
echo "<br/>";

//if
$NamaLengkap = "Andi";
$Nilai = 90;
echo $NamaLengkap;
echo "<br/>";
echo $Nilai;
echo "<br/>";
if ($Nilai>=78){
    echo "Selamat nilai anda diatas kkm";
}
echo "<br/>";

//perulangan for
for ($x = 1; $x <= 15;$x++){
    echo "Hello world"."<br/>";
}*/
$nilai="yes";
If ($nilai == "yes"){
    Echo "nilai benar";
    }else{
    echo "nilai salah";
    }

$num = [1, 2, 3];
    unset($num[1]);
    echo "<pre>";
    print_r($num);
    echo "</pre>";
   
    function operasi($num1,$num2){
        $hasilPenjumlahan = $num1 + $num2;
        $hasilPengurangan = $num1 - $num2;
        $hasilPerkalian = $num1 * $num2;
        $hasilModulus = $num1 % $num2;
        $hasilPembagian = $num1 / $num2;
        
        echo 'hasil dari '.$num1.' + '.$num2.' adalah '.$hasilPenjumlahan.'</br>';
        echo 'hasil dari '.$num1.' - '.$num2.' adalah '.$hasilPengurangan.'</br>';
        echo 'hasil dari '.$num1.' x '.$num2.' adalah '.$hasilPerkalian.'</br>';
        echo 'hasil dari '.$num1.' % '.$num2.' adalah '.$hasilModulus.'</br>';
        echo 'hasil dari '.$num1.' / '.$num2.' adalah '.$hasilPembagian.'</br>';
    }
    operasi(10,8);




?>