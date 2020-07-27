<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelSolicitacao extends Model
{
    protected $table='solicitacaos';
    protected $fillable=['item','tipo','descricao','qtdUni','unidade','tipoUni','id_produto'];

    public function relProduto(){
        return $this->hasOne('App\Models\ModelProduto', 'id', 'id_produto');
    }
}

