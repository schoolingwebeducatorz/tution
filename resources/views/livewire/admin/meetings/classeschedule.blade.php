<div>
     <div class="card">
        <div class="card-header">
            <i class="fa fa-calendar"></i> Class Schedule 
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Slots</th>
                @foreach($days as $day)
                <th>{{ $day->day }}</th>
                @endforeach
            </tr>
            @foreach($slots as $slot)
                <tr>
                        <td> {{ date('h:i:s a', strtotime($slot->start)) }}  -  {{ date('h:i:s a', strtotime($slot->end)) }} </td>
                        @foreach($slot->day as $da)
                        @php 
                        $timeschedule = App\Models\timeschedule::where('timetable_id',$da->timetable_id)->where('day_id',$da->day_id)->first();
                        $students = App\Models\enrollschedule::where('timeschedule_id',$timeschedule->id)->get();
                        @endphp
                        <td>
                            @if($students->count() > 0)
                                <button class="btn btn-sm btn-success" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="{{ $students->count() }} Lectures On This Slot"
  data-content="@foreach($students as $student) {{ $student->enrollment->student->name }} With {{ $student->enrollment->trainer->name }} <br />  @endforeach">Lectures</button>
                            @else 
                                <span class="badge badge-danger">No Lecture </span>
                            @endif
                        </td>
                        @endforeach
                </tr>
            @endforeach
        </table>
     </div>
</div>
