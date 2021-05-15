<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_icon',
        'f_link',
        's_icon',
        's_link',
        't_icon',
        't_link',
        'fo_icon',
        'fo_link',
    ];
}
