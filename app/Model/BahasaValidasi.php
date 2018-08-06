<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BahasaValidasi extends Model
{
     protected $fillable = [
        'title', 'status', 'filename'
    ];
}
