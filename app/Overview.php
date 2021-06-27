<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Overview extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','initial_id', 'short_body', 'long_body'];
}
