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
            <span><strong>Alert !</strong>  {{ session('delete') }} </span>
        </div><!-- d-flex -->
        </div><!-- alert -->
    @endif
   <div class="card">
    <div class="card-header">
        <i class="fa fa-user-plus"></i> Create New Trainer
    </div>
    <div class="card-body">
        <form wire:submit="save">
            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" wire:model="name" class="form-control @error('name') error @enderror">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" wire:model="email" class="form-control @error('email') error @enderror">
            </div>
            <div class="form-group">
                <label for="">What's App</label>
                <input type="text" wire:model="whatsapp" class="form-control @error('whatsapp') error @enderror">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" wire:model="address" class="form-control @error('address') error @enderror">
            </div>
            <div class="form-group">
                <label for="">Gender</label> <br />
                Male
                <input type="radio" name="gender" value="male" wire:model="gender" />
                Female
                <input type="radio" name="gender" value="female" wire:model="gender" />
                @error('gender') 
                    <font color="red"><b>{{ $message }}</b></font>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Upload Picture</label> <br />
                <input type="file" wire:model="img" />
                @error('img') 
                <font color="red">
                    <b>
                        {{ $message }}
                    </b>
                </font>
                @enderror
            </div>
            <div class="form-group">
                <label for=""><b> He/She Can Teach .. </b> </label>
                <div class="row">
                    @foreach ($subjects as $index => $subject)
                        <div class="col-lg-3">
                            <ul class="list-group mt-1">
                                <li class="list-group-item">
                                    <input type="checkbox" name="subject[{{$index}}][$subject]" wire:model="subject.{{ $subject->id }}" /> {{ ucfirst($subject->subject) }}
                                </li>
                            </ul>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn  btn-danger float-right">
                    <div>
                        <i class="fa fa-spinner fa-spin"></i>
                        Create Trainer
                    </div> 
                </button>
            </div>
        </form>
    </div>
   </div> {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
</div>
