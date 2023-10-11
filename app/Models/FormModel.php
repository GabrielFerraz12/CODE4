<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model {

    protected $table = 'tb_contato';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'email', 'telefone', 'mensagem'];

    // public function delete() {
    //     $query = $builder->select('id')->where('mensagem', $mensagem)->get();
    // }

}
