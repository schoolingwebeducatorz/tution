<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-money"></i> Accounts Management
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>#</th>
                <th> <i class="fa fa-user-circle"></i> Name</th>
                <th> <i class="fa fa-whatsapp"></i> Whats App</th>
                <th> <i class="fa fa-envelope"></i> Email</th>
                <th> <i class="fa fa-cog"></i> Status</th>
                <th> <i class="fa fa-globe"></i> Country </th>
                <th> <i class="fa fa-list"></i> Enrollments </th>
                <th> <i class="fa fa-arrow-up"></i> Action<th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td> {{ ucfirst($student->student->name) }} </td>
                <td> {{ $student->student->whatsapp }} </td>
                <td> {{ $student->student->email }} </td>
                <td> <i class="fa fa-cog"></i> Status</td>
                <td> {{ $student->student->country->location->country }}</td>
                <td class="text-center"> 
                    <span class="badge badge-danger">{{ $student->grade->title }}</span> 
                    <span class="badge badge-warning">{{ $student->subject->title ?? 'N/A' }}</span> 
                </td>
                <td> 
                    <a href="{{ route('feeproccess',$student->id) }}">
                        <button class="btn btn-warning btn-sm"> <i class="fa fa-money"></i> Payment </button>
                    </a>
                <td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
