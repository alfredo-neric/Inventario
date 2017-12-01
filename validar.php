<?php
function encode_this($string)
{
$string=utf8_encode($string);
$control="sct";
$string=$control.$string.$control;
$string=base64_encode($string);
return $string;
}
$usuario=$_REQUEST['username'];
$psw=$_REQUEST['pswd'];
include('conexion.php');
$psw2=$psw;
//$psw2=md5($psw);
$sql="SELECT * FROM TC_USUARIOS WHERE usuario = '$usuario'";
$consulta=mysql_query($sql)or die("Error de Consulta.");
$cuantos=mysql_num_rows($consulta);
if($cuantos>0){
	$contra=mysql_result($consulta,0,'contrasenia');
	if($contra==$psw2){
		$activo=mysql_result($consulta,0,'habilitado');
		if($activo== 1){
			$tipo=mysql_result($consulta,0,'idtipousuario');
			if($tipo==1 or $tipo==2){
				$idu=mysql_result($consulta,0,'idusuario');
				$aux=encode_this("idu=$idu&tipo=$tipo");
				print "<meta http-equiv='refresh' content='0; url=accesos.php?".$aux."'>";
			}else{
					$msg="Existe un problema con tu usuario, ponte en contacto con tu Administrador.";
					print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
					exit;
				}
		}else{
			$msg="El usuario no se encuentra activo.";
			print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
			exit;
		}
	}	else{
		$msg="El usuario y/o constraseña no son correctos.";
		print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
		exit;
	}
}else{
	$msg="El usuario no existe.";
	print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
	exit;
}
?>
