<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Productos</h1>
      </div>
<style type="text/css">
	.trbp {
		height: 300px;
		font-size: 60px;
		text-align: center;
		line-height: 300px;
		-webkit-transition: background .5s; /* Safari */
  		transition: background .5s;
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
		<a href="<?php echo $this->BaseUrl('productos/new') ?>"><i class="fas fa-plus"></i></a>
    </div>
    <div class="col trbp">
		<a href="<?php echo $this->BaseUrl('productos/page') ?>"><i class="fas fa-list-ul"></i></a>
    </div>
    <div class="col trbp">
		<a href="<?php echo $this->BaseUrl('productos/search') ?>"><i class="fas fa-search"></i></a>
    </div>
    <div class="col trbp">
		<a href="<?php echo $this->BaseUrl('productos/search') ?>"><i class="fas fa-boxes"></i></a>
    </div>
  </div>
</div>
