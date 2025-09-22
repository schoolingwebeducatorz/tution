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
    <div class="card-header bg-danger text-white">
        <i class="fa fa-money"></i> Memberhsips
    </div>
    @foreach($packages as $package)
    <table class="table table-bordered table-hover table-striped">
        <tr class="bg-defualt">
            <th colspan="5">
               <i class="fa fa-money"></i> {{ $package->cpackage->title }}
               <button class="btn btn-warning btn-sm float-right" wire:click="delete($package->id)"><i class="fa fa-trash"></i></butotn>
            </th>
        </tr>
        <tr>
            <th>Title</th>
            <th>Regular Price</th>
            <th>Discount</th>
            <th>Price</th>
            <th>Country</th>
        </tr>
        <tr>
            <td>{{ $package->title }}</td>
            <td>{{ $package->regularprice }} {{ $package->country->location->code }}</td>
            <td>{{ $package->discount }}%</td>
            <td>{{ $package->price }} {{ $package->country->location->code }}</td>
            <td>{{ $package->country->location->country }}</td>
        </tr>
    </table>
    @endforeach
  </div>
</div>
