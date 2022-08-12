<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function continent()
    {
        //countries table has key 'continent_id' && continents table - 'id'(owner key)
        return $this->belongsTo(Continent::class, 'continent_id', 'id');
    }
}
