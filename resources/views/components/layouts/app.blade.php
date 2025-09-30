<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Matheducatorz | Educational Hub</title>

    <!-- vendor css -->
    <link href="{{ asset('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/chartist/chartist.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/medium-editor/medium-editor.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/lib/medium-editor/default.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bracket.css') }}">
  </head>
  <style>
    .error{
      border:1px solid red;
    }
    .card , .card-header , .card-footer {
      border-radius:none;
    }
      .active {
          background-color:#DC3545 !important;
          color:white !important; 
      }
    </style>
  <body>

    <div class="br-logo"><a href=""><span>[</span>Matheducatorz<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Educational Hub</label>
        @if(Auth::user()->is_admin == 1)
        <div class="br-sideleft-menu">
              <a href="{{ route('admin.dashboard') }}" class="br-menu-link active">
                  <div class="br-menu-item">
                      <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                      <span class="menu-item-label">Dashboard</span>
                  </div>
              </a>
              <a href="{{ route('admin.trailrequest') }}" class="br-menu-link">
                  <div class="br-menu-item">
                      <i class="menu-item-icon icon ion-ios-person tx-22"></i>
                      <span class="menu-item-label">Trail Requests</span>
                  </div>
              </a>
              <a href="#" class="br-menu-link">
                  <div class="br-menu-item">
                      <i class="menu-item-icon fa fa-headphones tx-24"></i>
                      <span class="menu-item-label">Classes</span>
                      <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub nav flex-column">
                  <li class="nav-item"><a href="{{ route('admin.createmeetings') }}" class="nav-link">Today Classes</a></li>
                  <li class="nav-item"><a href="{{ route('admin.meetings') }}" class="nav-link"> Pending Recordings</a></li>
                  <li class="nav-item"><a href="{{ route('admin.classchedule') }}" class="nav-link">Classes Schedule</a></li>
              </ul>
              <a href="#" class="br-menu-link">
                  <div class="br-menu-item">
                      <i class="menu-item-icon icon ion-ios-book tx-24"></i>
                      <span class="menu-item-label">Subjects</span>
                      <i class="menu-item-arrow fa fa-angle-down"></i>
                  </div><!-- menu-item -->
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub nav flex-column">
                  <li class="nav-item"><a href="{{ route('admin.subjectcreate') }}" class="nav-link">Create Subject</a></li>
                  <li class="nav-item"><a href="{{ route('admin.subjects') }}" class="nav-link">All Subjects</a></li>
              </ul>
        </div>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-person tx-24"></i>
            <span class="menu-item-label">Trainers</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.createtrainers') }}" class="nav-link">Create Trainers</a></li>
            <li class="nav-item"><a href="{{ route('admin.alltrainers') }}" class="nav-link">All Trainers</a></li>
            <li class="nav-item"><a href="{{ route('admin.trainersubject') }}" class="nav-link">Subject</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon fa fa-money tx-20"></i>
            <span class="menu-item-label">Fee Structure</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.createpackage') }}" class="nav-link">New Package</a></li>
            <li class="nav-item"><a href="{{ route('admin.packages') }}" class="nav-link">All Packages</a></li>
            <li class="nav-item"><a href="{{ route('pacakge.facilities') }}" class="nav-link">Facilities</a></li>
            <li class="nav-item"><a href="{{ route('pacakge.category') }}" class="nav-link">Category</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon fa fa-plus-circle tx-20"></i>
            <span class="menu-item-label">Admissions</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('new.admission') }}" class="nav-link">New Admission</a></li>
            <li class="nav-item"><a href="{{ route('re.admission') }}" class="nav-link">Existing Admission</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon fa fa-users tx-20"></i>
            <span class="menu-item-label">Students</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.students') }}" class="nav-link">All students</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon fa fa-dollar tx-20"></i>
            <span class="menu-item-label">Accounts</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.fee') }}" class="nav-link">Fee's</a></li>
            <li class="nav-item"><a href="{{ route('monthly.fee') }}" class="nav-link">Current Month</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon fa fa-clock-o fa-spin tx-20"></i>
            <span class="menu-item-label">Timings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('create.slot') }}" class="nav-link">Slot</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Details</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon fa fa-cog tx-20"></i>
            <span class="menu-item-label">Settings</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('profile.settings') }}" class="nav-link">Profile</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon fa fa-globe tx-20"></i>
            <span class="menu-item-label">General</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.countries') }}" class="nav-link">Countries</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon fa fa-user-plus tx-20"></i>
            <span class="menu-item-label">User Management</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('user.management') }}" class="nav-link">Add User</a></li>
            <li class="nav-item"><a href="{{ route('user.all') }}" class="nav-link">Users</a></li>
        </ul>
        @elseif(Auth::user()->is_student == 1)
        <div class="br-sideleft-menu">
              <a href="{{ route('student.dashboard') }}" class="br-menu-link active">
                  <div class="br-menu-item">
                      <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                      <span class="menu-item-label">Dashboard</span>
                  </div>
              </a>
              <a href="{{ route('your.subject') }}" class="br-menu-link">
                  <div class="br-menu-item">
                      <i class="menu-item-icon icon ion-ios-person tx-22"></i>
                      <span class="menu-item-label">Your Subjects</span>
                  </div>
              </a>
              <a href="{{ route('your.assignments') }}" class="br-menu-link">
                  <div class="br-menu-item">
                      <i class="menu-item-icon fa fa-headphones tx-24"></i>
                      <span class="menu-item-label">Assignments</span>
                  </div><!-- menu-item -->
              </a><!-- br-menu-link -->
              <a href="{{ route('profile.accounts') }}" class="br-menu-link">
                  <div class="br-menu-item">
                      <i class="menu-item-icon icon ion-ios-book tx-24"></i>
                      <span class="menu-item-label">Accounts</span>
                  </div><!-- menu-item -->
              </a><!-- br-menu-link -->
              <a href="{{ route('profile.settings') }}" class="br-menu-link">
                  <div class="br-menu-item">
                      <i class="menu-item-icon icon ion-ios-book tx-24"></i>
                      <span class="menu-item-label">Settings</span>
                  </div><!-- menu-item -->
              </a><!-- br-menu-link -->
        </div>
        @elseif(Auth::user()->is_trainer == 1)
        <div class="br-sideleft-menu">
            <a href="{{ route('teacher.dashbaord') }}" class="br-menu-link active">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div>
            </a>
            <a href="{{ route('teacher.students') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon fa fa-users tx-18"></i>
                    <span class="menu-item-label">Your Students</span>
                </div>
            </a>
              <a href="{{ route('teacher.scheduale',Auth::user()->trainer->id) }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon fa fa-clock-o tx-18"></i>
                    <span class="menu-item-label">My Schedule</span>
                </div>
            </a>
            <a href="{{ route('teacher.assignments') }}" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon fa fa-list tx-18"></i>
                    <span class="menu-item-label">Assignments</span>
                </div>
            </a>
        </div>
        @endif
        <a href="{{ route('logout') }}" class="br-menu-link">
            <div class="br-menu-item">
            <i class="menu-item-icon fa fa-sign-out tx-20"></i>
            <span class="menu-item-label">Logout</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
      </div>
      <br>
    </div>

  
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div>
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
          
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
              <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>
                <a href="" class="tx-11">Mark All as Read</a>
              </div>

              <div class="media-list">
               
                <a href="" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span class="tx-12">October 03, 2017 8:45am</span>
                    </div>
                  </div>
                </a>
                <div class="pd-y-10 tx-center bd-t">
                  <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">{{ ucfirst(Auth::user()->name) }}</span>
              <img src="{{ asset('storage/app/public/profile') }}/{{ Auth::user()->photo }}" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                <li><a href="{{ route('logout') }}"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

  
    <div class="br-mainpanel">
      <div class="container">
        @if(Auth::user()->is_student == 1)
        @livewire('student.alerts')
        @endif
        {{ $slot }}
      </div>
    </div>
    <script src="{{ asset('admin/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/moment/moment.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('admin/lib/peity/jquery.peity.js') }}"></script>
    <script src="{{ asset('admin/lib/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('admin/lib/chartist/chartist.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('admin/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('admin/js/bracket.js') }}"></script>
    <script src="{{ asset('admin/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/lib/medium-editor/medium-editor.js') }}"></script>
    <script src="{{ asset('admin/lib/highlightjs/highlight.pack.js') }}"></script>
    
    <script src="{{ asset('admin/lib//jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/lib//popper.js/popper.js') }}"></script>
    <script src="{{ asset('admin/lib//bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/lib//perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('admin/lib//moment/moment.js') }}"></script>
    <script src="{{ asset('admin/lib//summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('admin/lib//jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/lib//jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('admin/lib//peity/jquery.peity.js') }}"></script>
    <script src="{{ asset('admin/lib//highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('admin/lib//medium-editor/medium-editor.js') }}"></script>
    <script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
  </body>
</html>
