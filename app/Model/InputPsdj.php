<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InputPsdj extends Model
{
    protected $fillable = [
        'title','status','user','filename'
    ];
}
