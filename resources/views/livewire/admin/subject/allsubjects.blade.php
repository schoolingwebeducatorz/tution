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
            <i class="fa fa-globe"></i> Current Working Countries
        </div>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>Country</th>
                <th>What's App</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach($countries as $country)
            <tr>
                <td>
                    {{ $country->location->country }}
                </td>
                <td>
                    {{ $country->whatsapp }}
                </td>
                <td>
                    {{ $country->email }}
                </td>
                <td>
                    <a href="{{ route('subject',$country->id) }}">
                        <button class="btn btn-info btn-sm"><i class="fa fa-arrow-right"></i></button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
