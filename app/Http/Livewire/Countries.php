<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Continent;
use App\Models\Country;

class Countries extends Component
{
    public $continent, $country_name,$capital_city;
    public $upd_continent, $upd_country_name, $upd_capital_city, $countryId;

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

    public function OpenEditCountryModal($id)
    {
        $country = Country::where('id', $id)->first();
        $this->upd_continent = $country->continent_id;
        $this->upd_country_name = $country->country_name;
        $this->upd_capital_city = $country->capital_city;
        $this->countryId = $country->id;
        $this->dispatchBrowserEvent('OpenEditCountryModal', ['id' => $id]);
    }

    public function update()
    {
        $countryId = $this->countryId;
        $this->validate([
            'upd_continent' => 'required',
            'upd_country_name' => 'required|unique:countries,country_name,'.$countryId, // $this->upd_country_name ?
            'upd_capital_city' => 'required',
        ],[
            'upd_continent.required'=>'You must select continent',
            'upd_country_name.required'=>'Enter country name',
            'upd_country_name.unique'=>'Country name Already Exists',
            'upd_capital_city.required'=>'Capital city require'
        ]);

        $update = Country::find($countryId)->update([
            'continent_id' => $this->upd_continent,
            'country_name' => $this->upd_country_name,
            'capital_city' => $this->upd_capital_city
        ]);

        if ($update) {
            $this->dispatchBrowserEvent('CloseEditCountryModal');
        }
    }
}
