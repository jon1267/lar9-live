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
        //clear values from prev save data
        $this->continent = '';
        $this->country_name = '';
        $this->capital_city = '';

        $this->dispatchBrowserEvent('OpenAddCountryModal');
    }


    public function save()
    {
        $this->validate([
            'continent' => 'required',
            'country_name' => 'required|unique:countries',
            'capital_city' => 'required',
        ]);

        $save = Country::create([
            'continent_id' => $this->continent,
            'country_name' => $this->country_name,
            'capital_city' => $this->capital_city
        ]);

        if ($save) {
            $this->dispatchBrowserEvent('CloseAddCountryModal');
        }
    }
}
