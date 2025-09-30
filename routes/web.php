<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::namespace('App\Livewire\Client')->group(function(){
    Route::get('/','Home','Home')->name('home');
    Route::get('/about','About')->name('about');
    Route::get('/contact','Contact')->name('contact');
    Route::get('/subjects/{id}','Subjects')->name('subjects');
    Route::get('/subject/details/{id}','Subjectdetails')->name('subjectdetails');
    Route::get('/pricing/{id}','Pricing')->name('pricing');
    Route::get('/terms','Terms')->name('terms');
    Route::get('/blog','Blog')->name('blog');
    Route::get('/login','Login')->name('login');
    Route::get('/book/tail','Trailclass')->name('trail.book');
});
// login ..
Route::get('/login','App\Livewire\Login')->name('login');
Route::prefix('student')->middleware('student')->namespace('App\Livewire\Student')->group(function(){
    Route::get('/dashboard','Dashboard')->name('student.dashboard');
    Route::get('/subjects','Yoursubjects')->name('your.subject');
    Route::get('/subject/lectures/{id}','Lectures')->name('enrollment.lectures');
    Route::get('/assignments','Assignments')->name('your.assignments');
    Route::get('/settings','Settings')->name('profile.settings');
    Route::get('/accounts','Accounts')->name('profile.accounts');
});
// trainer ..
Route::prefix('teacher')->namespace('App\Livewire\Teachers')->middleware('teacher')->group(function(){
    Route::get('/dashboard','Dashboard')->name('teacher.dashbaord');
    Route::get('/students','Yourstudents')->name('teacher.students');
    Route::get('/profile/{id}','Studentdetails')->name('student.details');
    Route::get('/my-scheduale/{id}','Scheduale')->name('teacher.scheduale');
    Route::get('/assignments','Assignments')->name('teacher.assignments');
});
// admin ..
Route::prefix('admin')->middleware('admin')->namespace('App\Livewire\Admin')->group(function(){
    Route::get('/dashboard','Dashboard')->name('admin.dashboard');
    Route::get('/trail-request','Trailclass')->name('admin.trailrequest');
    
    // meetings route ..
    Route::prefix('meetings')->namespace('Meetings')->group(function(){
        Route::get('/create','Create')->name('admin.createmeetings');
        Route::get('/classes/schedule','Classeschedule')->name('admin.classchedule');
        Route::get('/recodings','Allmettings')->name('admin.meetings');
    });
    // subjects ..
    Route::prefix('subjects')->namespace('Subject')->group(function(){
        Route::get('/create','Create')->name('admin.subjectcreate');
        Route::get('/all','Allsubjects')->name('admin.subjects');
        Route::get('/grade/{id}','Grade\Years')->name('subject.grade');
        Route::get('/grade/lessons/{id}','Lessons\Create')->name('create.lessons');
        Route::get('/details/{id}','Details\All')->name('subject');
        Route::get('/subject/details/{id}','Details\Detail')->name('subject.details');
    });
    // Trainers ..
    Route::prefix('trainers')->namespace('Trainers')->group(function(){
        Route::get('/create','Create')->name('admin.createtrainers');
        Route::get('/all','Alltrainers')->name('admin.alltrainers');
        Route::get('/subject','Subject')->name('admin.trainersubject');
        Route::get('/profile/{id}','Profile')->name('admin.profile');
    });
    // fee structure ..
    Route::prefix('packages')->namespace('Packages')->group(function(){
        Route::get('/all','Membership')->name('admin.packages');
        Route::get('/create','Create')->name('admin.createpackage');
        Route::get('/facilities','Facilities')->name('pacakge.facilities');
        Route::get('/category','Category')->name('pacakge.category');
    });
    // students ..
    Route::prefix('students')->namespace('Students')->group(function(){
        Route::get('/all','Allstudents')->name('admin.students');
        Route::get('/profile/{id}','Profile')->name('admin.studentsprofile');
        Route::get('/new','Admission')->name('new.admission');
        Route::get('/re-admission','Readmission')->name('re.admission');
        Route::get('/pay/{id}','Pay')->name('feeproccess');
        Route::get('/trainer/{id}','Assigntrainer')->name('assign.trainer');
        Route::get('/enrollment/{id}','Lectures')->name('enrollment.lecture');
    });
    // accounts
    Route::prefix('accounts')->namespace('Accounts')->group(function(){
        Route::get('/fee','Feestructure')->name('admin.fee');
        Route::get('month','Monthfee')->name('monthly.fee');
        Route::get('/enrollment/fee{id}','FeeDetails')->name('enrollment.fee');
    });
    // time table ..
    Route::prefix('slot')->group(function(){
        Route::get('/create','Slot')->name('create.slot');
    });
    // settings ...
    Route::prefix('settings')->group(function(){
        Route::get('/profile','Settings')->name('profile.settings');
    });
    Route::prefix('general')->namespace('General')->group(function(){
        Route::get('/countries','Locations')->name('admin.countries');
    });
    // user management ..
    Route::prefix('user-management')->namespace('Usermanagement')->group(function(){
        Route::get('/add','Adduser')->name('user.management');
        Route::get('/users','Users')->name('user.all');
    });
    
});
Route::get('/logout',function(){
    Auth::logout();
    return redirect(route('home'));
})->name('logout');
