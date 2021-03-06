<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'size',
        'number_signature',
        'responsable_signature',
        'pages_quanties'
    ];
}
