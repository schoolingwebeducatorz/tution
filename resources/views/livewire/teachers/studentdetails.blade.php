<div>
   <style>
      .special-card{
         min-height:439px;
         border-radius:0px !important;
      }
      .bg-warning > th {
         color:white !important;
      }
   </style>
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
    @error('title')
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
    @error('referencelink')
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
    @error('marks')
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
    @error('deadline')
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
    @error('gain')
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
   <div class="row">
      <div class="col-lg-4">
         <div class="card special-card">
               <div class="card-header bg-danger text-white">
                  <i class="fa fa-user-circle"></i> {{ $enrollment->student->name }} 
               </div>
               <table class="table table-bordered table-striped table-hover">
                  <tr>
                     <th> <i class="fa fa-globe"></i>  {{ $enrollment->student->country->location->country }}  </th>
                  </tr>
                  <tr>
                     <th> <i class="fa fa-book"></i>  {{ $enrollment->subject->title }}  </th>
                  </tr>
                  <tr>
                     <th> <i class="fa fa-desktop"></i>  Assignments  </th>
                  </tr>
                  <tr>
                     <th> <i class="fa fa-calendar"></i> {{ $enrollment->ciaw }}  Classes In A Week  </th>
                  </tr>
                  <tr>
                     <th> <i class="fa fa-play-circle"></i> Lectures <span class="badge badge-danger float-right">{{ $enrollment->lectures->count() }}</span>  </th>
                  </tr>
                  <tr>
                     <th> <i class="fa fa-clock-o fa-spin"></i>  Timetable  </th>
                  </tr>
                  @foreach($enrollment->enrollschedule as $schedule)
                  <tr>
                     <td>
                        <i class="fa fa-calendar"></i> {{ $schedule->timeschedule->day->day }} 
                        <span class="float-right"> <i class="fa fa-clock-o"></i> {{ date('h:i:s a', strtotime($schedule->timeschedule->timetable->start)) }}  -  {{ date('h:i:s a', strtotime($schedule->timeschedule->timetable->end)) }} </span>
                     </td>
                  </tr>
                  @endforeach
               </table>
         </div>
      </div>
      <div class="col-lg-8">
         <div class="card special-card">
            <div class="card-header bg-danger text-white">
               <i class="fa fa-plus-circle"></i> Create New Assignment
               <span wire:loading class="fa fa-spinner fa-spin float-right"></span>
            </div>
            <form wire:submit="save">
            <table class="table table-bordered table-striped table-hover">
               <tr>
                  <th colspan="4"> <i class="fa fa-pencil"></i> Title</th>
               </tr>
               <tr>
                  <td colspan="4">
                     <input type="text" wire:model="title" placeholder="Assignment Title" class="form-control" />
                  </td>
               </tr>
               <tr>
                  <th colspan="4"> <i class="fa fa-link"></i> Reference</th>
               </tr>
               <tr>
                  <td colspan="4">
                     <input type="text" wire:model="referencelink" placeholder="Reference Link" class="form-control" />
                  </td>
               </tr>
               <tr>
                  <th>  <i class="fa fa-star"></i> Marks</th>
                  <th>  <i class="fa fa-calendar"></i> Deadline</th>
                  <th>   <i class="fa fa-hand-o-up"></i> Action </th>
               </tr>
               <tr>
                  <td>
                     <input type="number" placeholder="Marks" wire:model="marks" class="form-control" />
                  </td>
                  <td>
                     <input type="date" wire:model="deadline" class="form-control" />
                  </td>
                  <td>
                     <button type="submit" class="btn btn-warning btn-sm mt-2"> <i class="fa fa-save"></i> publish </button>
                  </td>
               </tr>
            </table>
            </form>
            <div class="card-footer bg-danger text-white">
              <b><i class="fa fa-exclamation-triangle"></i></b> Student Will Receive Email Also and please also mention him/her during lecture.
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-2">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header bg-danger text-white">
               <i class="fa fa-list"></i> Assignments
               <span wire:loading class="fa fa-spinner fa-spin float-right"></span>
            </div>
               @foreach($assignments as $assignment)
               <form wire:submit="gainmarks({{ $assignment->id }})">
               <table class="table table-bordered table-striped table-hover mt-1">
                  <tr>
                     <th colspan="1">Title</th>
                     <td colspan="3">{{ $assignment->title }}</td>
                     <td>
                        <a href="{{ $assignment->submission }}" target="_blank">
                        <button class="btn btn-info btn-sm">
                        <i class="fa fa-link"></i> Reference
                        </button>
                        </a>
                     </td>
                  </tr>
                  <tr class="bg-warning">
                     <th> <i class="fa fa-download"></i> Submission  @if(empty($assignment->submission)) <span class="float-right"> pdf <input type="radio" wire:change.prevent="submissiontype" wire:model="subtype" value="1" /> link <input type="radio" wire:change.prevent="submissiontype" wire:model="subtype" value="2" /> </span> @endif  </th>
                     <th> <font color="red"> <i class="fa fa-star fa-spin"></i> </font> Marks</th>
                     <th> <i class="fa fa-calendar"></i> Deadline</th>
                     <th> <i class="fa fa-hand-o-up"></i> Status</th>
                     <th> <i class="fa fa-arrow-right"></i> Action</th>
                  </tr>
                  <tr>
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
                           <input type="number" wire:model="gain" placeholder=" Marks out of {{ $assignment->marks }}" class="form-control">
                        @else 
                           {{ $assignment->gain }}
                        @endif
                     </td>
                     <td>
                        {{ $assignment->date }}
                     </td>
                     <td>
                        @if($assignment->status == 0)
                        <span class="badge badge-danger">Non submited</span>
                        @else 
                        <span class="badge badge-success">submited</span>
                        @endif
                     </td>
                     <td>
                        <button wire:click="delete({{ $assignment->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        @if($assignment->status == 0)
                           <button type="submit" wire:confirm="Are you sure? Assignment will be closed." class="btn btn-info btn-sm"><i class="fa fa-hand-o-right"></i></button>
                        @endif
                     </td>
                  </tr>
               </table>
               </form>
               @endforeach
         </div>
      </div>
   </div>
</div>
