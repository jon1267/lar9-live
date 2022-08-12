<!-- Modal   data-keyboard="false" data-backdrop="static" -->
<div class="modal fade addCountry" wire:ignore.self id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new Country</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="save" id="continent-country-city" >
                <div class="modal-body">

                    <div>
                        <label for="continent-select">Continent</label>
                        <select class="form-select" id="continent-select" wire:model="continent">
                            <option value="">No selected</option>
                            @foreach($continents as $continent)
                                <option value="{{ $continent->id }}">{{ $continent->continent_name }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">@error('continent'){{ $message }}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="country-name">Country Name</label>
                        <input type="text" class="form-control" id="country-name" placeholder="Country name" wire:model="country_name">
                        <div class="text-danger">@error('country_name'){{ $message }}@enderror</div>
                    </div>
                    <div class="mt-3">
                        <label for="capital-city">Capital City</label>
                        <input type="text" class="form-control" id="capital-city" placeholder="Capital City" wire:model="capital_city">
                        <div class="text-danger">@error('capital_city'){{ $message }}@enderror</div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
