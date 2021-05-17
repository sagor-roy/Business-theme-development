<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentralImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'img'
    ];
}
