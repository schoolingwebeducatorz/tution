<div>
    @include('includes.flash')
    <div class="card">
        <div class="card-header">
            <i class="fa fa-plus-circle"></i> Create Grade
        </div>
        <form wire:submit="save">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Grade title</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control form-control-sm @error('title') error @enderror" wire:model="title">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-save"></i> Save </button>
                    </td>
                </tr>
            </table>
        <form>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>
                    Title
                </th>
                <th>
                Action
                </th>
            </tr>
            @foreach($grades as $grade)
            <tr>
                <td>
                    {{ $grade->title }}
                </td>
                <td>
                    <a href="{{ route('create.lessons',$grade->id) }}"  class="btn btn-info btn-sm">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
