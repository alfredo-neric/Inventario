<?php 
	include('seguridad.php');
	include('header.php');
?>

<div class="table-responsive">
	<h1>Inventario</h1>
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
		  
<?php
	include('footer.php');
?>
				