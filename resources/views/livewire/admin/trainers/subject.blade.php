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
            <i class="fa fa-plus-circle"></i> Create New Subject For Trainer
        </div>
        <table class="table table-bordered table-hover table.striped">
            <tr>
                <th>Subject Title</th>
                <th>Action</th>
            </tr>
            <form wire:submit="save">
                <tr>
                    <td>
                        <input type="text" class="form-control @error('title') error @enderror" wire:model="title">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-info btn-danger"><i class="fa fa-save"></i></button>
                    </td>
                </tr>
            </form>
            @foreach($subjects as $subject)
            <tr>
                <td>{{ $subject->subject }}</td>
                <td>
                    <button wire:click="delete({{ $subject->id }})" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
