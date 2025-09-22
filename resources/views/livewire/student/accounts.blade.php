<div>
    <div class="card">
        <div class="card-header bg-danger text-white">
            <i class="fa fa-money"></i> Your Fee Schedule 
        </div>
        <table class="table table-bordered table-striped table-hover">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Subject</th>
                <th>Fee No</th>
                <th>Grade</th>
                <th>Amount</th>
                <th>Last Day</th>
                <th>Status</th>
            </tr>
            @foreach(Auth::user()->student->fee as $fee)
            <tr class="@if($fee->status == "unpaid") bg-warning text-white @endif">
                <td>{{ $fee->enrollment->subject->title }}</td>
                <td>{{ $fee->no }}</td>
                <td>{{ $fee->enrollment->grade->title }}</td>
                <td>
                    <small>Fee will be in {{ $fee->country->location->country }} currency</small> <br />
                    <span class="badge badge-danger"> {{ $fee->amount }} {{ $fee->country->location->symbol }} </span>
                </td>
                <td>
                    {{ $fee->last_date }}
                </td>
                <td>
                    @if($fee->status == "unpaid")
                    <span class="badge badge-danger"> {{ $fee->status }} </span>
                    @else 
                    <span> {{ $fee->status }} via {{ ucfirst($fee->method) }}<span>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
        </table>
    </div>
</div>
