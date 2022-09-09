<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dpt extends Model
{
    protected $fillable=['name','faculte_id'];


         public function faculte()
    {
        return $this->belongsTo(Faculte::class);
    }
}
