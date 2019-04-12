<?php
	class ActaController extends Controller
	{
		public function __CONSTRUCT()
		{
			parent::__CONSTRUCT();
			$this->em = $this->LoadModel('EntradaModel');
		}

		public function Index()
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

		public function hola(){
			echo "hola desde la vista de acta";
		}
	}