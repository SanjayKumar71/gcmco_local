<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\SiteController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\Auth\RegisterController;
use App\Http\Controllers\Front\Auth\LoginController;
use App\Http\Controllers\Front\ChangePasswordController;
use App\Http\Controllers\Front\ForgotPasswordController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Front\NewsletterController;
use App\Http\Controllers\Front\CampaignController;
use App\Http\Controllers\Front\StripeController;

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
    Route::get('history',[SiteController::class,'history'])->name('history');
    Route::get('gcm_team',[SiteController::class,'gcm_team'])->name('gcm_team');
    Route::get('statement_of_faith',[SiteController::class,'statement_of_faith'])->name('statement_of_faith');
    Route::get('who_we_are',[SiteController::class,'who_we_are'])->name('who_we_are');
    Route::get('give',[CampaignController::class,'getCampaignsData'])->name('give');
    Route::get('sponsor',[SiteController::class,'sponsor'])->name('sponsor');
    Route::get('news_article',[SiteController::class,'news_article'])->name('news_article');
    Route::get('news_article_detail',[SiteController::class,'news_article_detail'])->name('news_article_detail');
    Route::get('gallery',[SiteController::class,'gallery'])->name('gallery');
    Route::get('video',[SiteController::class,'video'])->name('video');
    Route::get('where_most_needed',[SiteController::class,'where_most_needed'])->name('where_most_needed');
    Route::get('women_distress',[SiteController::class,'women_distress'])->name('women_distress');
    Route::get('hungary_kid',[SiteController::class,'hungary_kid'])->name('hungary_kid');
    Route::get('contact_information',[SiteController::class,'contact_information'])->name('contact_information');
    Route::get('request_speaker',[SiteController::class,'request_speaker'])->name('request_speaker');
    Route::get('giveus_form/{id}',[SiteController::class,'giveus_form'])->name('giveus_form');
    Route::get('get_involved',[SiteController::class,'get_involved'])->name('get_involved');
    
    Route::get('signup',[RegisterController::class,'signUpForm'])->name('signup');
    Route::post('signup',[RegisterController::class,'create'])->name('signup.create');


    Route::get('contact-us',[SiteController::class,'contact_us'])->name('contact-us');
    Route::post('contact_queries', [ContactController::class,'store'])->name('contact_queries.store');
    
    Route::get('sign-in',[SiteController::class,'sign_in'])->name('sign-in');
    Route::post('sign-in',[LoginController::class,'post_sign_in'])->name('sign-in.account');

    Route::get('account',[SiteController::class,'account'])->name('account');
    Route::get('logout', [SiteController::class, 'logout'])->name('logout');

    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('change-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    Route::post('change-password',[SiteController::class,'change_password'])->name('change-password');
    Route::post('change-password', [ChangePasswordController::class,'changePassword'])->name('change_password');
    
    Route::get('about-us',[SiteController::class,'about_us'])->name('about-us');
    Route::get('enter-email',[SiteController::class,'enter_email'])->name('enter-email');
    Route::get('terms-condition',[PagesController::class,'terms_condition'])->name('terms-condition');
    Route::get('privacy-policy',[PagesController::class,'privacy_policy'])->name('privacy-policy');
    Route::get('cancellation-policy',[PagesController::class,'cancellation_policy'])->name('cancellation-policy');
    Route::post('newsletter', [NewsletterController::class,'store'])->name('newsletter.store');

    Route::any('payment',[PaymentController::class,'payment'])->name('payment');
    Route::post('checkout',[PaymentController::class,'checkout'])->name('checkout');
    Route::get('saved-cards/{id}', [UserController::class, 'getSavedCardDetail'])->name('users.getSavedCardDetail');
    Route::post('make-default/{id}', [UserController::class, 'makeDefault'])->name('users.makeDefault');
    
    // Route::get('stripe', [StripeController::class, 'stripe']);
    Route::post('stripe', [StripeController::class, 'stripePost'])->name('store');

});