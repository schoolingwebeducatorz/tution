<div>
        <div class="row row-sm">

        <!-- Students -->
        <div class="col-sm-4 col-xl-4">
            <div class="bg-primary rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                    <i class="fa fa-graduation-cap tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                            Total Students
                        </p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ Auth::user()->trainer->enrollments->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subjects -->
        <div class="col-sm-4 col-xl-4">
            <div class="bg-teal rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                    <i class="fa fa-book tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                            Your Subjects
                        </p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ Auth::user()->trainer->subject->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Assignments -->
        <div class="col-sm-4 col-xl-4">
            <div class="bg-danger rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                    <i class="fa fa-tasks tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                        <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
                            Pending Assignments
                        </p>
                        <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ Auth::user()->trainer->assignments->where('status',0)->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br />
    @livewire('teachers.yourstudents')
    @livewire('teachers.assignments')
</div>