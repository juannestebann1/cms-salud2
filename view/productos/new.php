<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"> Nuevo producto</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('productos/new') ?>"><i class="fas fa-plus"></i></a>
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('productos/page') ?>"><i class="fas fa-list-ul"></i></a>
          	<a class="btn btn-outline-secondary" href="<?php echo $this->BaseUrl('productos/search') ?>"><i class="fas fa-search"></i></a>
          </div>
        </div>
      </div>
<form>
  <div class="form-row">
  	<div class="form-group col-md-12">
      <label for="inputEmail4">Registro sanitario</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="2017DM-0000426-R1">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre comercial</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="AIRE REES 1 LITRO">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nombre generico</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN">
    </div>
  </div>
  <div class="form-row">
	  <div class="form-group col-md-4">
	    <label for="inputAddress">forma farmaceutica</label>
	    <input type="text" class="form-control" id="inputAddress" placeholder="NO APLICA">
	  </div>
	  <div class="form-group col-md-4">
	    <label for="inputAddress2">presentacion comercial</label>
	    <input type="text" class="form-control" id="inputAddress2" placeholder="KIT">
	  </div>
	  <div class="form-group col-md-4">
	    <label for="inputAddress2">concentracion</label>
	    <input type="text" class="form-control" id="inputAddress2" placeholder="NO APLICA">
	  </div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-3">
      <label for="inputState">Marca</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
        <option>...</option>
        <option>...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputCity">Estado registro sanitario</label>
      <input type="text" class="form-control" id="inputCity" placeholder="11/05/2027">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">clasificacion de riesgo</label>
      <input type="text" class="form-control" id="inputZip" placeholder="IIa">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">vida util</label>
      <input type="text" class="form-control" id="inputZip" placeholder="5 años">
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
</form>