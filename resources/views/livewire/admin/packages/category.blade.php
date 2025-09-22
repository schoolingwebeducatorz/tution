<div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-flex align-items-center justify-content-start">
                <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                <span><strong>Well done!</strong>  {{ session('message') }} </span>
            </div><!-- d-flex -->
        </div><!-- alert -->
    @endif
    @if (session()->has('delete'))
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center justify-content-start">
            <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
            <span><strong>Deleted !</strong>  {{ session('delete') }} </span>
        </div><!-- d-flex -->
        </div><!-- alert -->
    @endif
    <div class="card">
        <div class="card-header">
            <i class="fa fa-plus-circle"></i> Create Membership Group
        </div>
        <form wire:submit="save">
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th> <i class="fa fa-pencil"></i> Title For Membership Group</th>
                <th> <i class="fa fa-globe"></i> Select Country</th>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control @error('title') error @enderror" wire:model="title" >
                </td>
                <td>
                    <select name="" id="" class="form-control @error('country') error @enderror" wire:model="country">
                        <option value="">Select Country</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->location->country }}</option>
                        @endforeach
                    </select>
                </td>   
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-danger btn-sm float-right"><i class="fa fa-save"></i> Publish </button>
                </td>
            </tr>
        </table>
        </form>
        <table class="table table-bordered table-striped table-hover">
            <tr class="bg-danger">
                <th class="text-white" colspan="3"> <i class="fa fa-money"></i> Membership</th>
            </tr>
            <tr>
                <th>
                    Member Ship Title
                </th>
                <th>Country</th>
                <th>Action</th>
            </tr>
            @foreach($packages as $package)
            <tr>
                <td>
                    {{ $package->title }}
                </td>
                <td>
                    {{ $package->country->location->country }}
                </td>
                <td>
                    <button wire:click="delete({{ $package->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
