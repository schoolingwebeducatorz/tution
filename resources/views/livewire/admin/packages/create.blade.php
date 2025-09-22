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
    <button class="btn btn-danger btn-sm" wire:click="decreament()">  <i class="fa fa-arrow-left"></i> Previous</button>
    <button class="btn btn-danger btn-sm float-right" wire:click="increment()">Next <i class="fa fa-arrow-right"></i> </button>
    <form wire:submit="save">
        <br />
        <div class="card" @if($n == 1) style="display:normal;" @else style="display:none;" @endif>
            <div class="card-header">
                <i class="fa fa-plus-circle"></i> New Criteria Details
            </div>
            <div class="card-body">            
                <div>
                        <div class="form-group">
                            <label for="">Select Country</label>
                            <select name="" class="form-control @error('country') error @enderror" wire:change="membership" wire:model="country" id="">
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->location->country }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Select Memberhsip Group</label>
                            <select name="" class="form-control @error('memberships') error @enderror" wire:model="s" id="">
                                <option value="">Select Subject</option>
                                @foreach($memberships as $membership)
                                <option value="{{ $membership->id }}">{{ $membership->title }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
            </div>
        </div>
        <div class="card mt-2" @if($n==2) style="display:normal;" @else style="display:none;" @endif>
            <div class="card-header">
                <i class="fa fa-plus-circle"></i> New Package Details
            </div>
            <div class="card-body">            
                <div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control @error('title') error @enderror" wire:model="title">
                        </div>
                        <div class="form-group">
                            <label for="">Regular Price</label>
                            <input type="number" class="form-control @error('regularprice') error @enderror" wire:model="regularprice">
                        </div>
                        <div class="form-group">
                            <label for="">Discount</label>
                            <input type="number" class="form-control @error('discount') error @enderror" wire:change="dis" wire:model="discount">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" class="form-control @error('price') error @enderror" wire:model="price" disabled>
                            <br />
                        </div>
                        <div class="form-group">
                            <label><b>Select Facilities </b></label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control @error('fac') error @enderror" wire:model="fac" style="resize:none"></textarea>
                        </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-danger btn-sm float-right"><i class="fa fa-save"></i> Publish</button>
            </div>
        </div>
    </form>
</div>
