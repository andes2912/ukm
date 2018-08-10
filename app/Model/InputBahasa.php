<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InputBahasa extends Model
{
    protected $fillable = [
        'title', 'status', 'filename'
    ];
}
