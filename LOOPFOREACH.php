<?php
$listnama= ["tono"=>67,"yana"=>47,"nana"=>60,"yayam"=>37,"andi"=>61,"anang"=>90,"mayang"=>18,"hanah"=>17];
echo "<ol>";
foreach($listnama as $nama=>$umur){
    echo"<li>$nama berumur ".$umur."<br/></li>";

}
echo "</ol>";
?>