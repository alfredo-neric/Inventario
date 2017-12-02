<?php
error_reporting(0);
session_start();
include("conexion.php");
$idu=$_SESSION['idu'];
$acceso=$_SESSION['acceso'];
$tipo=$_SESSION['tipo'];
if($idu=="" or $acceso=="" or $tipo=="")
{
$msg="";
print"<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
exit;
}
$idu2=$_COOKIE['idu'];
$tipo2=$_COOKIE['tipo'];
$acceso2=$_COOKIE['acceso'];
if($idu2=="" or $acceso2=="" or $tipo2="")
{
$msg="";
print"<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
exit;
}
?>
