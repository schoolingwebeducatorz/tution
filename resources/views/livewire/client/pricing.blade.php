<div>
   <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="section-heading">
                        <h2 class="section__title text-white">Packages <span class="badge badge-info">{{ $country->location->country }}</span></h2>
                    </div>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START PACKAGE AREA
================================= -->
@foreach($country->cpackage as $package)
<div class="container">
    <div class="text-center mt-5">
        <h2>{{ $package->title }}</h2>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero debitis ab reiciendis eius! Fugit, nulla culpa beatae excepturi suscipit laborum deserunt eaque, et sequi obcaecati voluptatibus impedit alias nemo voluptatum!
        </p>
    </div>
</div>
<section class="package-area mt-5">
    <div class="container">
        <div class="row">
            @foreach($package->package as $membership)
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item">
                    <div class="card-body">
                        <div class="package-price-box border-bottom border-bottom-gray pb-4 mb-4">
                            <h3 class="fs-45 font-weight-semi-bold pb-2"><span>{{ $membership->country->location->symbol }}</span>{{ $membership->price }} <s><font color="red"> {{ $membership->country->location->symbol }}{{ $membership->regularprice }}</s></font> </h3>
                            <h4 class="fs-20 font-weight-semi-bold">{{ $membership->title }}</h4>
                            <label class="font-weight-semi-bold"> <font color="red"> Save upto {{ $membership->discount }}% </font></label>
                        </div><!-- end package-price-box -->
                        <div class="generic-list-item">
                            {!! $membership->options !!}    
                        </div>
                        <div class="price-btn-box pt-30px">
                            <a href="{{ route('trail.book') }}" class="btn theme-btn theme-btn-transparent w-100">Book Your Trail <i class="la la-arrow-right icon ml-1"></i></a>
                            <p class="text-uppercase fs-13 pt-2">no hidden charges!</p>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end package-area -->
<!-- ================================
       START PACKAGE AREA
================================= -->
@endforeach
</div>
