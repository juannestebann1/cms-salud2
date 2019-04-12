<?php
	class ProductosController extends Controller
	{
		public function __CONSTRUCT()
		{
			parent::__CONSTRUCT();
			$this->productos = $this->LoadModel('ProductosModel');
		}

		public function Index(){
			$this->LoadView();
		}

		public function Page()
		{
			if (isset($_SESSION["user"])) {
				$access = BaseHelper::Access($_SESSION["user"],$_SESSION["crear_acta"]);
				if ($access === 'allow') {
					if (isset($this->Uri[2])) {
						$this->Attach = $this->productos->ListaProductos($this->Uri[2], 10);
					}else{
						$this->Attach = $this->productos->ListaProductos(0, 10);
					}
					$this->Attach[2] = FormHelper::Pagination($this->Attach[1], $this->BaseUrl('productos/page'));
					$this->LoadView();
				}elseif ($access === 'denied') {
					$this->LoadView('denied');
				}elseif ($access === 'redirect') {
					header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/login/quit');
				}
			}else{
				header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/login/quit');
			}
		}

		public function New()
		{
			if (isset($_SESSION["user"])) {
				$access = BaseHelper::Access($_SESSION["user"],$_SESSION["crear_acta"]);
				if ($access === 'allow') {
					$this->LoadView();
				}elseif ($access === 'denied') {
					$this->LoadView('denied');
				}elseif ($access === 'redirect') {
					header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/login/quit');
				}
			}else{
				header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/login/quit');
			}
		}
	}