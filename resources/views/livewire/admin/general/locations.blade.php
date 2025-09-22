<div>
    @include('includes.flash')
    <div class="card card-primary">
        <div class="card-header">
            <b> <i class="fa fa-plus-square"></i> Add Country </b>
        </div>
        <form wire:submit="save">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th><input type="file" wire:model="photo" /></th>
                    <th>Select Country</th>
                    <th>What's App</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>
                        @error('photo') <span class="error">{{ $message }}</span> @enderror
                        @if ($photo)
                            Photo Preview:
                            <img src="{{ $photo->temporaryUrl() }}" height="40px">
                        @endif
                    </td>
                    <td>
                        <select wire:model="country" class="form-control  @error('country') error @enderror">
                            <option value="">Select Country</option>
                            @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->country }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="text" wire:model="whatsapp" placeholder="Enter Here What's App"  class="form-control @error('whatsapp') error @enderror" name="whatsapp" />
                    </td>
                    <td>
                        <input type="email" wire:model="email" placeholder="Enter Here Email" class="form-control @error('email') error @enderror" name="email" />
                    </td>
                    <td>
                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i></button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <b> <i class="fa fa-globe"></i> Countries </b>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Name</th>
                <th>Currency</th>
                <th>Whats App</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach($locations as $location)
            <tr>
                <td> <img src="https://tution.asadmukhtar.info/storage/app/public/country/{{ $location->photo }}" height="15px" /> {{ $location->location->country }}</td>
                <td>{{ $location->location->currency }} - {{ $location->location->symbol }} </td>
                <td>{{ $location->whatsapp }}</td>
                <td>{{ $location->email }}</td>
                <td>
                    <button wire:click="delete({{ $location->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
