<?php
$conexion=mysql_connect('localhost','root','')or die("Error de conexión con el Servidor.");
$base=mysql_select_db('inventario',$conexion)or die("Error de conexión con la Base de Datos.");
?>
