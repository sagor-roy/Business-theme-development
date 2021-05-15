<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'head',
        'text',
        'name',
        'prof',
        'img',
        'fb',
        'insta',
        'twit',
        'link',
        'pin',
        'you',
    ];
}
