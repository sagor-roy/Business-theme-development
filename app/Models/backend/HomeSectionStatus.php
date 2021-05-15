<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSectionStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'choose',
        'offer',
        'product',
        'staff',
        'work',
        'client',
        'center_img',
        'feedback',
        'partner',
        'blog',
    ];
}
