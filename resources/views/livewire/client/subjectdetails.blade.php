<div>
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area pt-50px pb-50px bg-white pattern-bg">
    <div class="container">
        <div class="col-lg-8 mr-auto">
            <div class="breadcrumb-content">
                <div class="section-heading">
                    <h2 class="section__title">{{ $subject->title }}</h2>
                    <p class="section__desc pt-2 lh-30">
                       {{ $subject->description }}
                    </p>
                </div><!-- end section-heading -->
                <div class="d-flex flex-wrap align-items-center pt-3">
                    <h6 class="ribbon ribbon-lg mr-2 bg-3 text-white">Bestseller</h6>
                    <div class="rating-wrap d-flex flex-wrap align-items-center">
                        <span class="student-total pl-2">815 students</span>
                    </div>
                </div><!-- end d-flex -->
                <p class="pt-2 pb-1">Created by <a href="{{ route('home') }}" class="text-color hover-underline">Matheducatorz | Online Math's Club</a></p>
                <div class="bread-btn-box pt-3">
                    <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 mr-2 mb-2" data-toggle="modal" data-target="#shareModal">
                        <i class="la la-share mr-1"></i>Share
                    </button>
                </div>
            </div><!-- end breadcrumb-content -->
        </div><!-- end col-lg-8 -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->
@php
$subjects = App\Models\subject::where('country_id',$subject->country_id)->get();
@endphp

<!--======================================
        START COURSE DETAILS AREA
======================================-->
<section class="course-details-area pb-20px">
    <div class="container">
        <div class="row">
           <div class="col-lg-8 pb-5">
               <div class="course-details-content-wrap pt-90px">
                   <div class="course-overview-card">
                       <h3 class="fs-24 font-weight-semi-bold pb-3">Description</h3>
                       <p class="fs-15 pb-2">{{ $subject->description }}</p>
                    
                   </div><!-- end course-overview-card -->
                   <div class="course-overview-card">
                       <div class="curriculum-header d-flex align-items-center justify-content-between pb-4">
                           <h3 class="fs-24 font-weight-semi-bold">Subject Content</h3>
                       </div>
                       <div class="curriculum-content">
                           <div id="accordion" class="generic-accordion">
                            @foreach($subject->grade as $grade)
                               <div class="card">
                                   <div class="card-header" id="headingOne">
                                       <button class="btn btn-link d-flex align-items-center justify-content-between" data-toggle="collapse" data-target="#collapseOne{{ $grade->id }}" aria-expanded="true" aria-controls="collapseOne">
                                           <i class="la la-plus"></i>
                                           <i class="la la-minus"></i>
                                           {{ $grade->title }}
                                           <span class="fs-15 text-gray font-weight-medium">Lesson Plan </span>
                                       </button>
                                   </div><!-- end card-header -->
                                   <div id="collapseOne{{ $grade->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                       <div class="card-body">
                                           <ul class="generic-list-item">
                                                @foreach($grade->lesson as $lesson)
                                               <li>
                                                   <label class="d-flex align-items-center justify-content-between text-color" data-toggle="modal" data-target="#previewModal">
                                                       <span>
                                                           <i class="la la-arrow-right mr-1"></i>
                                                           {{ $lesson->title }}
                                                       </span>
                                                       <a href="{{ route('trail.book') }}">
                                                           <span class="ribbon bg-danger ml-2 fs-13"><font color="white">Book Trail</font></span>
                                                        </a>
                                                    </label>
                                               </li>
                                               @endforeach
                                           </ul>
                                       </div><!-- end card-body -->
                                   </div><!-- end collapse -->
                               </div><!-- end card -->
                            @endforeach
                           </div><!-- end generic-accordion -->
                       </div><!-- end curriculum-content -->
                   </div><!-- end course-overview-card -->
                   <div class="course-overview-card pt-4">
                       <h3 class="fs-24 font-weight-semi-bold pb-4">Students also bought</h3>
                       <div class="view-more-carousel owl-action-styled">
                        @foreach($subjects as $subject)
                           <div class="card card-item card-item-list-layout border border-gray shadow-none">
                               <div class="card-image">
                                   <a href="#" class="d-block">
                                       <img class="card-img-top" src="{{ asset('storage/app/public/subjects') }}/{{ $subject->image }}" alt="Card image cap">
                                   </a>
                                   
                               </div><!-- end card-image -->
                               <div class="card-body">
                                   <h6 class="ribbon ribbon-red-bg fs-14 mb-3">All Levels</h6>
                                   <h5 class="card-title"><a href="course-details.html">{{ $subject->title }}</a></h5>
                                   <p class="card-text"><a href="{{ route('home') }}">Matheducatorz</a></p>
                                   <div class="d-flex justify-content-between align-items-center">
                                       <p class="card-price text-black">{{ $subject->description }}</p>
                                   </div>
                               </div><!-- end card-body -->
                           </div><!-- end card -->
                        @endforeach
                       </div><!-- end view-more-carousel -->
                   </div><!-- end course-overview-card -->
                   <div class="course-overview-card pt-4">
                       <h3 class="fs-24 font-weight-semi-bold pb-4">About the instructor</h3>
                       <div class="instructor-wrap">
                           <div class="media media-card">
                               <div class="instructor-img">
                                   <a href="teacher-detail.html" class="media-img d-block">
                                       <img class="lazy" src="images/img-loading.png" data-src="images/small-avatar-1.jpg" alt="Avatar image">
                                   </a>
                                   <ul class="generic-list-item pt-3">
                                       <li><i class="la la-star mr-2 text-color-3"></i> 4.6 Instructor Rating</li>
                                       <li><i class="la la-user mr-2 text-color-3"></i> 45,786 Students</li>
                                       <li><i class="la la-comment-o mr-2 text-color-3"></i> 2,533 Reviews</li>
                                       <li><i class="la la-play-circle-o mr-2 text-color-3"></i> 24 Courses</li>
                                       <li><a href="teacher-detail.html">View all Courses</a></li>
                                   </ul>
                               </div><!-- end instructor-img -->
                               <div class="media-body">
                                   <h5><a href="teacher-detail.html">Tim Buchalka</a></h5>
                                   <span class="d-block lh-18 pt-2 pb-3">Joined 4 years ago</span>
                                   <p class="text-black lh-18 pb-3">Java Python Android and C# Expert Developer - 878K+ students</p>
                                   <p class="pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                   <div class="collapse" id="collapseMoreTwo">
                                       <p class="pb-3">After learning the hard way, Tim was determined to become the best teacher he could, and to make his training as painless as possible, so that you, or anyone else with the desire to become a software developer, could become one.</p>
                                       <p class="pb-3">If you want to become a financial analyst, a finance manager, an FP&A analyst, an investment banker, a business executive, an entrepreneur, a business intelligence analyst, a data analyst, or a data scientist, <strong class="text-black font-weight-semi-bold">Tim Buchalka's courses are the perfect course to start</strong>.</p>
                                   </div>
                                   <a class="collapse-btn collapse--btn fs-15" data-toggle="collapse" href="#collapseMoreTwo" role="button" aria-expanded="false" aria-controls="collapseMoreTwo">
                                       <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-14"></i></span>
                                       <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-14"></i></span>
                                   </a>
                               </div>
                           </div>
                       </div><!-- end instructor-wrap -->
                   </div><!-- end course-overview-card -->
               </div><!-- end course-details-content-wrap -->
           </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar sidebar-negative">
                    <div class="card card-item">
                        <div class="card-body">
                            <div class="preview-course-video">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#previewModal">
                                    <img src="{{ asset('storage/app/public/subjects') }}/{{ $subject->image }}" data-src="images/preview-img.jpg" alt="course-img" class="w-100 rounded lazy">
                                </a>
                            </div><!-- end preview-course-video -->
                            <div class="preview-course-feature-content pt-40px">
                                <p class="d-flex align-items-center pb-2">
                                    <span class="price-discount">50% off</span>
                                    <a href="{{ route('pricing',$subject->country_id) }}"> Fee Structure</a>
                                </p>
                                <p class="preview-price-discount-text pb-35px">
                                    <span class="text-color-3">2 days</span> left at this price!
                                </p>
                                <div class="buy-course-btn-box">
                                    <a href="{{ route('trail.book') }}">
                                    <button type="button" class="btn theme-btn w-100 mb-2"><i class="la la-desktop fs-18 mr-1"></i> Book Your Tail</button>
                                    </a>
                                </div>
                                <p class="fs-14 text-center pb-4">First Try Then Buy</p>
                                <div class="preview-course-incentives">
                                    <h3 class="card-title fs-18 pb-2">You Will Get</h3>
                                    <ul class="generic-list-item pb-3">
                                        <li><i class="la la-star mr-2 text-color"></i> Certified Teachers</li>
                                        <li><i class="la la-star mr-2 text-color"></i> Early Education</li>
                                        <li><i class="la la-star mr-2 text-color"></i> One to one session</li>
                                        <li><i class="la la-star mr-2 text-color"></i> Recording Backup</li>
                                        <li><i class="la la-star mr-2 text-color"></i> Free Computer Training's</li>
                                        <li><i class="la la-star mr-2 text-color"></i> LMS Support Life time</li>
                                        <li><i class="la la-star mr-2 text-color"></i>Every Lesson Recording Backup</li>
                                    </ul>
                                    <div class="section-block"></div>
                                    <div class="buy-for-team-container pt-4">
                                        <h3 class="fs-18 font-weight-semi-bold pb-2">Afford Able Price?</h3>
                                        <p class="lh-24 pb-3">We are offering these tution's in very afforable price</p>
                                        <a href="{{ route('trail.book') }}" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30 w-100">Book Your Trail</a>
                                    </div>
                                </div><!-- end preview-course-incentives -->
                            </div><!-- end preview-course-content -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Matheducatorz Tutions Features</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item generic-list-item-flash">
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-clock mr-2 text-color"></i>01 Hour Class</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-play-circle-o mr-2 text-color"></i>Recording Backup</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-file-text-o mr-2 text-color"></i>Assignments</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-bolt mr-2 text-color"></i>Quizzes</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-eye mr-2 text-color"></i>Topic Revisions</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-language mr-2 text-color"></i>Language</span> English</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-lightbulb mr-2 text-color"></i>Trainer level</span> Expert</li>
                                <li class="d-flex align-items-center justify-content-between"><span><i class="la la-users mr-2 text-color"></i>Students</span> 30,506</li>
                            </ul>
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Other Subjects</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item">
                                @foreach($subjects as $subject)
                                <li><a href="{{ route('subjectdetails',$subject->id) }}">{{ ucfirst($subject->title) }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end course-details-area -->
<!--======================================
        END COURSE DETAILS AREA
======================================-->

<!--======================================
        START RELATED COURSE AREA
======================================-->
<section class="related-course-area bg-gray pt-60px pb-60px">
    <div class="container">
        <div class="related-course-wrap">
            <h3 class="fs-28 font-weight-semi-bold pb-35px">More Subjects by <a href="{{ route('subjects',$subject->country_id) }}" class="text-color hover-underline">Matheducatorz</a></h3>
            <div class="view-more-carousel-2 owl-action-styled">
                 @foreach($subjects as $subject)
                <div class="card card-item">
                    <div class="card-image">
                        <a href="course-details.html" class="d-block">
                            <img class="card-img-top" src="{{ asset('storage/app/public/subjects') }}/{{ $subject->image }}" alt="Card image cap">
                        </a>
                        <div class="course-badge-labels">
                            <div class="course-badge">Bestseller</div>
                            <div class="course-badge blue">-39%</div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6>
                        <h5 class="card-title"><a href="{{ route('subjectdetails',$subject->id) }}">{{ $subject->title }}</a></h5>
                        <p class="card-text"><a href="{{ route('home') }}">Matheducatorz</a></p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                @endforeach
            </div><!-- end view-more-carousel -->
        </div><!-- end related-course-wrap -->
    </div><!-- end container -->
</section><!-- end related-course-area -->
<!--======================================
        END RELATED COURSE AREA
======================================-->

<!--======================================
        START CTA AREA
======================================-->
<section class="cta-area pt-60px pb-60px position-relative overflow-hidden">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="cta-content-wrap py-4 d-flex flex-wrap align-items-center">
                    <svg class="flex-shrink-0 mr-4" width="70" viewBox="0 -48 496 496" xmlns="http://www.w3.org/2000/svg"><path d="m472 0h-448c-13.230469 0-24 10.769531-24 24v352c0 13.230469 10.769531 24 24 24h448c13.230469 0 24-10.769531 24-24v-352c0-13.230469-10.769531-24-24-24zm8 376c0 4.414062-3.59375 8-8 8h-448c-4.40625 0-8-3.585938-8-8v-352c0-4.40625 3.59375-8 8-8h448c4.40625 0 8 3.59375 8 8zm0 0"></path><path d="m448 32h-400v240h400zm-16 224h-368v-208h368zm0 0"></path><path d="m328 200.136719c0-17.761719-11.929688-33.578125-29.007812-38.464844l-26.992188-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.449219-41.503906-11.183593-.96875-22.34375 2.800781-30.574219 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907l-26.992188 7.710937c-17.078124 4.886719-29.007812 20.703125-29.007812 38.464844v39.863281h160zm-16 23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312l-3.976562-2.3125c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.839844-13.160156 7.792969-17.695312 5.007812-4.601563 11.496093-6.832032 18.382812-6.207032 12.230469 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031zm0 0"></path><path d="m32 364.945312 73.886719-36.945312-73.886719-36.945312zm16-48 22.113281 11.054688-22.113281 11.054688zm0 0"></path><path d="m152 288h16v80h-16zm0 0"></path><path d="m120 288h16v80h-16zm0 0"></path><path d="m336 288h-48v32h-104v16h104v32h48v-32h128v-16h-128zm-16 64h-16v-48h16zm0 0"></path></svg>
                    <div class="section-heading">
                        <h2 class="section__title mb-1 fs-22">Become a Teacher, Share your knowledge</h2>
                        <p class="section__desc">Create an online video course, reach students across the globe, and earn money</p>
                    </div><!-- end section-heading -->
                </div>
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="cta-btn-box text-right">
                    <a href="become-a-teacher.html" class="btn theme-btn">Tech on Aduca <i class="la la-arrow-right icon ml-1"></i> </a>
                </div>
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!--======================================
        END CTA AREA
======================================-->

<div class="section-block"></div>
</div>
