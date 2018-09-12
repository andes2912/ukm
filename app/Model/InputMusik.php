<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InputMusik extends Model
{
    protected $fillable = [
        'title','user','status','filename'
    ]; 
}
