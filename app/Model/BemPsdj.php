<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BemPsdj extends Model
{
    protected $fillable = [
        'title', 'status', 'filename'
    ];
}
