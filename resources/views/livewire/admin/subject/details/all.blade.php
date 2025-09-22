<div>
@if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-flex align-items-center justify-content-start">
                <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                <span><strong>Well done!</strong>  {{ session('message') }} </span>
            </div><!-- d-flex -->
        </div><!-- alert -->
    @endif
    @if (session()->has('delete'))
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="d-flex align-items-center justify-content-start">
            <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
            <span><strong>Deleted !</strong>  {{ session('delete') }} </span>
        </div><!-- d-flex -->
        </div><!-- alert -->
    @endif
    <div class="card">
        <div class="card-header">
            <i class="fa fa-list"></i> Subjects
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Code</th>
                <th>Lessons</th>
                <th>Actions</th>
            </tr>
            @foreach($subjects as $subject)
            <tr>
                <td>
                    <img src="{{ asset('storage/app/public/subjects') }}/{{ $subject->image }}" class="wd-32 rounded-circle" alt="">
                </td>
                <td>{{ $subject->title }}</td>
                <td>{{ $subject->code }}</td>
                <td>{{ $subject->lessons->count() }}</td>
                <td>
                    <a href="{{ route('subject.grade',$subject->id) }}">
                        <button class="btn btn-sm btn-info"><i class="fa fa-arrow-right"></i></button>
                    </a>
                    <button class="btn btn-danger btn-sm" wire:confirm="Do you want to delete subject?" wire:click="delete({{ $subject->id }})"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
