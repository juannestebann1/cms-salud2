<?php
	class LoginController extends Controller
	{

		public function __CONSTRUCT()
		{
			parent::__CONSTRUCT();
			$this->em = $this->LoadModel('accessmodel');
		}

		public function Index()
		{

			if (isset($_POST['user'])) {

				$this->Attach = $this->em->access($_POST['user'], $_POST['pass']);
				$x = $this->Attach[0]->ID_permisos;
				$p = $this->em->level($x);
				$permisos = $p[0];
				//var_dump($permisos);
				@$_SESSION['user'] = $this->Attach[0]->Usuario;
				@$_SESSION['level'] = $permisos->Nombre;
				@$_SESSION['crear_acta'] = $permisos->Crear_acta;
				@$_SESSION['eliminar_acta'] = $permisos->Modificar_acta;
				@$_SESSION['editar_acta'] = $permisos->Eliminar_acta;
			}
			if (isset($_SESSION['user'])) {
				header('Location: ' . "http://".$_SERVER['HTTP_HOST']);
			}else{
				$this->Layout = false;
				$this->LoadView();
			}
			
		}

		public function quit()
		{
			session_destroy();
			header('Location: ' . "http://".$_SERVER['HTTP_HOST']);
		}
	}