<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmtrPermisos extends Model
{
    //{
    protected $table = 'smtr_permiso';
    protected $fillable = ['rol_id', 'permiso_nombre'];
    public $timestamps = false;

    public function role()
    {
        return $this->belongsTo(Role::class, 'rol_id');
    }
}
