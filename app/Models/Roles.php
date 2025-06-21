<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = ['nombre'];

    public function users()
    {
        return $this->hasMany(User::class, 'rol_id');
    }

    public function permissions()
    {
        return $this->hasMany(SmtrPermiso::class, 'rol_id');
    }

}
