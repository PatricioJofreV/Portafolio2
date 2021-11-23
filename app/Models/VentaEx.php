<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaEx extends Model
{
    use HasFactory;
    protected $table = 'VENTAS_EX';
    /**
     * The attributes that are mass assignable.
     * @var string[]
     */
    protected $fillable = [
        'ID_PROCESO', 'PAIS', 'ID_USUARIO',
        'FECHA_INI', 'total_venta', 'estado'
    ];
    public $timestamps = false;

}
