<?php namespace App\Models;

use CodeIgniter\Model;

class usuariosModel extends Model {

    protected $table = 'user';
    protected $allowedFields = ['uuid', 'email','senha','nome', 'estado', 'cidade', 'rua', 'numero', 'cep', 'telefone'];

    public function listar($id = null){
        if ($id === null) {
            return $this->findAll();   
        }

        return $this->asArray()->where(['uuid' => $id])->first();
    }

}