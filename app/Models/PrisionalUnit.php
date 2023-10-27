<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrisionalUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'acronym'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

}
