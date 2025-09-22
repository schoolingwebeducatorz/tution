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
    @error('submissiont')
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center justify-content-start">
            <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
            <span><strong>Warning !</strong>  {{ $message }} </span>
        </div><!-- d-flex -->
        </div><!-- alert -->
    @enderror
    <div class="card">
        <div class="card-header">
            <i class="fa fa-desktop"></i> Your Assignments
            <i wire:loading class="fa fa-spinner fa-spin float-right"></i>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Title</th>
                <th>Subject</th>
                <th>Dealine</th>
                <th>Solution @if(empty($assignment->submission)) <span class="float-right"> pdf <input type="radio" wire:change.prevent="submissiontype" wire:model="subtype" value="1" /> link <input type="radio" wire:change.prevent="submissiontype" wire:model="subtype" value="2" /> </span> @endif</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach(Auth::user()->student->enrollment as $enrollment)
            @foreach($enrollment->assignments as $assignment)
            <form wire:submit="gainmarks({{ $assignment->id }})">
                <tr>
                    <td>{{ $assignment->title }}</td>
                    <td>{{ $assignment->subject }}</td>
                    <td>{{ $assignment->date }}</td>
                    <td>
                            @if(!empty($assignment->submission))
                                @if($assignment->subimssiont == 2)
                                <a href="{{ $assignment->submission }}" target="_blank">
                                    <i class="fa fa-link"></i> Link
                                </a>
                                @else
                                <a href="{{ $assignment->submission }}" target="_blank"> 
                                    <i class="fa fa-download"></i> Download
                                </a>
                                @endif
                            @else
                                @if($type == 1)
                                    <input type="file" wire:model="submissiont"  />
                                @elseif($type == 2)
                                    <input type="text" wire:model="submissiont" placeholder="Paste Here Link" class="form-control">
                                @elseif($type ==  0)
                                Please Select Type
                                @endif
                            @endif
                    </td>
                    <td>
                        @if($assignment->status == 0)
                        <span class="badge badge-danger">Non submited</span>
                        @else 
                        <span class="badge badge-success">submited</span>
                        @endif
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-arrow-right"></i> Submit</button>
                    </td>
                </tr>
            </form>
            @endforeach
            @endforeach
        </table>
    </div>
</div>
