<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    use HasFactory;

    protected $table = 'TRANSPORTISTA';

    /**
     * The attributes that are mass assignable.
     * @var string[]
     */
    protected $fillable = [
        'id',
        'patente',
        'tipo_trans'
    ];

    public $timestamps = false;
}
