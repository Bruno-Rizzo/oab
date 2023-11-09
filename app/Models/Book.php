<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'adv_name',
        'oab_number',
        'date',
        'entrance',
        'exit',
        'prisioner',
        'user_id',
        'prisional_unit_id'
    ];

    protected $casts = [
        'prisioner' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prisionalUnit()
    {
        return $this->belongsTo(PrisionalUnit::class);
    }
}

