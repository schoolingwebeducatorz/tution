<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-users"></i> All Trainers
        </div>
        <table class="table table-bodered table-striped table-hover">
            <tr>
                <th>Profile</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>What's App</th>
                <th>Actions</th>
            </tr>
            @foreach($trainers as $trainer)
            <tr>
                <td>{{ $trainer->name }}</td>
                <td>{{ $trainer->name }}</td>
                <td>{{ $trainer->email }}</td>
                <td>{{ $trainer->whatsapp }}</td>
                <td>
                    <a href="{{ route('admin.profile',$trainer->id) }}">
                        <button class="btn btn-sm btn-info"> <i class="fa fa-hand-o-right"></i> Details</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
