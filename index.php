<?php 
$email_a='tim@yaochufa.com';
$email_b='bogus';
if (filter_var($email_a,FILTER_VALIDATE_EMAIL)){
    echo "This ($email_a) email address is considered valid.";
}
if (filter_var($email_b,FILTER_VALIDATE_EMAIL)){
    echo "This ($email_b) email address is considered valid.";
    echo "<pre>";
}
echo "<pre>";
$ip_a='127.0.0.1';
$ip_b='42.42';
if (filter_var($ip_a,FILTER_VALIDATE_IP))
{
    echo "this (ip_a) IP is valid.";
}
echo "<pre>";
if (filter_var($ip_b,FILTER_VALIDATE_IP))
{
    echo "this ($ip_b) IP is valid.";
}
echo "<pre>";
$int_a='1';
$int_b='-1';
$int_c='4';
$options=array(
    'options'=>array(
    'min_range'=>0,
    'max_range'=>3,
)
);
if (filter_var($int_a,FILTER_VALIDATE_INT,$options)!==FALSE){
    echo "int_a :$int_a is between 0 and 3 .";
}
echo "<pre>";
$var=filter_var($int_a,FILTER_VALIDATE_INT,$options);
echo "var"."$var";
echo "<pre>";
$var_ip_a=filter_var($ip_a,FILTER_VALIDATE_IP);
echo "<pre>"."$var_ip_a";
include "./filteclass.php";
$a=new filter();
echo "<pre>";
echo var_dump($a->field("18888885541")->checkPhoneNumber()->get());




echo "<pre>";
echo "index.php...";

?>

