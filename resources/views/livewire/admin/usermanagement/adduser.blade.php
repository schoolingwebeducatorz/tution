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
    <form wire:submit="create">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body" style="height:250px;">
                    @if ($photo)
                        <img src="{{ $photo->temporaryUrl() }}" width="100%" height="100%">
                    @endif
                </div>
                <div class="card-footer">
                    Upload Profile Picture 
                    <input type="file" wire:model="photo">
                    @error('photo')
                    <font color="red">{{ $message }}</font>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user"></i> Add User
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control @error('name') error @enderror" wire:model="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control @error('email') error @enderror" wire:model="email">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select wire:model="gender" id="" class="form-control @error('gender') error @enderror">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="male">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control @error('password') error @enderror" wire:model="password">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger btn-sm float-right" type="submit"> <i class="fa fa-user-plus"></i> Create User</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
