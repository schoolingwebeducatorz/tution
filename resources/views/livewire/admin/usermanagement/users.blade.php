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
            <i class="fa fa-users"></i> All Users
        </div>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>Diplsay</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>
                    <img src="{{ asset('storage/app/public/profile') }}/{{ $user->photo }}" class="wd-32 rounded-circle" alt="">
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ ucfirst($user->gender) }}</td>
                <td>
                    @if($user->status == 1)
                    <button class="btn btn-danger btn-sm" wire:confirm="Are you user you want to disable user" wire:click="disable({{ $user->id }})">Disable</button>
                    @else 
                    <button class="btn btn-success btn-sm" wire:confirm="Are you user you want to enable user" wire:click="enable({{ $user->id }})">Enable</button>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
