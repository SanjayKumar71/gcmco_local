<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\SiteController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\Auth\RegisterController;
use App\Http\Controllers\Front\Auth\LoginController;
use App\Http\Controllers\Front\ProgramsController;
use App\Http\Controllers\Front\AccountController;
use App\Http\Controllers\Front\ChangePasswordController;
use App\Http\Controllers\Front\UpdatePersonalDetailController;
use App\Http\Controllers\Front\ForgotPasswordController;
use App\Http\Controllers\Front\CategoryController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Front\NewsletterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'App\Http\Controllers\Front'], function () {
    Route::get('/',[SiteController::class,'index'])->name('index');
    Route::get('about-us',[SiteController::class,'about_us'])->name('about-us');
    Route::get('contact-us',[SiteController::class,'contact_us'])->name('contact-us');
    Route::post('contact_queries', [ContactController::class,'store'])->name('contact_queries.store');
    
    Route::get('sign-in',[SiteController::class,'sign_in'])->name('sign-in');
    Route::post('sign-in',[LoginController::class,'post_sign_in'])->name('sign-in.account');
    
    Route::get('sign-up',[SiteController::class,'sign_up'])->name('sign-up');
    Route::post('sign-up',[RegisterController::class, 'create'])->name('sign-up.create');

    Route::get('logout', [SiteController::class, 'logout'])->name('logout');

    Route::get('account',[SiteController::class,'account'])->name('account');
    
    Route::get('enter-email',[SiteController::class,'enter_email'])->name('enter-email');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('change-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

    Route::post('change-password',[SiteController::class,'change_password'])->name('change-password');
    
    Route::get('terms-condition',[PagesController::class,'terms_condition'])->name('terms-condition');
    Route::get('privacy-policy',[PagesController::class,'privacy_policy'])->name('privacy-policy');
    Route::get('cancellation-policy',[PagesController::class,'cancellation_policy'])->name('cancellation-policy');

    Route::get('everything-disc',[SiteController::class,'everything_disc'])->name('everything-disc');
    Route::get('first-aid',[SiteController::class,'first_aid'])->name('first-aid');
    Route::get('heartsaver',[SiteController::class,'heartsaver'])->name('heartsaver');
    Route::get('program-detail/{programId}',[ProgramsController::class,'programsDetail'])->name('program-detail');
    Route::get('program-detail-book/{programId}/{programSessionId}',[ProgramsController::class,'programsDetailBook'])->name('program-detail-book');
    Route::get('book-program/{programId}/{programSessionId}',[CategoryController::class,'bookProgram'])->name('book-program');
    Route::any('payment',[PaymentController::class,'payment'])->name('payment');
    Route::post('checkout',[PaymentController::class,'checkout'])->name('checkout');
    
    Route::post('change-password', [ChangePasswordController::class,'changePassword'])->name('change_password');
    Route::post('update-personal-detail', [UpdatePersonalDetailController::class,'updateDetail'])->name('update_detail');

    Route::get('sessions/{id}', [UserController::class, 'showPastSession'])->name('users.showPastSession');
    Route::get('upcomingsessions/{id}', [UserController::class, 'showUpcomingSession'])->name('users.showUpcomingSession');
    Route::get('canceledSessions/{id}', [UserController::class, 'showCanceledSession'])->name('users.showCanceledSession');
    Route::get('cancelSession/{id}', [UserController::class, 'cancelSession'])->name('users.CancelSession');

    Route::post('file-upload', [UserController::class, 'fileUploadPost'])->name('file.upload.post');
    Route::get('share-documents/{id}', [UserController::class, 'getFileDetails'])->name('users.getFileDetails');
    Route::get('download-file/{id}', [UserController::class, 'downloadFile'])->name('user.downloadFile');
    Route::get('saved-cards/{id}', [UserController::class, 'getSavedCardDetail'])->name('users.getSavedCardDetail');
    Route::post('make-default/{id}', [UserController::class, 'makeDefault'])->name('users.makeDefault');

    Route::post('newsletter', [NewsletterController::class,'store'])->name('newsletter.store');
    
});