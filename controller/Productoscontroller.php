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
					if (isset($_POST['token'])) {

						$data = new stdClass();

						$data->ID_Producto = intval($_POST['id']);
						$data->Nombre_comercial = $_POST['Nombre_comercial'];
						$data->Registro_sanitario = $_POST['Registro_sanitario'];
						$data->Nombre_generico = $_POST['Nombre_generico'];
						$data->Forma_farmaceutica = $_POST['Forma_farmaceutica'];
						$data->presentacion_comercial = $_POST['presentacion_comercial'];
						$data->concentracion = $_POST['concentracion'];
						$data->estado_registro_sanitario = $_POST['estado_registro_sanitario'];
						$data->clasificacion_riesgo = $_POST['clasificacion_riesgo'];
						$data->vida_util = $_POST['vida_util'];
						$data->marca = $_POST['marca'];
						$data->activo = 1;

						$this->productos->Registrar($data);

						header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/productos/page');

					}else{
						$this->LoadView();
					}
				}elseif ($access === 'denied') {
					$this->LoadView('denied');
				}elseif ($access === 'redirect') {
					header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/login/quit');
				}
			}else{
				header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/login/quit');
			}
		}

		public function Editar()
		{
			if (isset($_SESSION["user"])) {
				$access = BaseHelper::Access($_SESSION["user"],$_SESSION["crear_acta"]);
				if ($access === 'allow') {
					if (isset($_POST['token'])) {

						$data = new stdClass();

						$data->ID_Producto = intval($_POST['id']);
						$data->Nombre_comercial = $_POST['Nombre_comercial'];
						$data->Registro_sanitario = $_POST['Registro_sanitario'];
						$data->Nombre_generico = $_POST['Nombre_generico'];
						$data->Forma_farmaceutica = $_POST['Forma_farmaceutica'];
						$data->presentacion_comercial = $_POST['presentacion_comercial'];
						$data->concentracion = $_POST['concentracion'];
						$data->estado_registro_sanitario = $_POST['estado_registro_sanitario'];
						$data->clasificacion_riesgo = $_POST['clasificacion_riesgo'];
						$data->vida_util = $_POST['vida_util'];
						$data->marca = $_POST['marca'];
						$data->activo = 1;

						$this->Attach = $this->productos->UpdateEdit($data);

						header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/productos/editar/'.intval($_POST['id']));

					}else{
						$this->Attach = $this->productos->ConsultEdit($this->Uri[2]);
						$this->LoadView();
					}
				}elseif ($access === 'denied') {
					$this->LoadView('denied');
				}elseif ($access === 'redirect') {
					header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/login/quit');
				}
			}else{
				header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/login/quit');
			}
		}

		public function Eliminar()
		{
			if (isset($_SESSION["user"])) {
				$access = BaseHelper::Access($_SESSION["user"],$_SESSION["crear_acta"]);
				if ($access === 'allow') {
					$this->productos->Eliminar($this->Uri[2]);
					header('Location: ' . "http://".$_SERVER['HTTP_HOST'].'/productos/page');
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