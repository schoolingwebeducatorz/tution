<div>
    @if($lectures->count() > 0)
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <i class="fa fa-play-circle"></i> {{ $lecture->topic }}
                    <span wire:loading class="fa fa-spin fa-spinner float-right"></span>
                </div>
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $lecture->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-footer">
                    <div class="float-right">
                        <a href="{{ asset('storage/app/public/material') }}/{{ $lecture->material }}" target="_blank">
                        <button class="btn btn-danger">
                            <i class="fa fa-download"></i> Matrial 
                        </button>
                        </a>
                        <a href="{{ $lecture->board }}" target="_blank">
                        <button class="btn btn-info">
                            <i class="fa fa-desktop"></i> Class Board
                        </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <i class="fa fa-list"></i> Lectures
                </div>
                <div class="list-group">
                    @foreach($lectures as $lec)
                    <button type="button" wire:click="clecture({{$lec->id }})" class="list-group-item list-group-item-action  @if($lec->id == $lecture->id) active @endif" style="border-radius:0px; aria-current="true" @if($lec->topic == null && $lec->link) disabled @endif>
                       <i class="fa fa-play-circle"></i> @if($lec->topic == null && $lec->link == null) Will Be Uploaded Within <span class="badge badge-warning float-right"><i class="fa fa-clock-o fa-spin"></i> 24 - 48 Hours </span> @else {{$lec->topic }} @endif
                    </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="card text-center">
        <div class="card-body">
            <h2> <i class="fa fa-question-circle"></i> There is no any lecture available yet for you</h2>
            <p>Every Lecture always upload on portal after <i class="fa fa-clock-o"></i> 24 Hours to <i class="fa fa-clock-o"></i> 48 Hours. So please wait if you recently attemp your live lecture.</p>
        </div>
    </div>
    @endif
</div>
