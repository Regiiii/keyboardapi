<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    protected $table = 'keyboard';
    protected $fillable = ['brand','switches','name','rgb','wireless'];
}
