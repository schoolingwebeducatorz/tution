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
    <form wire:submit="save">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-users"></i> Select Student
                <span wire:loading class="fa fa-spin fa-spinner float-right"><span>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for=""> <i class="fa fa-globe"></i> Select Country</label>
                    <select name="" class="form-control" wire:model="country" wire:change="cstudents" id="">
                        <option value="">Select Country</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->location->country }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for=""> <i class="fa fa-user-circle"></i> Select Student</label>
                    <select name="" class="form-control" wire:model="student" wire:change="cstudents" id="" @if(empty($students)) disabled @endif>
                        <option value="">Select Student</option>
                        @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="card mt-1">
            <div class="card-header">
                <i class="fa fa-plus-circle"></i> Select Subject For Enrollment 
            </div>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Select Subject</th>
                    <th>Select Grade</th>
                    <th>Classes In A Week</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>
                        <select name="" class="form-control @error('subject') error @enderror" wire:model="subject" wire:change="gradeext" id="">
                            <option value="">Select Subject</option>
                            @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->title }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="" class="form-control @error('grade') error @enderror" wire:model="grade" id="">
                            <option value="">Select Grade</option>
                            @foreach($grades as $grade)
                            <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="number" wire:model="ciaw" class="form-control" >
                        @error('ciaw')
                        <font color="red"><b>{{ $message }}</b></font>
                        @enderror
                    </td>
                    <td>
                        <input type="number" wire:model="amount" class="form-control @error('amount') error @enderror">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">Admission Date</th>
                    <th colspan="2">Fee Proccess Date Of Every Month</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="date" wire:model="admissiondate" class="form-control @error('admissiondate') error @enderror">
                    </td>
                    <td colspan="2">
                        <input type="date" wire:model="feeproccess" class="form-control @error('feeproccess') error @enderror">
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-danger float-right mt-1 btn-sm"> <i class="fa fa-arrow-right"></i> Admission Confrimed</button>
    </form>
</div>
