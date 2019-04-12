<?php
// Cargamos un el jqgrid
require_once 'helper/jqgridhelper.php';

class AccessModel extends DataAccessLayer
{
	private $jq;
	private $rh;

	public function __CONSTRUCT()
	{
		parent::__CONSTRUCT();

		$this->jq = new jqGridHelper();
		$this->rh = new ResponseHelper();
	}

	public function access($U, $P)
	{
		$r = null;
		
		try 
		{
			$db = $this->Link
			          ->prepare('SELECT Usuario, Nombre, ID_permisos FROM usuarios WHERE Usuario = "'.$U.'" AND pass ="'.$P.'"');
			          

			$db->execute();
			$r = $db->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $r;
	}

	public function level($L)
	{
		$r = null;
		
		try 
		{
			$db = $this->Link
			          ->prepare('SELECT * FROM permisos WHERE ID_permisos = "'.$L.'"');
			          

			$db->execute();
			$r = $db->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $r;
	}

}