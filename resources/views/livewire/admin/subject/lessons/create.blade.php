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
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center justify-content-start">
            <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
            <span><strong>Try Again !</strong>  {{ session('error') }} </span>
        </div><!-- d-flex -->
        </div><!-- alert -->
    @endif
    <div class="card">
        <div class="card-header">
            <i class="fa fa-plus-circle"></i> Create New Lesson  For {{ $grade->title }}
        </div>
        <form wire:submit="save">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Lesson Title</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" wire:model="title" class="form-control @error('title') error @enderror">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-save"></i> </button>
                    </td>
                <tr>
            </table>
        </form>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
            @foreach($lessons as $lesson)
            <tr>
                <td>{{ $lesson->title }}</td>
                <td>
                    <button class="btn btn-danger" wire:click="delete({{ $lesson->id }})"><i class="fa fa-trash"></i></button>
                </td>
            <tr>
            @endforeach
        </table>
    </div>
</div>
