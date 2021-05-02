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

    public function editar($datos, $nombre){
        $editar=$this->db->table('productos');
        $editar->set($datos);

        if($editar->where('nombre',$nombre)){
            $editar->update();
        }
    }

    public function eliminar($datos){
        $eliminar=$this->db->table('productos');
        $eliminar->where($datos);
        $eliminar->delete();
    }

}