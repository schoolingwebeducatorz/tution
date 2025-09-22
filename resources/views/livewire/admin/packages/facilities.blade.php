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
            <i class="fa fa-plus-circle"></i> Add New Facilities
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>
                    Facilities Title
                </th>
                <th>
                    Action
                </th>
            </tr>
            <form wire:submit="save">
                <tr>
                    <td>
                        <input type="text" wire:model="title" class="form-control @error('title') error @enderror">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-save"></i></button>
                    </td>
                </tr>
            </form>
            <tr class="bg-danger">
                <th colspan="2" class="text-white"><i class="fa fa-list"></i> Facilities</th>
            </tr>
            @foreach($facilities as $facility)
            <tr>
                <td colspan="2">
                    <i class="fa fa-arrow-right"></i> {{ $facility->title }}
                    <button wie:click="delete_slot({{ $facility->id }})" class="btn btn-danger btn-sm float-right" wire:click="delete({{ $facility->id}})"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
