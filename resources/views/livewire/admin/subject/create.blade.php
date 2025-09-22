<div>
    @include('includes.flash')
    <form wire:submit="save">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-plus-circle"></i> Create Subject
            </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" height="250px" alt="">
                        @else
                            <img src="{{ asset('noimage.jpg') }}" height="250px" alt="">
                        @endif
                        <div class="card-footer">
                            <input type="file" wire:model="image"/>
                            @error('image')
                            <font color="red">
                                <b>
                                    {{ $message }}
                                </b>
                            </font>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for=""><i class="fa fa-pencil"></i> <b> Subject Title </b> </label>
                            <input type="text" class="form-control @error('title') error @enderror" placeholder="Enter Subject Title" wire:model="title" />
                        </div>
                    </div>
            </div>
            <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for=""><i class="fa fa-globe"></i> <b> Select Country </b> </label>
                            <select class="form-control @error('country') error @enderror" wire:model="country" id="">
                                <option> Select Country </option>
                                @foreach($countries as $c)
                                <option value="{{ $c->id }}"> {{ $c->location->country }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <label for=""> <i class="fa fa-desktop"></i> Description</label>
                    <textarea wire:model="description" class="form-control @error('description') error @enderror" style="resize:none;" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-danger float-right"><i class="fa fa-save"></i> Publish </button>
        </div>
    </div>
    </form>
</div>
