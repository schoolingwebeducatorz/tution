<div>
   <div class="card">
    <div class="card-header">
        <i class="fa fa-user-circle"></i> Student Profile
    </div>
    <table class="table table-bodered table-striped table-hover">
        <tr>
            <th>Name</th>
            <th>What's App</th>
            <th>Classes In A Week</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>{{ $enrollment->student->name }}</td>
            <td>{{ $enrollment->student->whatsapp }}</td>
            <td>{{ $enrollment->ciaw }} Classes</td>
            <td>{{ $enrollment->student->email }}</td>
            <td>{{ $enrollment->subject->title }}</td>
            <td>{{ $enrollment->grade->title }}</td>
        </tr>
    </table>
   </div>
   <div class="card">
        <div class="card-header">
            <i class="fa fa-calendar"></i> Time Table
            <button class="btn btn-sm float-right btn-success" wire:confirm="Are you sure? you want to reset time table" wire:click="resetschedule({{ $enrollment->id }})"> <i class="fa fa-clock-o fa-spin"></i> Reset Time Table And Trainer</button>
            <div wire:loading class="float-right">
                <font color="red"><b><i class="fa fa-spinner fa-spin float-right"></i></b></font>
            </div>
        </div>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th> <i class="fa fa-calendar"></i> Select Day</th>
                <th> <i class="fa fa-clock-o"></i> Select Time Slot</th>
                <th>Selected Slot </th>
            </tr>
            <tr>
                <td> 
                    <select name="" id="" wire:model="day"  class="form-control @error('day') error @enderror">
                        <option value="">Select Day</option>
                        @foreach($days as $day)
                        <option value="{{ $day->id }}">{{ $day->day }}</option>
                        @endforeach
                    </select>
                </td>
                <td> 
                    <select name="" id="" wire:model="timeslot" class="form-control @error('timeslot') error @enderror">
                        <option value="">Time Slot</option>
                        @foreach($timeslots as $slot)
                        <option value="{{ $slot->id }}">
                            {{ date('h:i:s a', strtotime($slot->start)) }} 
                            -
                            {{ date('h:i:s a', strtotime($slot->end)) }} 
                        </option>
                        @endforeach
                    </select>
                </td>
                <td>
                   <button class="btn mt-1 btn-danger btn-sm"  wire:click="save" @if( $timesh->count() >= $enrollment->ciaw) disabled @endif><i class="fa fa-plus-circle"></i> Add Slot </button>
                </td>
            </tr>
            @if($timesh->count() > 0)
                @foreach($timesh as $time)
                <tr>
                    <td>{{ $time->timeschedule->day->day }}</td>
                    <td @if(!empty($enrollment->trainer_id)) colspan="2" @endif> 
                    {{ date('h:i:s a', strtotime($time->timeschedule->timetable->start)) }} to
                    {{ date('h:i:s a', strtotime($time->timeschedule->timetable->end)) }}
                    </td>
                    @if(empty($enrollment->trainer_id))
                    <td>
                        <button class="btn btn-danger btn-sm" wire:click="delete({{ $time->id }})"><i class="fa fa-trash"></i></button>
                    </td>
                    @endif
                </tr>
                @endforeach
            @else 
            <tr>
                <td colspan="3" class="text-center">
                    No Time Table Selected
                </td>
            </tr>
            @endif
        </table>
        @if(empty($enrollment->trainer_id))
        <div class="card-footer">
            <button class="btn float-right btn-sm btn-outline-danger" wire:click="find_trainer"><i class="fa fa-search"></i> Search Trainer</button>
        </div>
        @endif
   </div>
   @if(!empty($enrollment->trainer_id))
   <div class="card">
        <div class="card-header">
            <i class="fa fa-user-circle"></i> Available Trainers
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Name</th>
            </tr>
            <tr>
                <td>{{ ucfirst($enrollment->trainer->name) }}</td>
            </tr>
        </table>
    </div>
    @else
    @if(!empty($trainers))
        <div class="card">
                <div class="card-header">
                    <i class="fa fa-user-circle"></i> Available Trainers
                </div>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Subjects</th>
                        <th>Action</th>
                    </tr>
                    @foreach($trainers as $trainer)
                    <tr>
                        <td>{{ $trainer->trainer->name }}</td>
                        <td>
                            @foreach($trainer->trainer->subject as $subject)
                                <span class="badge badge-danger">{{ ucfirst($subject->trainersubject->subject) }}</span>
                            @endforeach
                        </td>
                        <td>
                            <button class="btn btn-sm btn-danger" wire:click="choose({{ $trainer->trainer->id }})"><i class="fa fa-check"></i> Select Trainer</button>
                        </td>
                    </tr>
                    @endforeach
                </table>
        </div>
    @endif
    @endif
</div>

