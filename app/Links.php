<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'links';
    protected $fillable = ['slug', 'redirect', 'user_id', 'clicks'];
}
