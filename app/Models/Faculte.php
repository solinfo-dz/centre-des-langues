<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
     protected $fillable=['name','faculte_id'];

    public function dpts()
    {
        return $this->hasMany(Dpt::class);
    }
}
