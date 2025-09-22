<div>
   <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-white">Available Subjects</h2>
            </div>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area section-padding">
    <div class="container">
        <div class="row">
            @foreach($subjects as $subject)
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item card-preview">
                    <div class="card-image">
                        <a href="{{ route('subjectdetails',$subject->id) }}" class="d-block">
                            <img class="card-img-top lazy" src="{{ asset('storage/app/public/subjects') }}/{{ $subject->image }}" data-src="images/img8.jpg" alt="Card image cap">
                        </a>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">Year 1 - Year 12</h6>
                        <h5 class="card-title"><a href="{{ route('subjectdetails',$subject->id) }}">{{ $subject->title }}</a></h5>
                        <p class="card-text"><a href="{{ route('subjectdetails',$subject->id) }}">By Matheducatorz</a></p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->
</div>
