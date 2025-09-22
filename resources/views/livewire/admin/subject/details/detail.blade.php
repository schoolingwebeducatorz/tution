<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-globe"></i> {{ $subject->title }} For {{ $subject->country->location->country }}
            <a href="{{ route('create.lessons',$subject->id) }}">
            <button class="btn btn-danger btn-sm float-right"><i class="fa fa-plus-circle"></i> Add Lesson</button>
            </a>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>
                    <i class="fa fa-desktop"></i> {{ $subject->title }}
                </th>
                <th>
                   <i class="fa fa-list"></i> {{ $subject->lessons->count() }} Lessons
                </th>
            </tr>
            <tr>
                <th colspan="2" class="bg-danger text-white">
                    <i class="fa fa-list"></i> Lessons
                </th>
            </tr>
            @foreach($lessons as $lesson)
                <tr>
                    <td colspan="2">
                        <i class="fa fa-arrow-right"></i> {{ $lesson->title }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
