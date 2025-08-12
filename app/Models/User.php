<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'rol_id', // ← Agregar esta línea
    ];

    // ... resto del código igual

    // Agregar estas relaciones y métodos:
    public function role()
    {
        return $this->belongsTo(Roles::class, 'rol_id');
    }

    public function isAdmin()
    {
        return $this->rol_id == 1;
    }

    public function isSupervisor()
    {
        return $this->rol_id == 2;
    }

    public function isTrabajador()
    {
        return $this->rol_id == 3;
    }

    public function hasPermission($permission)
    {
        return $this->role?->permissions()?->where('permiso_nombre', $permission)->exists() ?? false;
    }
}