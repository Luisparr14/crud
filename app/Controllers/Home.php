<?php

namespace App\Controllers;

use App\Models\Modelo;

class Home extends BaseController
{
	public function index()
	{
		$modelo= new Modelo();
		$datos=$modelo->listar();

		$info=["datos"=>$datos];

		return view('inicio', $info);
	}

	public function agregar(){
		$modelo=new Modelo();
		$datos=[
			"nombre"=> $_POST['nombre'],
			"categoria"=> $_POST['nombre'],
			"precio"=> $_POST['nombre'],
			"descripcion"=> $_POST['nombre']
		];

		$modelo->insertar($datos);

		return redirect()->to(base_url().'/');

	}

}
