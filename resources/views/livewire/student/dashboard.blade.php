<div>
    <div class="row row-sm">
        <div class="col-sm-4 col-xl-4">
            <div class="bg-teal rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-book tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Your Subjects</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ Auth::user()->student->enrollment->count() }}</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xl-4">
            <div class="bg-teal rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-pencil tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Your Pending Assignments</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ Auth::user()->student->enrollment->count() }}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    @livewire('student.assignments')
    <br />
    @livewire('student.yoursubjects')
    <br />
    @livewire('student.assignments')
</div>
