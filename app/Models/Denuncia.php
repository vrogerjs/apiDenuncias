<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;

    protected $fillable = ['anonimo', 'tipopersona', 'tipodocumento', 'nrodocumento', 'apenombres', 'razonsocial', 'representante', 'domicilio', 'telefono', 'email', 'funcionario', 'cargo', 'vinculo', 'deschechos', 'documentacion', 'respuesta', 'activo', 'borrado', 'motivo_id','personal_id'];
        
    public function motivo()
    {
        return $this->belongsTo(Motivo::class);
    }

}
