<div>
    <div>
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-globe tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Countries</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ App\Models\country::all()->count() }}</p>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-desktop tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Subjects</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ App\Models\subject::all()->count() }}</p>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-warning rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-graduation-cap tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Students</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ App\Models\student::all()->count() }}</p>
                </div>
                </div>
            </div>
            </div>
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-primary rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-users tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Trainers</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ App\Models\trainer::all()->count() }}</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <br />
        <livewire:Admin.Subject.Allsubjects/>
        <br />
        <livewire:Admin.Trainers.Alltrainers/>
        <br />
        <livewire:Admin.Subject.Allsubjects/>
    </div>
</div>
