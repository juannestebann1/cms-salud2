<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"> Nuevo Acta</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('acta/new') ?>"><i class="fas fa-plus"></i></a>
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('acta/page') ?>"><i class="fas fa-list-ul"></i></a>
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('acta/search') ?>"><i class="fas fa-search"></i></a>
          </div>
        </div>
      </div>
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Fecha</label>
      <input type="text" class="form-control" name="Registro_sanitario" value="1221312">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre comercial</label>
      <input type="text" class="form-control" name="Nombre_comercial" placeholder="AIRE REES 1 LITRO">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nombre generico</label>
      <input type="text" class="form-control" name="Nombre_generico" placeholder="SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN">
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
</form>