<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frutas extends Model
{
    use HasFactory;
    
    protected $table = 'FRUTAS';

    /**
     * The attributes that are mass assignable.
     * @var string[]
     */
    protected $fillable = [
        'frutas'
    ];

    public $timestamps = false;
}
