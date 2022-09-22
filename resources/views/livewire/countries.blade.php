<div>

    <div class="row mb-3 py-2">
        <div class="col-md-3">
            <label for="" class="form-label">Continent</label>
            <select wire:model="byContinent" class="form-select">
                <option value="" selected>All continents</option>
                @foreach($continents as $continent)
                    <option value="{{$continent->id}}">{{$continent->continent_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <label for="" class="form-label">Search</label>
            <input type="text" wire:model.debounce.350ms="search" class="form-control">
        </div>
        <div class="col-md-2">
            <label for="" class="form-label">Per Page</label>
            <select wire:model="perPage" class="form-select">
                <option value="5" selected>5</option>
                <option value="15">15</option>
                <option value="25">25</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="" class="form-label">Order By</label>
            <select wire:model="orderBy" class="form-select">
                <option value="country_name" selected>Country Name</option>
                <option value="capital_city" >Capital City</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="" class="form-label">Sort By</label>
            <select wire:model="sortBy" class="form-select">
                <option value="asc" selected>ASC</option>
                <option value="desc" >DESC</option>

            </select>
        </div>

    </div>

    <div class="d-flex justify-content-between">
        <div>
            <button class="btn btn-primary mb-3" wire:click="OpenAddCountryModal()" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New Country
            </button>
        </div>
        <div>
            @if($checkedCountries)
                <button class="btn btn-danger" wire:click="deleteCountries()">Selected Countries <span class="badge rounded-pill text-bg-light">{{ count($checkedCountries) }}</span> </button>
            @endif
        </div>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Check</th>
            <th scope="col">Continent</th>
            <th scope="col">Country</th>
            <th scope="col">Capital</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>

            @forelse($countries as $country)
                <tr class="{{ $this->isChecked($country->id) }}">
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-center"> <input type="checkbox" id="country-id-{{$country->id}}" value="{{ $country->id }}" wire:model="checkedCountries"> </td>
                    <td>{{ $country->continent->continent_name }}</td>
                    <td>{{ $country->country_name }}</td>
                    <td>{{ $country->capital_city }}</td>
                    <td>
                        {{-- <i class="fa fa-trash" ></i>  <i class="far fa-pencil"></i> --}}
                        <div>
                            <button class="btn btn-danger btn-sm" wire:click="deleteConfirm({{ $country->id }})"> Delete</button>
                            <button class="btn btn-primary btn-sm" wire:click="OpenEditCountryModal({{ $country->id }})"> Edit</button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td class="text-danger">No Country found</td></tr>
            @endforelse
        </tbody>
    </table>
    @if(count($countries))
        {{ $countries->links() }}
    @endif

    @include('modals.add-modal')
    @include('modals.edit-modal')
</div>
