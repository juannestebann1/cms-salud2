<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Usuarios</h1>
      </div>
<style type="text/css">
	.trbp {
		height: 300px;
		font-size: 60px;
		text-align: center;
		-webkit-transition: background .5s; /* Safari */
  		transition: background .5s;
	}

	.trbp a {
		line-height: 300px;
	}

	.trbp span{
		position: relative;
		top: -150px;
		font-size: 20px;
		line-height: -300px;
	}

	.trbp:hover{
		background: #999;
		color: #fff;
		-webkit-transition: background .5s; /* Safari */
  		transition: background .5s;
	}

	.trbp:hover a{
		color: #fff;
	}
</style>

<div class="container">
  <div class="row align-items-center">
    <div class="col trbp">
		<a href="<?php echo $this->BaseUrl('usuarios/new') ?>"><i class="fas fa-plus"></i></a><br><span>Nuevo</span>
    </div>
    <div class="col trbp">
		<a href="<?php echo $this->BaseUrl('usuarios/page') ?>"><i class="fas fa-list-ul"></i></a><br><span>Ver</span>
    </div>
    <div class="col trbp">
		<a href="<?php echo $this->BaseUrl('usuarios/privilegios') ?>"><i class="fas fa-shield-alt"></i></a><br><span>privilegios</span>
    </div>
    <div class="col trbp">
		<a href="<?php echo $this->BaseUrl('usuarios/search') ?>"><i class="fas fa-search"></i></a><br><span>Buscar</span>
    </div>
  </div>
</div>
