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
            <td>{{ optional($enrollment->student)->name ?? 'null' }}</td>
            <td>{{ optional($enrollment->student)->whatsapp ?? 'null' }}</td>
            <td>{{ $enrollment->ciaw ? $enrollment->ciaw.' Classes' : 'null' }}</td>
            <td>{{ optional($enrollment->student)->email ?? 'null' }}</td>
            <td>{{ optional($enrollment->subject)->title ?? 'null' }}</td>
            <td>{{ optional($enrollment->grade)->title ?? 'null' }}</td>
        </tr>
    </table>
   </div>

   <div class="card">
        <div class="card-header">
            <i class="fa fa-calendar"></i> Time Table
            <button class="btn btn-sm float-right btn-success" 
                    wire:confirm="Are you sure? you want to reset time table" 
                    wire:click="resetschedule({{ $enrollment->id }})"> 
                <i class="fa fa-clock-o fa-spin"></i> Reset Time Table And Trainer
            </button>
            <div wire:loading class="float-right">
                <font color="red"><b><i class="fa fa-spinner fa-spin float-right"></i></b></font>
            </div>
        </div>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th><i class="fa fa-calendar"></i> Select Day</th>
                <th><i class="fa fa-clock-o"></i> Select Time Slot</th>
                <th>Selected Slot</th>
            </tr>
            <tr>
                <td> 
                    <select wire:model="day" class="form-control @error('day') error @enderror">
                        <option value="">Select Day</option>
                        @foreach($days as $day)
                        <option value="{{ $day->id }}">{{ $day->day ?? 'null' }}</option>
                        @endforeach
                    </select>
                </td>
                <td> 
                    <select wire:model="timeslot" class="form-control @error('timeslot') error @enderror">
                        <option value="">Time Slot</option>
                        @foreach($timeslots as $slot)
                        <option value="{{ $slot->id }}">
                            {{ $slot->start ? date('h:i:s a', strtotime($slot->start)) : 'null' }} -
                            {{ $slot->end ? date('h:i:s a', strtotime($slot->end)) : 'null' }}
                        </option>
                        @endforeach
                    </select>
                </td>
                <td>
                   <button class="btn mt-1 btn-danger btn-sm" wire:click="save" 
                           @if($timesh->count() >= ($enrollment->ciaw ?? 0)) disabled @endif>
                           <i class="fa fa-plus-circle"></i> Add Slot 
                   </button>
                </td>
            </tr>

            @if($timesh->count() > 0)
                @foreach($timesh as $time)
                <tr>
                    <td>{{ optional(optional($time->timeschedule)->day)->day ?? 'null' }}</td>
                    <td @if(!empty($enrollment->trainer_id)) colspan="2" @endif> 
                        {{ optional(optional($time->timeschedule)->timetable)->start 
                            ? date('h:i:s a', strtotime($time->timeschedule->timetable->start)) : 'null' }} 
                        to 
                        {{ optional(optional($time->timeschedule)->timetable)->end 
                            ? date('h:i:s a', strtotime($time->timeschedule->timetable->end)) : 'null' }}
                    </td>
                    @if(empty($enrollment->trainer_id))
                    <td>
                        <button class="btn btn-danger btn-sm" wire:click="delete({{ $time->id }})">
                            <i class="fa fa-trash"></i>
                        </button>
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
            <button class="btn float-right btn-sm btn-outline-danger" wire:click="find_trainer">
                <i class="fa fa-search"></i> Search Trainer
            </button>
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
                <td>{{ ucfirst(optional($enrollment->trainer)->name ?? 'null') }}</td>
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
                    <td>{{ optional($trainer->trainer)->name ?? 'null' }}</td>
                    <td>
                        @if(!empty($trainer->trainer->subject))
                            @foreach($trainer->trainer->subject as $subject)
                                <span class="badge badge-danger">
                                    {{ ucfirst(optional($subject->trainersubject)->subject ?? 'null') }}
                                </span>
                            @endforeach
                        @else
                            <span class="badge badge-secondary">null</span>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger" wire:click="choose({{ $trainer->trainer->id ?? 0 }})">
                            <i class="fa fa-check"></i> Select Trainer
                        </button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    @endif
    @endif
</div>
