<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Continent;
use App\Models\Country;

class Countries extends Component
{
    public $continent, $country_name,$capital_city;

    public function render()
    {
        return view('livewire.countries', [
            'continents' => Continent::orderBy('continent_name','asc')->get(),
            'countries' => Country::orderBy('country_name', 'asc')->get(),
        ]);
    }

    public function OpenAddCountryModal()
    {
        $this->dispatchBrowserEvent('OpenAddCountryModal');
    }


    public function save()
    {
        $this->validate([

        ]);
    }
}
