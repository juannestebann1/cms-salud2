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
			          ->prepare("SELECT * FROM productos LEFT JOIN marca ON productos.ID_Marca = marca.ID_Marca  ORDER BY `ID_Producto` ASC LIMIT $inicia, 10");
			$db->execute();

			$r = $db->fetchAll(PDO::FETCH_OBJ);

			$rs = array($r, $total_paginas);

		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $rs;
	}

	public function Listar($tipo)
	{

		try 
		{
			$this->jq->Config(
				$this->Link->prepare("SELECT COUNT(*) FROM entrada WHERE Tipo = $tipo")
					 ->fetchColumn()
				);

			$entradas = array();

		    $sql = "SELECT * FROM entrada WHERE Tipo = $tipo ORDER BY " . $this->jq->sord;
		    foreach ($this->Link->query($sql) as $row) {
		        $entradas[] = (object) $row;
		    }

			$this->jq->DataSource($entradas);			
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $this->jq;
	}

	public function Obtener($id)
	{
		$r = null;
		
		try 
		{
			$db = $this->Link
			          ->prepare("SELECT * FROM entrada WHERE id = ? AND Eliminado = 0");
			          

			$db->execute(array($id));
			$r = $db->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			BaseHelper::ELog($e);
		}

		return $r;
	}

	public function Registrar($data, $file = null)
	{
		try 
		{
			if(!is_null($file))
			{
				$_ext = explode('.', $file['name']);
				$_nombre = date('ymdhis') . '.' . $_ext[count($_ext) - 1];

				move_uploaded_file ( $file['tmp_name'], _BASE_FOLDER_ . 'uploads\\' . $_nombre );

				$data->Imagen = $_nombre;
			}

			$this->Link->prepare(
				"INSERT INTO entrada(Nombre, Tipo, Descripcion, Contenido, Tags, Imagen, Fecha)
				VALUES (?, ?, ?, ?, ?, ?, ?)"
			)->execute(
				array(
					$data->Nombre,
					$data->Tipo,
					$data->Descripcion, 
					$data->Contenido, 
					$data->Tags,
					$data->Imagen,
					BaseHelper::GetDateTime())
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
				"DELETE FROM categoria WHERE id = ?"
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