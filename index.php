<?php 
include "./filteclass.php";
$a=new filter();
echo "<pre>";
echo var_dump($a->field("18888885541")->checkPhoneNumber()->get());




echo "<pre>";
echo "index.php...";

?>

