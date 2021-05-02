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
}
