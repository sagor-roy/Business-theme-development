<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMesssage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'sun',
        'message',
    ];
}
