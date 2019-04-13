<?php
// Cargamos un el jqgrid
require_once 'helper/jqgridhelper.php';

class ProductosModel extends DataAccessLayer
{
	private $jq;
	private $rh;

	public function __CONSTRUCT()
	{
		parent::__CONSTRUCT();

		$this->jq = new jqGridHelper();
		$this->rh = new ResponseHelper();
	}

	public function ListaProductos($star=0, $cantidad_resultados_por_pagina)
	{
		$r = null;

		if (intval($star) == 0) {
			$inicia = intval($star);
		}else{
			$inicia = (intval($star)-1)*10;
		}

		
		try 
		{
			$db = $this->Link
			          ->prepare("SELECT * FROM productos");
			$db->execute();

			$r = $db->fetchAll(PDO::FETCH_OBJ);

			$total_registros = count($r);

			$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina);

			$db = $this->Link
			          ->prepare("SELECT * FROM productos WHERE activo = 1 ORDER BY `ID_Producto` ASC LIMIT $inicia, 10");
			$db->execute();

			$r = $db->fetchAll(PDO::FETCH_OBJ);

			$rs = array($r, $total_paginas);

		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $rs;
	}

	public function UpdateEdit($data)
	{

		try 
		{
			$db = $this->Link
			          ->prepare("UPDATE `productos` SET `Nombre_comercial` = '".$data->Nombre_comercial."', `Registro_sanitario` = '".$data->Registro_sanitario."', `Nombre_generico` = '".$data->Nombre_generico."', `Forma_farmaceutica` = '".$data->Forma_farmaceutica."', `presentacion_comercial` = '".$data->presentacion_comercial."', `concentracion` = '".$data->concentracion."', `estado_registro_sanitario` = '".$data->estado_registro_sanitario."', `clasificacion_riesgo` = '".$data->clasificacion_riesgo."', `vida_util` = '".$data->vida_util."', `marca` = '".$data->marca."', `activo` = '".$data->activo."' WHERE `productos`.`ID_Producto` = $data->ID_Producto;");
			$db->execute();

		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}
	}

	public function ConsultEdit($id)
	{
		$r = null;
		
		try 
		{
			$db = $this->Link
			          ->prepare("SELECT * FROM productos WHERE ID_Producto = ?");
			          

			$db->execute(array(intval($id)));
			$r = $db->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $r;
	}

	public function Registrar($data)
	{
		try 
		{
			$this->Link->prepare(
				"INSERT INTO `productos` (`ID_Producto`, `Nombre_comercial`, `Registro_sanitario`, `Nombre_generico`, `Forma_farmaceutica`, `presentacion_comercial`, `concentracion`, `estado_registro_sanitario`, `clasificacion_riesgo`, `vida_util`, `Proveedores`, `marca`, `activo`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
			)->execute(
				array(
					$data->Nombre,
					$data->Tipo,
					$data->Descripcion, 
					$data->Contenido, 
					$data->Tags,
					$data->Imagen,
				)
			);

			$this->rh->result = $this->Link->lastInsertId();

			if(isset($data->Categorias))
			{
				foreach($data->Categorias as $c)
				{
					$this->Link->prepare(
						"INSERT INTO entradacategoria(Entrada_id, Categoria_id)
						VALUES (?, ?)"
					)->execute(
						array(
							$this->rh->result,
							$c)
						);
				}
			}

			$this->rh->SetResponse(true);
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $this->rh;
	}

	public function Eliminar($id)
	{
		try 
		{
			$this->Link->prepare(
				"UPDATE productos SET activo = 0 WHERE ID_Producto = ?"
			)->execute(
				array(
					$id)
				);

			$this->rh->SetResponse(true);
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $this->rh;
	}
}