<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    use HasFactory;
    
    protected $table = 'PRODUCTOR';

    /**
     * The attributes that are mass assignable.
     * @var string[]
     */
    protected $fillable = [
        'id',
        'calidad',
        'vigencia',
        'fecha_finv'
    ];

    public $timestamps = false;
}
