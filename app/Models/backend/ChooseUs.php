<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChooseUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'head',
        'text',
    ];
}
