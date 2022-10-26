<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Arquivo extends Model
{
    use HasFactory;

    public function produto()
    {
        return $this->hasOne(Produto::class, 'id', 'produto_id');
    }
}

