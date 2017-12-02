<?php 
	include('seguridad.php');
	include('header.php');
?>

<div class="table-responsive">
	<h1>Inventario<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">Registar Nuevo</button></h1> 
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Clave</td>
                <th>Departamento</th>
                <th>Responsable</th>
                <th>Modelo</td>
                <th>Número de Serie</th>
                <th>Categoría</th>
                <th>Estado</th>
                <th>Marca</th>
                <th>Folio</th>
            </tr>
        </thead>
        <tfoot>
			<tr>
				<th>Clave</td>
                <th>Departamento</th>
                <th>Responsable</th>
                <th>Modelo</td>
                <th>Número de Serie</th>
                <th>Categoría</th>
                <th>Estado</th>
                <th>Marca</th>
                <th>Folio</th>
            </tr>
        </tfoot>
        <tbody>
<?php
	$sql="SELECT * FROM showInventario";
	$data=mysql_query($sql)or die("Error de consulta");
	$cuantos=mysql_num_rows($data);
	for($y=0; $y<$cuantos; $y++){
		echo"<tr>
				<td>".mysql_result($data,$y,'clave')."</td>
                <td>".mysql_result($data,$y,'departamento')."</td>
                <td>".mysql_result($data,$y,'responsable')."</td>
                <td>".mysql_result($data,$y,'modelo')."</td>
                <td>".mysql_result($data,$y,'numserie')."</td>
                <td>".mysql_result($data,$y,'categoria')."</td>
                <td>".mysql_result($data,$y,'estado')."</td>
                <td>".mysql_result($data,$y,'marca')."</td>
                <td>".mysql_result($data,$y,'foliofactura')."</td>
            </tr>";
	}
?>
		</tbody>
    </table>
</div>
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
			</div>
			<div class="modal-body">
				<form action="" method="POST" target="_self" id="frmdo" name="frmdo">
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">
								<label>Clave:</label>
								<input class="form-control" id="clave" name="clave" type="text">
							</div>
							<div class="col-md-4">
								<label>Categoría:</label>
								<input class="form-control" id="categoria" name="categoria" type="text">
							</div>
							<div class="col-md-4">
								<label>Departamento:</label>
								<input class="form-control" id="departamento" name="departamento" type="text">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">
								<label>Responsable:</label>
								<input class="form-control" id="responsable" name="responsable" type="text">
							</div>
							<div class="col-md-4">
								<label>Marca:</label>
								<input class="form-control" id="marca" name="marca" type="text">
							</div>
							<div class="col-md-4">
								<label>Proveedor:</label>
								<input class="form-control" id="proveedor" name="proveedor" type="text">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">
								<label>Modelo:</label>
								<input class="form-control" id="modelo" name="modelo" type="text">
							</div>
							<div class="col-md-4">
								<label>Estado:</label>
								<input class="form-control" id="estado" name="estado" type="text">
							</div>
							<div class="col-md-4">
								<label>Número de Serie:</label>
								<input class="form-control" id="numero" name="numero" type="text">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">
								<label>Garantia:</label>
								<input class="form-control" id="garantia" name="garantia" type="text">
							</div>
							<div class="col-md-4">
								<label>Costo con IVA:</label>
								<input class="form-control" id="costo" name="costo" type="text">
							</div>
							<div class="col-md-4">
								<label>Folio Factura:</label>
								<input class="form-control" id="folio" name="folio" type="text">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">
								<label>Tipo de Adquisición:</label>
								<input class="form-control" id="tipo" name="tipo" type="text">
							</div>
							<div class="col-md-4">
								<label>Fecha Alta:</label>
								<input class="form-control" id="fechaalta" name="fechaalta" type="text">
							</div>
							<div class="col-md-4">
								<label>Fecha Baja:</label>
								<input class="form-control" id="fechabaja" name="fechabaja" type="text">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<label>Descripción:</label>
								<textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
							</div>
							<div class="col-md-6">
								<label>Observaciones:</label>
								<textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success" type="button" >Guardar</button>
				<a class="btn btn-primary" href="inventario.php" data-dismiss="modal">Cerrar</a>
			</div>
        </div>
    </div>
</div>		  
<?php
	include('footer.php');
?>
				