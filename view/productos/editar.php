<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"> Editar producto</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('productos/new') ?>"><i class="fas fa-plus"></i></a>
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('productos/page') ?>"><i class="fas fa-list-ul"></i></a>
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('productos/search') ?>"><i class="fas fa-search"></i></a>
          </div>
        </div>
      </div>
<form method="post">
  <input type="hidden" name="token" value="<?php echo $this->Uri[2]; ?>">
  <input type="hidden" name="id" value="<?php echo $this->Uri[2]; ?>">
  <div class="form-row">
  	<div class="form-group col-md-12">
      <label for="inputEmail4">Registro sanitario</label>
      <input type="text" class="form-control" name="Registro_sanitario" value="<?php echo $this->Attach->Registro_sanitario; ?>" placeholder="2017DM-0000426-R1">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre comercial</label>
      <input type="text" class="form-control" name="Nombre_comercial" value="<?php echo $this->Attach->Nombre_comercial; ?>" placeholder="AIRE REES 1 LITRO">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nombre generico</label>
      <input type="text" class="form-control" name="Nombre_generico" value="<?php echo $this->Attach->Nombre_generico; ?>" placeholder="SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN">
    </div>
  </div>
  <div class="form-row">
	  <div class="form-group col-md-4">
	    <label for="inputAddress">forma farmaceutica</label>
	    <input type="text" class="form-control" name="Forma_farmaceutica" value="<?php echo $this->Attach->Forma_farmaceutica; ?>" placeholder="NO APLICA">
	  </div>
	  <div class="form-group col-md-4">
	    <label for="inputAddress2">presentacion comercial</label>
	    <input type="text" class="form-control" name="presentacion_comercial" value="<?php echo $this->Attach->presentacion_comercial; ?>" placeholder="KIT">
	  </div>
	  <div class="form-group col-md-4">
	    <label for="inputAddress2">concentracion</label>
	    <input type="text" class="form-control" name="concentracion" value="<?php echo $this->Attach->concentracion; ?>" placeholder="NO APLICA">
	  </div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-3">
      <label for="inputCity">Marca</label>
      <input type="text" class="form-control" name="marca" value="<?php echo $this->Attach->marca; ?>" placeholder="11/05/2027">
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">Estado registro sanitario</label>
      <input type="text" class="form-control" name="estado_registro_sanitario" value="<?php echo $this->Attach->estado_registro_sanitario; ?>" placeholder="11/05/2027">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">clasificacion de riesgo</label>
      <input type="text" class="form-control" name="clasificacion_riesgo" value="<?php echo $this->Attach->clasificacion_riesgo; ?>" placeholder="IIa">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">vida util</label>
      <input type="text" class="form-control" name="vida_util" value="<?php echo $this->Attach->vida_util; ?>" placeholder="5 años">
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
</form>