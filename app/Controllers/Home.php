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

	public function verEditar()
	{
		$modelo= new Modelo();
		$datos=$modelo->listar();

		$info=["datos"=>$datos];

		return view('editar', $info);
	}
	public function verEliminar()
	{
		$modelo= new Modelo();
		$datos=$modelo->listar();

		$info=["datos"=>$datos];

		return view('eliminar', $info);
	}

	public function agregar(){
		$modelo=new Modelo();
		$datos=[
			"nombre"=> $_POST['nombre'],
			"categoria"=> $_POST['categoria'],
			"precio"=> $_POST['precio'],
			"descripcion"=> $_POST['descripcion']
		];

		$modelo->insertar($datos);

		return redirect()->to(base_url().'/');

	}

	public function editar(){
		$modelo=new Modelo();
		$datos=[
			"categoria"=>$_POST['categoria'],
			"precio"=>$_POST['precio'],
			"descripcion"=>$_POST['descripcion']
		];

		$nombre=$_POST['nombre'];

		$modelo->editar($datos,$nombre);		

		return redirect()->to(base_url().'/');
	}

	public function eliminar(){
		$modelo=new Modelo();
		$datos=["nombre"=>$_POST['nombre']];
		$modelo->eliminar($datos);
		return redirect()->to(base_url().'/');
	}

}
