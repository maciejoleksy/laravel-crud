<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::creating(function (Client $client) {
            $client->uuid = Str::uuid();
        });
    }

    protected $fillable = [
        'uuid',
        'first_name',
        'last_name',
    ];

    protected $hidden = [
        'id',
    ];
}
