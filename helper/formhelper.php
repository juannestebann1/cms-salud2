<?php
class FormHelper
{
	public $Controls = array();

	public function Input($name, $type, $required = false, $message = "Este campo es requerido.")
	{
		$input = '<input type="text" name="' . $name . '" data-required="' . ($required ? "true" : "false") . '" data-message="" />';
		$Controls[$name] = array($required, $message);

		return $input;
	}

	public function Pagination($total_paginas, $linkBase)
	{

		$input = "<nav aria-label='Page navigation example'> <ul class='pagination justify-content-center'>";

		for ($i=1; $i<=$total_paginas; $i++) {
			if ($i == 1) {
				$input .= "<li class='page-item'><a class='page-link' href='".$linkBase."'>".$i."</a></li>";
			}else{
				$input .= "<li class='page-item'><a class='page-link' href='".$linkBase."/".$i."'>".$i."</a></li>";
			}
		}

		$input .= "</ul></nav>";

		return $input;
	}
	
	public function ShowError($name)
	{
		return $Controls[$name][1];
	}
}