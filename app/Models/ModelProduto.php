<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProduto extends Model
{
    protected $table='produto';
    protected $fillable=['name','id_user','price','id_fornecedor'];

    public function relUsers()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }

    public function relFornecedor(){
        return $this->hasOne('App\Models\ModelFornecedor', 'id', 'id_fornecedor');
    }

    public function relSolicitacao(){
        return $this->hasMany('App\Models\ModelSolicitacao', 'id_fornecedor');
    }
}
