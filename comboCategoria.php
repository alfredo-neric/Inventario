<?php
include("conexion.php");
$division = $_REQUEST['idd'];
$sql="SELECT idcategoria, categoria FROM tc_categorias WHERE iddivision = ".$division." AND estatus = 1";
$data=mysql_query($sql)or die("Error de consulta ln.4");
$cuantos=mysql_num_rows($data);
if($cuantos > 0){
	echo"<option value='0'>Seleccionar</option>";
	for($y=0; $y<$cuantos; $y++){
		echo"<option value='".mysql_result($data,$y,'idcategoria')."'>".mysql_result($data,$y,'categoria')."</option>";
	}
}else{
	echo"<option value='0'>No hay datos</option>";
}
?>