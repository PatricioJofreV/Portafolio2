<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table = 'ROLES';

    /**
     * The attributes that are mass assignable.
     * @var string[]
     */
    public $timestamps = false;
}
