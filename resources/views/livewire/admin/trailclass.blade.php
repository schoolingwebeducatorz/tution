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
                                <span><strong>Deleted !</strong>  {{ session('error') }} </span>
                            </div><!-- d-flex -->
                            </div><!-- alert -->
                        @endif
    <div class="card">
    <div class="card-header">
        <i class="fa fa-user-plus"></i> Trail Class Request
        <div class="float-right" wire:loading>
            <font color="red">
                <span class="fa fa-spinner fa-spin"></span>
            </font>
        </div>
    </div>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>What's App</th>
            <th>Country</th>
            <th>Grade</th>
            <th>Slot</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($trailrequests as $trailrequest)
        <tr>
            <td>{{ $trailrequest->name }}</td>
            <td>{{ $trailrequest->email }}</td>
            <td>{{ $trailrequest->whatsapp }}</td>
            <td>{{ $trailrequest->country->location->country }}</td>
            <td>{{ $trailrequest->grade }}</td>
            <td>
            @php
            $timetable = $trailrequest->timetable;
            @endphp
            {{ date('h:i:s a', strtotime($timetable->start)) }}  -  {{ date('h:i:s a', strtotime($timetable->end)) }}
            </td>
            <td>{{ $trailrequest->traildate }}</td>
            <td>
                @if($trailrequest->status == 0)
                <span class="badge badge-success">New</span>
                @else 
                <span class="badge badge-danger">Approved</span>
                @endif
            </td>
            <td>
                @if($trailrequest->status == 0)
                <button class="btn btn-success btn-sm" wire:click="approved({{ $trailrequest->id }})">Approved</button>
                @else 
                <button class="btn btn-danger btn-sm" wire:click="delete({{ $trailrequest->id }})">Delete</button>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
