<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

   protected $fillable = [
        'name',
        'email',
        'identify',
        'password',
        'role_id',
        'prisional_unit_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

   protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function prisionalUnit()
    {
        return $this->belongsTo(PrisionalUnit::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }



}
