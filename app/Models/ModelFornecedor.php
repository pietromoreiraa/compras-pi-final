<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelFornecedor extends Model
{
    protected $table='fornecedor';
    protected $fillable=['name','email','celular'];

    public function relProduto(){
        return $this->hasMany('App\Models\ModelProduto', 'id_fornecedor');
    }
}
