<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeenMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'cont_id',
        'name',
        'email',
        'sun',
        'message',
    ];
}
