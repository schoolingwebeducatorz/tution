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
    <br />
    @error('topic')
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center justify-content-start">
            <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
            <span><strong>required !</strong>  {{ $message }} </span>
        </div><!-- d-flex -->
        </div><!-- alert -->
    @enderror
    @error('link')
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center justify-content-start">
            <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
            <span><strong>required !</strong>  {{ $message }} </span>
        </div><!-- d-flex -->
        </div><!-- alert -->
    @enderror
    @error('matrial')
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center justify-content-start">
            <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
            <span><strong>required !</strong>  {{ $message }} </span>
        </div><!-- d-flex -->
        </div><!-- alert -->
    @enderror
    <div class="card">
        <div class="card-header bg-danger text-white">
            <i class="fa fa-microphone"></i> Pending Recordings
            <span wire:loading class="fa fa-spin fa-spinner float-right"></span>
        </div>
            @php
                $i = 1;
            @endphp
            @foreach($lectures as $lecture)
                @if($lecture->topic == null && $lecture->link == null)
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th colspan="7" class="bg-info text-white">
                        <i class="fa fa-hand-o-right"></i> Recording # {{ $i++ }}
                        <span class="badge badge-danger float-right">#lec{{ $lecture->id }}</span>
                        </th>
                    </tr>
                    <tr class="bg-warning text-white">
                        <th> <i class="fa fa-user"></i> Student Name</th>
                        <th> <i class="fa fa-list"></i> Subject</th>
                        <th> <i class="fa fa-user-circle"></i> Tainer</th>
                        <th> <i class="fa fa-pencil"></i> Topic</th>
                        <th> <i class="fa fa-link"></i> Link</th>
                        <th> <i class="fa fa-calendar"></i> Date</th>
                        <th> <i class="fa fa-arrow-down"></i> Action</th>
                    </tr>
                    <tr>
                        <td>{{ $lecture->enrollment->student->name }}</td>
                        <td>{{ $lecture->enrollment->subject->title }}</td>
                        <td>{{ $lecture->enrollment->trainer->name }}</td>
                        <td>
                            <input type="text" class="form-control" wire:model="topic" />
                        </td>
                        <td>
                            <input type="text" class="form-control" wire:model="link" />
                        </td>
                        <td>
                            {{ $lecture->lecturedate }}
                        </td>
                        <td>
                            <button wire:click="save({{ $lecture->id }})" class="btn btn-success btn-sm"><i class="fa fa-save"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th> <i class="fa fa-desktop"></i> Board Link <font color="red">(optional)</font> </th>
                        <td colspan="2">
                            <input type="text" class="form-control" wire:model="board" />
                        </td>
                        <th>
                        <i class="fa fa-file"></i> Matrial File <font color="red">(optional)</font>
                        </th>
                        <td colspan="2">
                            <input type="file" wire:model="matrial" />
                        </td>
                        <td>
                            <button wire:click="delete({{ $lecture->id }})" wire:confirm="Are you sure? you want to delete lectue"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </tD>
                    </tr>
                </table>
                @endif
            @endforeach
    </div>
</div>
