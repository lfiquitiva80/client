<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    use HasFactory;

    protected $table = 'MTRUTAS';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'CODRUTA',
            'NOMBRE',
            'STADSINCRO'

         

    ];

    public $timestamps = false;
}
