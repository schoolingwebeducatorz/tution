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
    @if($lecture->count() == 0)
    <button class="btn btn-sm btn-info" wire:click="generate"> <i class="fa fa-play-circle"></i> Generate Recording's <i wire:loading class="fa fa-spinner fa-spin"></i> </button>
    @endif
    <div class="card">
        <div class="card-header text-white bg-danger">
            <i class="fa fa-calendar"></i> Today Schedule <badge class="badge badge-warning float-right"> <i class="fa fa-calendar"></i> {{ $dbday->day }} {{ date('d/m/y') }}</badge> 
        </div>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th colspan="2">Time Slot</th>
            </tr>
            @foreach($dbday->slot as $slot)
            <tr>
                <td>{{ date('h:i:s a', strtotime($slot->timetable->start)) }}  -  {{ date('h:i:s a', strtotime($slot->timetable->end)) }}</td>
                @if($slot->enrollschedule->count())
                <td>
                    @foreach($slot->enrollschedule as $meeting)
                    <button class="btn btn-sm btn-info" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="Trainer"
    data-content="{{ $meeting->enrollment->trainer->name }}"> <i class="fa fa-clock-o"></i> {{ $meeting->enrollment->student->name }}</button>
                    @endforeach
                </td>
                @else 
                <td>
                    No Lecture on this slot
                </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</div>
