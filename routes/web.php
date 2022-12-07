<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\SiteController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Front\NewsletterController;
use App\Http\Controllers\Front\CampaignController;
use App\Http\Controllers\Front\NewsArticleController;
use App\Http\Controllers\Front\StripeController;
use App\Http\Controllers\Front\RequestSpeakerController;
use App\Http\Controllers\Front\SponsorController;
use App\Http\Controllers\Front\PhotoGalleryController;
use App\Http\Controllers\Front\VideoController;
use App\Http\Controllers\Front\HistoryController;
use App\Http\Controllers\Front\GCMTeamController;
use App\Http\Controllers\Front\StatementOfFaithController;
use App\Http\Controllers\Front\WhoWeAreController;

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
    Route::get('history',[HistoryController::class,'history'])->name('history');
    Route::get('gcm_team',[GCMTeamController::class,'gcm_team'])->name('gcm_team');
    Route::get('statement_of_faith',[StatementOfFaithController::class,'statement_of_faith'])->name('statement_of_faith');
    Route::get('who_we_are',[WhoWeAreController::class,'who_we_are'])->name('who_we_are');
    Route::get('give',[CampaignController::class,'getCampaignsData'])->name('give');
    Route::get('sponsor',[SponsorController::class,'getSponsor'])->name('sponsor');
    Route::get('news_article',[NewsArticleController::class,'news_article'])->name('news_article');
    Route::get('news_article_detail/{id?}',[NewsArticleController::class,'news_article_detail'])->name('news_article_detail');
    Route::get('gallery',[PhotoGalleryController::class,'gallery'])->name('gallery');
    Route::get('video',[VideoController::class,'video'])->name('video');
    Route::get('default_give/{id}',[SiteController::class,'default_give'])->name('default_give');
    Route::get('get_involved_form/{id}/{campaign_id?}',[SiteController::class,'get_involved_form'])->name('get_involved_form');
    Route::get('where_most_needed',[SiteController::class,'where_most_needed'])->name('where_most_needed');
    Route::get('women_distress',[SiteController::class,'women_distress'])->name('women_distress');
    Route::get('hungary_kid',[SiteController::class,'hungary_kid'])->name('hungary_kid');
    Route::get('contact_information',[ContactController::class,'contact_information'])->name('contact_information');
    Route::post('contact_queries', [ContactController::class,'store'])->name('contact_queries.store');

    Route::get('request_speaker',[RequestSpeakerController::class,'request_speaker'])->name('request_speaker');
    Route::post('request_speaker',[RequestSpeakerController::class,'request_speaker_store'])->name('request_speaker.store');

    Route::get('giveus_form/{id}',[SiteController::class,'giveus_form'])->name('giveus_form');
    Route::get('get_involved',[SiteController::class,'get_involved'])->name('get_involved');

    Route::get('about-us',[SiteController::class,'about_us'])->name('about-us');
    Route::get('terms-condition',[PagesController::class,'terms_condition'])->name('terms-condition');
    Route::get('privacy-policy',[PagesController::class,'privacy_policy'])->name('privacy-policy');
    Route::get('cancellation-policy',[PagesController::class,'cancellation_policy'])->name('cancellation-policy');
    Route::post('newsletter', [NewsletterController::class,'store'])->name('newsletter.store');
    
    Route::post('stripe', [StripeController::class, 'stripePost'])->name('store');

});