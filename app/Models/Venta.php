<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
