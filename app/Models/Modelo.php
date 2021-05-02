<?php namespace App\Models;

use CodeIgniter\Model;

class Modelo extends Model{

    public function listar(){
        $listar=$this->db->query("SELECT *FROM `productos`");
        return $listar->getResult();
    }

    public function insertar($datos){
        $insertar=$this->db->table('productos');
        $insertar->insert($datos);
    }

}