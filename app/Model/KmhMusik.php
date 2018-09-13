<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KmhMusik extends Model
{
    protected $fillable = [
        'title','status', 'filename'
    ];
}
