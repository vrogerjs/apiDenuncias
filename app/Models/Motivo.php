<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'activo', 'borrado'];
    
    public function denuncias()
    {
        return $this->hasMany(Denuncia::class);
    }

}
