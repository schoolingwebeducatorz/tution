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
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-sm btn-danger" wire:click="getstu"> All Students <span class="badge badge-warning">{{ $students->count() }}</span></button>
        @foreach($countries as $country)
        <button type="button" class="btn btn-sm btn-warning active" wire:click="country({{ $country->id }})">{{ $country->location->country }}</button>
        @endforeach
    </div>
    <div class="card mt-1">
        <div class="card-header">
            <i class="fa fa-users"></i> All Students 
            <div wire:loading class="float-right">
                <font color="red"><b><i class="fa fa-spinner fa-spin float-right"></i></b></font>
            </div>
        </div>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th> <i class="fa fa-user-circle"></i> Name</th>
                <th> <i class="fa fa-envelope"></i> Email</th>
                <th> <i class="fa fa-whatsapp"></i> Whats App</th>
                <th> <i class="fa fa-globe"></i> Country</th>
                <th> <i class="fa fa-arrow-right"></i> Action</th>
            </tr>
            @if($students->count() > 0)
                @foreach($students as $student)
                <tr>
                    <td>{{ ucfirst($student->name) }}</td>
                    <td>{{ ucfirst($student->email) }}</td>
                    <td>{{ ucfirst($student->whatsapp) }}</td>
                    <td>{{ $student->country->location->country }}</td>
                    <td>
                        <a href="{{ route('admin.studentsprofile',$student->id) }}">
                            <button class="btn btn-info btn-sm"> <i class="fa fa-user-circle"></i> Profile</button>
                        </a>
                        <button class="btn btn-danger btn-sm"  wire:confirm="Are you sure? You want to delete Student? All information of related student will be deleted." wire:click="delete({{ $student->id }})"> <i class="fa fa-trash"></i> Delete </button>
                    </td>
                </tr>
                @endforeach
            @else 
            <tr>
                <td colspan="5" class="text-center">
                    No Record Found
                </td>
            </tr>
            @endif
        </table>
    </div>
</div>
