<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapping extends Model
{
    protected $table = 'links';
    protected $fillable = ['slug', 'redirect'];
}
