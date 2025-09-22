<div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <img src="http://localhost:8000/storage/app/public/trainer/{{  $trainer->img }}" height="250px;" alt="">
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user-circle"></i> {{ $trainer->name }}  
                </div>
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Full Name</th>
                        <td>{{ $trainer->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $trainer->email }}</td>
                    </tr>
                    <tr>
                        <th>What's App</th>
                        <td>{{ $trainer->whatsapp }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $trainer->gender }}</td>
                    </tr>
                    <tr>
                        <th>Subjects</th>
                        <td>
                            @foreach($trainer->subject as $subject)
                            <span class="badge badge-danger">{{ ucfirst($subject->trainersubject->subject) }}</span>
                            @endforeach
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-1">
                <div class="card-header">
                    <i class="fa fa-calendar"></i> Time Table
                </div>
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Time</th>
                        @foreach($days as $day)
                        <td>
                            {{ $day->day }}
                        </td>
                        @endforeach
                    </tr>
                    @foreach($slots as $slot)
                    <tr>
                        <td> {{ date('h:i:s a', strtotime($slot->start)) }}  -  {{ date('h:i:s a', strtotime($slot->end)) }} </td>
                        @foreach($slot->day as $da)
                        @php
                        $slt = App\Models\timeschedule::where('timetable_id',$slot->id)->where('day_id',$da->day_id)->first();
                        $trainerslot = App\Models\trainerschedule::where('timeschedule_id',$slt->id)->where('trainer_id',$trainer->id)->first();
                        @endphp
                        <td class="text-center">
                            @if($trainerslot->status == 0)
                            <span class="badge badge-success">Free</span>
                            @else 
                                <span class="badge badge-danger">Busy</span>
                            @endif
                        </td>
                        @endforeach
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
