<div>
  @if(Auth::user()->trainer->enrollments->count() > 0)
  <div class="card">
    <div class="card-header bg-danger text-white"> 
      <b> <i class="fa fa-users"></i> Your Students </b>
      <span class="badge badge-warning float-right">{{ Auth::user()->trainer->enrollments->count() }}</span>
    </div>
    <table class="table table-bordered table-striped table-hover">
      <tr>
        <th> <i class="fa fa-list"></i> </th>
        <th> <i class="fa fa-user-circle"></i> Name</th>
        <th> <i class="fa fa-desktop"></i> Subject</th>
        <th> <i class="fa fa-pencil"></i> Assignments</th>
        <th> <i class="fa fa-hand-o-up"></i> Action</th>
      </tr>
      @foreach(Auth::user()->trainer->enrollments as $enrollment)
      <tr>
        <td>#{{  $enrollment->id }}</td>
        <td>{{  $enrollment->student->name }}</td>
        <td>{{  $enrollment->subject->title }}</td>
        <td>
          <span class="badge bg-danger">{{ Auth::user()->trainer->assignments->where('status',0)->count() }}</span>
        </td>
        <td>
          <a href="{{ route('student.details',$enrollment->id) }}">
            <button class="btn btn-info btn-sm"><i class="fa fa-hand-o-right"></i> Details</button>
          </a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  @else
  <div class="card">
    <div class="card-body text-center">
      <h3><font color="red"><i class="fa fa-question-circle"></i> You have no students yet.</font></h3>
      <p>Please wait when matheducatorz management will assign you student, It will show here and you can manage your students.</p>
    </div>
  </div>
  @endif
</div>
