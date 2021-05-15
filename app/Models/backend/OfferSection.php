<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'head',
        'text',
        'sub_head',
        'img',
        'icon',
        'content',
    ];
}
