<?php
	class InicioController extends Controller
	{
		private $em;

		public function __CONSTRUCT()
		{
			parent::__CONSTRUCT();
			$this->em = $this->LoadModel('EntradaModel');
		}

		public function Index()
		{
			if (isset($_SESSION["user"])) {
				$this->LoadView();
			}else{
				header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/login');
			}
		}

	
	}