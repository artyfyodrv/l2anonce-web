<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'host',
        'chronicles',
        'rates',
        'open_date',
        'is_visible',
        'is_deleted',
    ];
}
