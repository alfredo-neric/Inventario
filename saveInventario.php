<?php
include("conexion.php");
$clave=$_REQUEST['clave'];
$categoria=$_REQUEST['categoria'];
$departamento=$_REQUEST['departamento'];
$marca=$_REQUEST['marca'];
$proveedor=$_REQUEST['proveedor'];
$modelo=$_REQUEST['modelo'];
$estado=$_REQUEST['estado'];
$numero=$_REQUEST['numero'];
$garantia=$_REQUEST['garantia'];
$costo=$_REQUEST['costo'];
$folio=$_REQUEST['folio'];
$tipo=$_REQUEST['tipo'];
$fecalta=$_REQUEST['fechaalta'];
$fecbaja=$_REQUEST['fechabaja'];
$descripcion=$_REQUEST['descripcion'];
$observaciones=$_REQUEST['observaciones'];

if($departamento>0 && $categoria>0 && $marca>0 && $proveedor>0 && $estado>0 && $garantia>0 && $tipo > 0){
	if($clave != "" && $modelo!= "" && $numero != "" && $folio != "" && $fecalta != ""){
		if($costo>0 && $descripcion != ""){
			$sql="INSERT INTO tw_inventario (clave, idcategoria, iddepartamento, idmarca, idproveedor, modelo, idestado, numserie, descripcion, idgarantia, costoiva, foliofactura, idtipoadquisicion, fechaalta, fechabaja, observaciones) VALUES ('".$clave."',".$categoria.",".$departamento.",".$marca.",".$proveedor.",'".$modelo."',".$estado.",'".$numero."','".$descripcion."',".$garantia.",'".$costo."','".$folio."',".$tipo.",'".$fecalta."','".$fecbaja."','".$observaciones."')";
			$data=mysql_query($sql);
			if($data){
				echo"<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Exito!</strong> Se ha registrado correctamente.</div>";
				echo "<script>";
				echo "$('#frmdo')[0].reset();";
				echo "</script>";
			}else{
				echo"<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Error!</strong> Se ha presentado un error salvando los datos. Contacta al administrador.</div>";
			}
		}else{
			echo"<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Favor de validar los siguientes campos:</strong><div class='row'><div class='col-md-4'>Costo con IVA</div><div class='col-md-4'>Descripción</div></div></div>";
		}
	}else{
		echo"<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Favor de validar los siguientes campos:</strong><div class='row'><div class='col-md-4'>Clave</div><div class='col-md-4'>Modelo</div><div class='col-md-4'>Número de Serie</div><div class='col-md-4'>Folio Factura</div><div class='col-md-4'>Fecha de Alta</div></div></div>";
	}
}else{
	echo"<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Favor de validar los siguientes campos:</strong><div class='row'><div class='col-md-3'>Categoría</div><div class='col-md-3'>Departamento</div><div class='col-md-3'>Marca</div><div class='col-md-3'>Proveedor</div><div class='col-md-3'>Estado</div><div class='col-md-3'>Garantia</div><div class='col-md-3'>Tipo Adquisición</div></div></div>";
}
?> 