<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelProspectoHanDuq extends Model
{
    use HasFactory;

    protected $table = 'RelProspectoHanDuq';

        protected $fillable = [
                        'NIT',
                        'Handy'
    ];

    public $timestamps = false;

    
}
