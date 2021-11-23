<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'USUARIOS';
    /**
     * The attributes that are mass assignable.
     * @var string[]
     */
    protected $fillable = [
        'correo', 'contraseña',
        'id_rol', 'nombre',
        'apellido', 'rut'
    ];
    public $timestamps = false;
    protected $hidden = [
        'contraseña'
    ];
}
