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
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

            @forelse($countries as $country)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $country->continent->continent_name }}</td>
                    <td>{{ $country->country_name }}</td>
                    <td>{{ $country->capital_city }}</td>
                    <td>
                        {{--<div class="btn-group">--}}
                        {{-- <i class="fa fa-trash" ></i>  <i class="far fa-pencil"></i> --}}
                        <div>
                            <button class="btn btn-danger btn-sm">Delete</button>
                            <button class="btn btn-primary btn-sm" wire:click="OpenEditCountryModal({{ $country->id }})">Edit</button>
                        </div>
                        {{--</div>--}}
                    </td>
                </tr>
            @empty
                <tr><td>No Country found</td></tr>
            @endforelse
        </tbody>
    </table>

    @include('modals.add-modal')
    @include('modals.edit-modal')
</div>
