<?php

namespace App\Models\Areas;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    
    protected $table = 'SMTR_AREA';
    protected $primaryKey = 'N_ID_AREA';
    public $timestamps = false;

    protected $fillable = [
        'N_ID_AREA',
        'NOMBRE',
        'DESCRIPCION'
    ];
}
