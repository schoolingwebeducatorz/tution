<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-list"></i> Your Subjects
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>
                    Subjects
                </th>
                <th>
                    Lectures
                </th>
                <th>
                    Teachers
                </th>
                <th>
                    Actions
                </th>
            </tr>
            @foreach(Auth::user()->student->enrollment as $enrollment)
            <tr>
                <td>
                    {{ ucfirst($enrollment->subject->title) }}
                </td>
                <td>
                    {{ $enrollment->lectures->count() }}
                </td>
                <td>
                    @if(!empty($enrollment->trainer))
                    {{ $enrollment->trainer->name }}
                    @endif
                </td>
                <td>
                    @if($enrollment->status == 1)
                    <a href="{{ route('enrollment.lectures',$enrollment->id) }}">
                        <button class="btn btn-warning btn-sm"> <i class="fa fa-play-circle"></i> Lectures</button>
                    </a>
                    @else 
                    <span class="badge badge-danger">Disabled</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
