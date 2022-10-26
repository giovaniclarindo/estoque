<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Produto extends Model
{
    use HasFactory;
    
    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function pedido()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_produtos');
    }

    public function arquivos()
    {
        return $this->hasMany(Arquivo::class, 'produto_id', 'id');
    }
}
