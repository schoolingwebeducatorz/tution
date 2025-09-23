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
            <span><strong>Warning !</strong>  {{ session('delete') }} </span>
        </div><!-- d-flex -->
        </div><!-- alert -->
    @endif
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user-circle"></i> Details
                </div>
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Name</th>
                        <td>{{ $student->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $student->email }}</td>
                    </tr>
                    <tr>
                        <th>What's App</th>
                        <td>{{ $student->whatsapp }}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{ $student->country->location->country }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="card mt-1">
        <div class="card-header">
            <i class="fa fa-list"></i> Enrollments
        </div>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>Subject</th>
                <th>Grade</th>
                <th>Classes</th>
                <th>Fee</th>
                <th>Trainer</th>
                <th>Action</th>
            </tr>
            @foreach($student->enrollment as $enrollment)
            <tr>
                <td>{{ $enrollment->subject->title ?? 'null' }}</td>
                <td>{{ $enrollment->grade->title ?? 'null' }}</td>
                <td>{{ $enrollment->ciaw ?? 'null' }}</td>
                <td>
                    {{ $enrollment->amount ?? 'null' }} 
                    {{ $enrollment->country->location->code ?? 'null' }}
                </td>
                <td>
                    @if(!empty($enrollment->trainer_id) && !empty($enrollment->trainer->name))
                        {{ $enrollment->trainer->name }}
                    @else 
                        <span class="badge badge-info">No Trainer</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('assign.trainer', $enrollment->id) }}">
                        <button class="btn btn-info btn-sm"><i class="fa fa-user-circle"></i></button>
                    </a>
                    <a href="{{ route('enrollment.lecture', $enrollment->id) }}">
                        <button class="btn btn-danger btn-sm"><i class="fa fa-play-circle"></i>  </button>
                    </a>
                    <button wire:click="delete({{ $enrollment->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>  </button>
                    @if($enrollment->status == 1)
                        <button wire:click="disable({{ $enrollment->id }})" class="btn btn-danger btn-sm"><i class="fa fa-arrow-down"></i>  </button>
                    @else
                        <button wire:click="enable({{ $enrollment->id }})" class="btn btn-success btn-sm"><i class="fa fa-arrow-up"></i>  </button>
                    @endif
                    <a href="{{ route('feeproccess', $enrollment->id) }}">
                        <button class="btn btn-warning btn-sm"><i class="fa fa-money"></i>  </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
