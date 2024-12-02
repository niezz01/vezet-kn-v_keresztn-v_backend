<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    public $timestamps = false;
    public $table = 'kategoriak';

    public function ingatlan()
    {
        return $this->hasMany(Ingatlan::class);
    }
}
