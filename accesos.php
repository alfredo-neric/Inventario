<?php
function decode_get($string)
{
$cad=explode("?", $string);
$string=$cad[1];
$string=base64_decode($string);
$control="ANC";
$string=str_replace($control,"","$string");
$cad_get=explode("&", $string);
foreach($cad_get as $value)
{
$val_get=explode("=", $value);
$_GET[$val_get[0]]=utf8_decode($val_get[1]);
}
}
if($_GET)
{
decode_get($_SERVER["REQUEST_URI"]);
$idu=$_GET['idu'];
$tip=$_GET['tipo'];
}
session_start();
$_SESSION['idu']=$idu;
$_SESSION['tipo']=$tip;
$_SESSION['acceso']=1;
setcookie('idu',$idu);
setcookie('tipo',$tip);
setcookie('acceso',1);
print "<meta http-equiv='refresh' content='0; url=home.php'>";
exit;
?>
