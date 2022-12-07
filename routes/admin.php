<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin', 'IndexController@index')->name('login'); // for redirection purpose
Route::get('/real-notifications', function () {
    return view('admin.index');
});
Route::name('admin.')->group(
    function () {

        Route::get('/', 'IndexController@index');

        # to show login form
        Route::get('/auth/login', [
            'uses'  => 'Auth\LoginController@showLoginForm',
            'as'    => 'auth.login'
        ]);

        # login form submits to this route
        Route::post('/auth/login', [
            'uses'  => 'Auth\LoginController@login',
            'as'    => 'auth.login'
        ]);

        # logs out admin user
        # it was post method before I recieved MethodNotAllowedHttpException
        Route::any('/auth/logout', [
            'uses'  => 'Auth\LoginController@logout',
            'as'    => 'auth.logout'
        ]);

        # Password reset routes
        Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
        Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

        # shows dashboard
        Route::get('dashboard', [
            'uses'  => 'DashboardController@index',
            'as'    => 'dashboard.index'
        ]);

//        Route::middleware(['permission'])->group(function () {
            Route::resource('home_content', 'HomeController');
            Route::resource('history', 'HistoryController');
            Route::resource('gcm_team', 'GCMTeamController');
            Route::resource('what_they_say', 'WhatTheySayController');
            Route::resource('who_we_are', 'WhoWeAreController');
            Route::resource('statement_of_faith', 'StatementOfFaithController');
            Route::resource('sponsors', 'SponsorController');
            Route::resource('contact_queries', 'ContactController');
            Route::resource('speaking_events', 'SpeakingEventController');
            Route::resource('speakers', 'SpeakerController');
            Route::resource('speaker_requests', 'SpeakerRequestController');
            Route::resource('about_us', 'AboutUsController');
            Route::resource('administrators', 'AdministratorsController');
            Route::resource('campaigns', 'CampaignController');
            Route::resource('sub_campaigns', 'SubCampaignController');
            Route::resource('donation_types', 'DonationTypeController');
            Route::resource('donation_amount', 'DonationAmountController');
            Route::resource('transactions', 'TransactionController');
            Route::resource('news_articles', 'NewsArticleController');
            Route::resource('photo_gallery', 'PhotoGalleryController');
            Route::resource('videos', 'VideoController');
            Route::resource('pages', 'PagesController');
            Route::resource('users', 'UsersController');
            Route::resource('newsletter', 'NewsletterController');
            Route::resource('site-settings', 'SiteSettingsController');
//        });

        # To show change password form
        Route::get('/change-password', [
            'uses'  => 'UsersController@changePassword',
            'as'    => 'users.change-password'
        ]);

        # Change password form submits to this route
        Route::post('/change-password', [
            'uses'  => 'UsersController@processChangePassword',
            'as'    => 'users.change-password'
        ]);
    }
);
