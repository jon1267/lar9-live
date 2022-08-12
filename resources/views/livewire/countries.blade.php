

<div>
    <button class="btn btn-primary btn-sm mb-3" wire:click="OpenAddCountryModal()" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New Country
    </button>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Continent</th>
            <th scope="col">Country</th>
            <th scope="col">Capital</th>
        </tr>
        </thead>
        <tbody>

            @forelse($countries as $country)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $country->continent->continent_name }}</td>
                    <td>{{ $country->country_name }}</td>
                    <td>{{ $country->capital_city }}</td>
                </tr>
            @empty
                <tr><td>No Country found</td></tr>
            @endforelse
        </tbody>
    </table>

    @include('modals.add-modal')
</div>
