<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Productos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('productos/new') ?>"><i class="fas fa-plus"></i></a>
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('productos/page') ?>"><i class="fas fa-list-ul"></i></a>
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('productos/search') ?>"><i class="fas fa-search"></i></a>
          </div>
        </div>
      </div>
<?php 
echo $this->Attach[2];
echo "
<table class='table table-striped table-sm'>
<thead>
	<tr>
		<th scope='col'>#</th>
		<th scope='col'>Registro Sanitario</th>
		<th scope='col'>Nombre comercial</th>
		<th scope='col'>Nombre generico</th>
		<th scope='col'>Forma farmaceutica</th>
		<th scope='col'>Presentacion comercial</th>
		<th scope='col'>concentracion</th>
		<th scope='col'>estado registro sanitario</th>
		<th scope='col'>clasificacion riesgo</th>
		<th scope='col'>vida_util</th>
		<th scope='col'>marca</th>
	</tr>
</thead>
<tbody>";
for ($i = 0; $i <= count($this->Attach[0])-1; $i++) {
    echo "<tr>";
    echo "<th scope='row'>" . $this->Attach[0][$i]->ID_Producto. "</th>";
    echo "<td>" . $this->Attach[0][$i]->Registro_sanitario. "</td>";
    echo "<td>" . $this->Attach[0][$i]->Nombre_comercial. "</td>";
    echo "<td>" . $this->Attach[0][$i]->Nombre_generico. "</td>";
    echo "<td>" . $this->Attach[0][$i]->Forma_farmaceutica. "</td>";
    echo "<td>" . $this->Attach[0][$i]->presentacion_comercial. "</td>";
    echo "<td>" . $this->Attach[0][$i]->concentracion. "</td>";
    echo "<td>" . $this->Attach[0][$i]->estado_registro_sanitario. "</td>";
    echo "<td>" . $this->Attach[0][$i]->clasificacion_riesgo. "</td>";
    echo "<td>" . $this->Attach[0][$i]->vida_util. "</td>";
    echo "<td>" . $this->Attach[0][$i]->nombre. "</td>";
    echo "<td><a href='".$this->BaseUrl('productos/editar/'.$this->Attach[0][$i]->ID_Producto)."'><i class='fas fa-pencil-alt'></i></a></td>";
    echo "<td><a href='".$this->BaseUrl('productos/eliminar/'.$this->Attach[0][$i]->ID_Producto)."'><i class='far fa-trash-alt'></i></a></td>";
    echo "</tr>";
}
echo "</tbody></table>";
echo $this->Attach[2];
?>