<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['cliente_id', 'total', 'status', 'data_pedido'];

    public function produtos()
    {
        return $this->belongsToMany('App\Produto', 'pedidos_produtos')->withPivot('created_at','quantidade','id');
    }
}
