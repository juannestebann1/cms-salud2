<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Zona principal</h1>
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
		<a href="<?php echo $this->BaseUrl('acta') ?>"><i class="fas fa-file"></i></a><br><span>Actas</span>
    </div>
    <div class="col trbp">
		<a href="<?php echo $this->BaseUrl('productos') ?>"><i class="fas fa-box-open"></i></a><br><span>Productos</span>
    </div>
    <div class="col trbp">
		<a href="<?php echo $this->BaseUrl('usuarios') ?>"><i class="fas fa-user-friends"></i></a><br><span>Usuarios</span>
    </div>
  </div>
</div>
