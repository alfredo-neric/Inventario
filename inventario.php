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
				<form action="inventario.php" method="POST" target="_self" id="frmdo" name="frmdo">
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">
								<label>Clave:</label>
								<input class="form-control" id="clave" name="clave" type="text">
							</div>
							<div class="col-md-4">
								<label>Categoría:</label>
								<select id="categoria" name="categoria" class="form-control">
									<option value='0'>Seleccionar</option>
									<?php
									$sql="SELECT idcategoria, categoria FROM tc_categorias WHERE estatus = 1";
									$data=mysql_query($sql)or die("Error de consulta ln.75");
									$cuantos=mysql_num_rows($data);
									for($y=0; $y<$cuantos; $y++){
										echo"<option value='".mysql_result($data,$y,'idcategoria')."'>".mysql_result($data,$y,'categoria')."</option>";
									}
									?>
								</select>
							</div>
							<div class="col-md-4">
								<label>Departamento:</label>
								<select id="departamento" name="departamento" class="form-control">
									<option value='0'>Seleccionar</option>
									<?php
									$sql="SELECT iddepartamento, departamento FROM tc_departamentos WHERE estatus = 1";
									$data=mysql_query($sql)or die("Error de consulta ln.91");
									$cuantos=mysql_num_rows($data);
									for($y=0; $y<$cuantos; $y++){
										echo"<option value='".mysql_result($data,$y,'iddepartamento')."'>".mysql_result($data,$y,'departamento')."</option>";
									}
									?>
								</select>
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
								<select id="marca" name="marca" class="form-control">
									<option value='0'>Seleccionar</option>
									<?php
									$sql="SELECT idmarca, marca FROM tc_marcas WHERE estatus = 1";
									$data=mysql_query($sql)or die("Error de consulta ln.113");
									$cuantos=mysql_num_rows($data);
									for($y=0; $y<$cuantos; $y++){
										echo"<option value='".mysql_result($data,$y,'idmarca')."'>".mysql_result($data,$y,'marca')."</option>";
									}
									?>
								</select>
							</div>
							<div class="col-md-4">
								<label>Proveedor:</label>
								<select id="proveedor" name="proveedor" class="form-control">
									<option value='0'>Seleccionar</option>
									<?php
									$sql="SELECT idproveedor, proveedor FROM tc_proveedores WHERE estatus=1";
									$data=mysql_query($sql)or die("Error de consulta ln.127");
									$cuantos=mysql_num_rows($data);
									for($y=0; $y<$cuantos; $y++){
										echo"<option value='".mysql_result($data,$y,'idproveedor')."'>".mysql_result($data,$y,'proveedor')."</option>";
									}
									?>
								</select>
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
								<select id="estado" name="estado" class="form-control">
									<option value='0'>Seleccionar</option>
									<?php
									$sql="SELECT idestado, estado FROM tc_estados WHERE estatus = 1";
									$data=mysql_query($sql)or die("Error de consulta ln.149");
									$cuantos=mysql_num_rows($data);
									for($y=0; $y<$cuantos; $y++){
										echo"<option value='".mysql_result($data,$y,'idestado')."'>".mysql_result($data,$y,'estado')."</option>";
									}
									?>
								</select>
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
								<select id="garantia" name="garantia" class="form-control">
									<option value='0'>Seleccionar</option>
									<?php
									$sql="SELECT idgarantia, garantia FROM tc_garantias WHERE estatus=1";
									$data=mysql_query($sql)or die("Error de consulta ln.171");
									$cuantos=mysql_num_rows($data);
									for($y=0; $y<$cuantos; $y++){
										echo"<option value='".mysql_result($data,$y,'idgarantia')."'>".mysql_result($data,$y,'garantia')."</option>";
									}
									?>
								</select>
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
								<select id="tipo" name="tipo" class="form-control">
									<option value='0'>Seleccionar</option>
									<?php
									$sql="SELECT idtipoadquisicion, tipoadquisicion FROM tc_tipoadquisiciones WHERE estatus=1";
									$data=mysql_query($sql)or die("Error de consulta ln.197");
									$cuantos=mysql_num_rows($data);
									for($y=0; $y<$cuantos; $y++){
										echo"<option value='".mysql_result($data,$y,'idtipoadquisicion')."'>".mysql_result($data,$y,'tipoadquisicion')."</option>";
									}
									?>
								</select>
							</div>
							<div class="col-md-4">
								<label>Fecha Alta:</label>
								<input class="form-control" id="fechaalta" name="fechaalta" type="date">
							</div>
							<div class="col-md-4">
								<label>Fecha Baja:</label>
								<input class="form-control" id="fechabaja" name="fechabaja" type="date">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<label>Descripción:</label>
								<textarea class="form-control" id="descripcion" name="descripcion" rows="3" style="resize: none;"></textarea>
							</div>
							<div class="col-md-6">
								<label>Observaciones:</label>
								<textarea class="form-control" id="observaciones" name="observaciones" rows="3" style="resize: none;"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div id="result"></div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary" id="btnLimpiar" value="Limpiar" />
				<input type="button" class="btn btn-success" id="btn-guardar" value="Guardar" />
				<a class="btn btn-primary" href="inventario.php" >Cerrar</a>
			</div>
        </div>
    </div>
</div>
<script>
    $(document).on('ready',function(){
		$('#btn-guardar').click(function(){
			var url = "saveInventario.php";                                      

			$.ajax({                        
				type: "POST",                 
				url: url,                    
				data: $("#frmdo").serialize(),
				success: function(data)            
				{
					$('#result').html(data);           
				}
			});
		});
    });
</script>
<script>
   $("#btnLimpiar").click(function(event) {
	   $("#frmdo")[0].reset();
   });
</script>
<?php
	include('footer.php');
?>
