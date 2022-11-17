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
            Route::resource('administrators', 'AdministratorsController');
            Route::resource('pages', 'PagesController');
            Route::resource('blogs', 'BlogsController');
            Route::resource('events', 'EventsController');
            Route::resource('category', 'CategoryController');
            Route::resource('program_type', 'ProgramTypeController');
            Route::resource('programs', 'ProgramsController');
            Route::resource('program_session', 'ProgramSessionController');
            Route::resource('user_documents', 'UserDocumentController');
            Route::resource('success_stories', 'SuccessStoryController');
            Route::resource('site-settings', 'SiteSettingsController');
            Route::resource('users', 'UsersController');
            Route::resource('contact_queries', 'ContactController');
            Route::resource('bookings', 'BookingController');
            Route::resource('testimonials', 'TestimonialsController');
            Route::resource('home_content', 'HomeController');
            Route::resource('home_section_three', 'HomeSectionThreeController');
            Route::resource('about_us', 'AboutUsController');
            Route::resource('about_us_program_section', 'AboutUsProgramSectionController');
            Route::resource('work_with_me', 'WorkWithMeController');
            Route::resource('help', 'HelpsController');
            Route::resource('newsletter', 'NewsletterController');
            Route::resource('partnership_affiliation', 'PartnershipAffiliationController');
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
