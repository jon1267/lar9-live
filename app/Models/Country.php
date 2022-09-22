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

    public function scopeSearch($query, $term)
    {
        $term = '%'.$term.'%';
        $query->where(function ($query) use ($term) {
            $query->where('country_name', 'like', $term)
                ->orWhere('capital_city', 'like', $term);
        });
    }
}
