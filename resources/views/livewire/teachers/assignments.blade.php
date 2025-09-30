<div>
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
