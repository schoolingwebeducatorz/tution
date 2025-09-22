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
            <i class="fa fa-money"></i> Current Month Fee's
            <div wire:loading>
                <font color="red"><b><i class="fa fa-spinner fa-spin float-right"></i></b></font>
            </div>
            <div class="btn-group float-right" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-sm btn-danger" wire:click="getstu"> All Fee's <span class="badge badge-warning">{{ $fees->count() }}</span></button>
                @foreach($countries as $country)
                <button type="button" class="btn btn-sm btn-warning active" wire:click="country({{ $country->id }})">{{ $country->location->country }}</button>
                @endforeach
            </div>
        </div>
        <table class="table table-bordered table-striped table-hover">
            @if(!empty($feesum))
            <tr class="bg-danger text-white">
                <th colspan="5" class="text-white">Total Pending Amount From {{ $location->location->country }}</th>
                <td>{{ $feesum }} {{ $location->location->code }}</td>
            </tr>
            @endif
            <tr>
                <th>Name</th>
                <th>Fee No</th>
                <th>Amount</th>
                <th>Last Day</th>
                <th>Method</th>
                <th>Action</th>
            </tr>
            @if($fees->count() > 0)
            @foreach($fees as $fee)
            <tr>
                <td>{{ $fee->student->name }}</td>
                <td>{{ $fee->no }}</td>
                <td>
                    <span class="badge badge-danger"> {{ $fee->amount }} {{ $fee->country->location->code }} </span>
                </td>
                <td>
                    <small>{{ $fee->last_date }}</small> <br />
                    @if($fee->status == "unpaid")
                        <input type="date" class="form-control @error('lastday') error @enderror form-control-sm" wire:model="lastday" data-toggle="tooltip" data-placement="top" title="{{ $fee->last_date }}" />
                    @else 
                        {{ ucfirst($fee->last_date) }}
                    @endif
                </td>
                <td>
                    <small>Payment Method</small> <br />
                    @if($fee->status == "unpaid")
                    <input type="text" class="form-control @error('method') error @enderror form-control-sm" wire:model="method" />
                    @else 
                    <span>{{ ucfirst($fee->method) }}<span>
                    @endif
                </td>
                <td>
                    <br />
                    @if($fee->status == "unpaid")
                        <button wire:click="update({{ $fee->id }})" class="btn btn-sm btn-info">
                            Update
                        </button>
                        <button wire:click="paid({{ $fee->id }})" class="btn btn-sm btn-danger">Paid</button>
                    @else 
                        <span class="badge badge-success">{{ ucfirst($fee->status) }}<span>
                    @endif
                </td>
            </tr>
            @endforeach
            @else 
            <tr class="text-center">
                <td> No Record Found </td>
            </tr>
            @endif
        </table>

    </div>
</div>
