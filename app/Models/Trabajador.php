<?php

// Define que esta clase pertenece al namespace App\Models (organización de código)
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'SMTR_TRABAJADOR';
    protected $primaryKey = 'N_ID_TRABAJADOR';
    public $timestamps = false;
}
