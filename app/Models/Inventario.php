<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'INVENTARIO';

    /**
     * The attributes that are mass assignable.
     * @var string[]
     */
    protected $fillable = [
        'nombre',
        'fruta'
    ];

    public $timestamps = false;
}
