<div>
    @php
    $student = Auth::user()->student;
    $month = Carbon\carbon::now()->month;
    $alerts = App\Models\fee::where('student_id',$student->id)->whereMonth('last_date',$month)->where('status','unpaid')->get();
    @endphp
    @foreach($alerts as $alert)
        @php
        $date1 = $alert->last_date;
        $dateo  = Carbon\carbon::now();
        $n = $dateo->diffInDays($date1);
        @endphp
        @if($n < 7)
        <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">Fee Alert !</strong> {{ $n }} Days Are Left In Your Fee Submission Date.
        </div><!-- alert -->
        @endif
    @endforeach
</div>
