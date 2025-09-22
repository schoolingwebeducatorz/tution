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
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-clock-o"></i> Create Time
                </div>
                <table class="table table-bordered table-striped table-hover">
                <form wire:submit="save_time">
                    <tr>
                        <th>Start</th>
                        <th>End</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="time" class="form-control @error('start') error @enderror" wire:model="start">
                        </td>
                        <td>
                            <input type="time" class="form-control @error('end') error @enderror" wire:model="end">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i></button>
                        </td>
                    </tr>
                    @foreach($slots as $slot)
                    <tr>
                        <td>
                        {{ date('h:i:s a', strtotime($slot->start)) }} 
                        </td>
                        <td>
                        {{ date('h:i:s a', strtotime($slot->end)) }} 
                        </td>
                        <td>
                            <button type="button" wire:click="delete_slot( {{ $slot->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </form>
                </table>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-calendar"></i> Create Day
                </div>
                <table class="table table-bordered table-striped table-hover">
                    <form wire:submit="save_day">
                    <tr>
                        <th>Start</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>
                            <input type=text" class="form-control @error('day') error @enderror" wire:model="day">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save"></i></button>
                        </td>
                    </tr>
                    </form>
                    @foreach($days as $day)
                    <tr>
                        <td>
                            {{ $day->day }}
                        </td>
                        <td>
                            <button type="button" wire:click="delete_day({{ $day->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
