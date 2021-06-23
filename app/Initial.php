<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Initial extends Model
{
    public function overviews()
    {
        return $this->hasMany(Overview::class);
    }
}
