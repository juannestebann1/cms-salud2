<?php
class FrontController
{
	public $Uri = array();
	public $Area;
	public $Controller;
	public $Action = 'Index';

	// Constructor
	public function __CONSTRUCT($reload=false)
	{
		// 0=> 'Controlador' 1 => 'Accion' 2 => 'Parametros Adicionales'
		$this->Uri = explode('/', substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']) -1));

		// Preguntamos si existe en la URL actual una llamada a algun controlador especifico
		if(count($this->Uri) === 1)
		{
			//var_dump(_BASE_FOLDER_ . 'controller/' . $this->Uri[0].'/');
			if(is_dir( _BASE_FOLDER_ . 'controller/' . $this->Uri[0].'/' ))
				{
					if (@!$this->Uri[1]) {
						$this->Uri[1] = _DEFAULT_CONTROLLER_;
					}

					$this->Area = $this->Uri[0];
					$this->Controller = $this->Uri[1];
				}
				else
				{
					if ($this->Uri[0] === "" || $this->Uri[0] === "inicio") {
						$this->Controller = _DEFAULT_CONTROLLER_;
					}else{
						$this->Controller = $this->Uri[0];
					}
				}
		}
		elseif(count($this->Uri) >= 2)
		{
			// Si en la URL por defecto no hay referencia de un controlador, cargamos el que esta por defecto
			if($this->Uri[0] == '' || $this->Uri[0] == 'inicio')
			{
				$this->Controller = _DEFAULT_CONTROLLER_;
			}
			else
			{
				// Verificamos si es un Area
					//var_dump(_BASE_FOLDER_ . 'controller\\' . $this->Uri[0]);
				if(is_dir( _BASE_FOLDER_ . 'controller/' . $this->Uri[0].'/' ))
				{
					if (!$this->Uri[1]) {
						$this->Uri[1] = _DEFAULT_CONTROLLER_;
					}

					$this->Area = $this->Uri[0];
					$this->Controller = $this->Uri[1];
				}
				else
				{
					$this->Controller = $this->Uri[0];
				}
			}

			// Si se ha especificado la acción
			$i = $this->Area == null ? 1 : 2;
			if(isset($this->Uri[$i]))
			{
				if($this->Uri[$i] != '' && $this->Uri[$i] != '/')
					$this->Action = str_replace('/', '', $this->Uri[$i]);
			}
		}

		if(!$reload)
		{
			// Guardamos la ruta del controlador
			$_Controller = 'controller/' . ($this->Area == null ? '' : $this->Area . '/') . $this->Controller . 'controller.php';

			//var_dump($_Controller);

			// Verificamos que la vista exista
			if (! file_exists ( $_Controller ))
				ErrorController::Show(1, $this);

			// Cargamos el fichero
			require_once $_Controller;

			$ControladorActual = $this->Controller . 'controller';
			$AccionActual      = $this->Action;

			// Creamos una instancia del controlador actual y ejecutamos su accion
			$c = new $ControladorActual();

			// Verificamos si la acción existe
			if(!method_exists($c, $this->Action))
				ErrorController::Show(2, $this);

			// Ejecutamos la acción actual
			$c->$AccionActual();
		}
	}
}