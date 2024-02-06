<?php

use App\Http\Controllers\Frontend\FooterMenuController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AcademicsController;

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

// Auth Routes
require __DIR__ . '/auth.php';

// Newsletter
Route::get('newsletter','App\Http\Controllers\Frontend\MailChimpController@index');
Route::post('newsletter', 'App\Http\Controllers\Frontend\MailChimpController@store')->name('newsletter.store');

Route::get('dashboard', 'App\Http\Controllers\Frontend\FrontendController@index')->name('dashboard');
/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.','middleware' =>['visitor']], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('home', 'FrontendController@index')->name('home');
    Route::get('privacy', 'FrontendController@privacy')->name('privacy');
    Route::get('terms', 'FrontendController@terms')->name('terms');
    Route::get('contacts', 'ContactController@index')->name('contacts');
    Route::post('contactForm', 'ContactController@store')->name('contactForm');
    Route::post('showInterest', 'ShowInterestController@store')->name('showInterest');
    Route::get('event', 'EventController@index')->name('event');
    Route::get('eventdetail/{eventdetail}', 'EventDetailsController@eventdetail')->name('eventdetail');
    Route::get('sri-balaji-university', 'SriBalajiUniversityController@index')->name('sri-balaji-university');
    Route::get('topbrass', 'LeadershipController@index')->name('topbrass');
    Route::get('details/{details}', 'DetailsController@details')->name('details');
    Route::get('newsdetails/{newsdetails}', 'NewsDetailController@newsdetails')->name('newsdetails');
    Route::post('downloadBrochure','AdmissionController@downloadBrochure')->name('downloadBrochure');
    Route::post('downloadBrochurePhd','AdmissionController@downloadBrochurePhd')->name('downloadBrochurePhd');

    /** Faculties Routes */
    Route::get('faculty', 'FacultyController@index')->name('faculty');
    Route::get('corefaculty', 'FacultyController@corefaculty')->name('corefaculty');
    Route::get('multifaculty', 'FacultyController@multifaculty')->name('multifaculty');
    Route::get('visitingfaculty', 'FacultyController@visitingfaculty')->name('visitingfaculty');
    Route::get('facultydetails/{details}', 'FacultyDetailsController@details')->name('details');
    
    /**-----Home Controller---- */
    Route::get('homePage', 'HomeController@index')->name('homePage');

    /**-----Footer Controller---- */
    Route::get('footerMenu', [FooterMenuController::class, 'index'])->name('footerMenu');

    /**-----About Controller---- */
    Route::get('about', 'AboutController@index')->name('about');
    Route::get('aboutbiib', 'AboutController@aboutbiib')->name('aboutbiib');
    Route::get('whybiib', 'AboutController@whybiib')->name('whybiib');
    Route::get('sribalajiuniversity', 'AboutController@university')->name('sribalajiuniversity');
    Route::get('ourchancellor', 'AboutController@chancellor')->name('ourchancellor');
    Route::get('topbrass', 'AboutController@leadership')->name('topbrass');
    Route::get('infrastructure', 'AboutController@infrastructure')->name('infrastructure');
    Route::get('aicteapprovals', 'AboutController@aicteapprovals')->name('aicteapprovals');
    Route::get('library', 'AboutController@library')->name('library');
    Route::get('nirf', 'AboutController@nirf')->name('nirf');
    
    /** Industry Controller **/
    Route::get('industryinterface', 'IndustryController@index')->name('industryinterface');
    Route::get('guestlectures', 'IndustryController@guestlectures')->name('guestlectures');
    Route::get('leadershiptraining', 'IndustryController@leadershiptraining')->name('leadershiptraining');
    Route::get('internships', 'IndustryController@internships')->name('internships');
    Route::get('businessconvention', 'IndustryController@businessconvention')->name('businessconvention');

    /** Academics Controller **/
    Route::controller(AcademicsController::class)->group(function () {
        Route::get('academics', 'index')->name('academics');
        Route::get('mouphillipcapitalindia', 'mouCapital')->name('mouphillipcapitalindia');
        Route::get('mousapindia', 'mouSap')->name('mousapindia');
        Route::get('classbasedtraining', 'classBasedTraining')->name('classbasedtraining');
        Route::get('inductionprogram', 'inductionProgram')->name('inductionprogram');
    });

    /** Placement Controller **/
    Route::controller(PlacementsController::class)->group(function () {
        Route::get('placements', 'index')->name('placements');
    });

    /** Admission Controller **/
    Route::controller(AdmissionController::class)->group(function () {
        Route::get('admission', 'index')->name('admission');
    });

    /*** Student Council Controller ***/
    Route::get('students', 'StudentsController@index')->name('students');
    
    /*** Alumni Controller ***/
    Route::get('alumni', 'AlumniController@index')->name('alumni');

    /*** Testimonial Controller ***/
    Route::get('testimonials', 'TestimonialsController@index')->name('testimonials');
    
    /** Sitemap Controller Route **/
    Route::get('sitemap', 'SitemapController@index')->name('sitemap');

    /**-----Settings Controller---- */
    Route::get('settings', 'SettingsController@index');

    /**-----Page Controller */
    $module_name = 'page';
    $controller_name = 'PagesController';

    /**-----Page Controller---- */
    Route::get("$module_name", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/{pageName}/{slug}", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index"]);


    //  /**-----Enquiry Controller---- */
    //  Route::post('enquiries', 'EnquiryController@store');

    Route::group(['middleware' => ['auth']], function () {
        /*
        *
        *  Users Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'users';
        $controller_name = 'UserController';
        Route::get('profile/{id}', ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
        Route::get('profile/{id}/edit', ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
        Route::patch('profile/{id}/edit', ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
        Route::get('profile/changePassword/{username}', ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
        Route::patch('profile/changePassword/{username}', ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
        Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
        Route::delete("$module_name/userProviderDestroy", ['as' => "$module_name.userProviderDestroy", 'uses' => "$controller_name@userProviderDestroy"]);
    });
});

/*
*
* Backend Routes
* These routes need view-backend permission
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'App\Http\Controllers\Backend', 'prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', 'can:view_backend']], function () {
    /**
     * Backend Dashboard
     * Namespaces indicate folder structure.
     */
    Route::get('/', 'BackendController@index')->name('home');
    Route::get('/', 'BackendController@index')->name('dashboard');

    /*
     *
     *  Settings Routes
     *
     * ---------------------------------------------------------------------
     */
    Route::group(['middleware' => ['permission:edit_settings']], function () {
        $module_name = 'settings';
        $controller_name = 'SettingController';
        Route::get("$module_name", "$controller_name@index")->name("$module_name");
        Route::post("$module_name", "$controller_name@store")->name("$module_name.store");
    });

    /*
    *
    *  Notification Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'notifications';
    $controller_name = 'NotificationsController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/markAllAsRead", ['as' => "$module_name.markAllAsRead", 'uses' => "$controller_name@markAllAsRead"]);
    Route::delete("$module_name/deleteAll", ['as' => "$module_name.deleteAll", 'uses' => "$controller_name@deleteAll"]);
    Route::get("$module_name/{id}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);

    /*
    *
    *  Backup Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'backups';
    $controller_name = 'BackupController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/create", ['as' => "$module_name.create", 'uses' => "$controller_name@create"]);
    Route::get("$module_name/download/{file_name}", ['as' => "$module_name.download", 'uses' => "$controller_name@download"]);
    Route::get("$module_name/delete/{file_name}", ['as' => "$module_name.delete", 'uses' => "$controller_name@delete"]);

    /*
    *
    *  Roles Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'roles';
    $controller_name = 'RolesController';
    Route::resource("$module_name", "$controller_name");

    /*
    *
    *  Users Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'users';
    $controller_name = 'UserController';
    Route::get("$module_name/profile/{id}", ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
    Route::get("$module_name/profile/{id}/edit", ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
    Route::patch("$module_name/profile/{id}/edit", ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
    Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
    Route::delete("$module_name/userProviderDestroy", ['as' => "$module_name.userProviderDestroy", 'uses' => "$controller_name@userProviderDestroy"]);
    Route::get("$module_name/profile/changeProfilePassword/{id}", ['as' => "$module_name.changeProfilePassword", 'uses' => "$controller_name@changeProfilePassword"]);
    Route::patch("$module_name/profile/changeProfilePassword/{id}", ['as' => "$module_name.changeProfilePasswordUpdate", 'uses' => "$controller_name@changeProfilePasswordUpdate"]);
    Route::get("$module_name/changePassword/{id}", ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
    Route::patch("$module_name/changePassword/{id}", ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::resource("$module_name", "$controller_name");
    Route::patch("$module_name/{id}/block", ['as' => "$module_name.block", 'uses' => "$controller_name@block", 'middleware' => ['permission:block_users']]);
    Route::patch("$module_name/{id}/unblock", ['as' => "$module_name.unblock", 'uses' => "$controller_name@unblock", 'middleware' => ['permission:block_users']]);
});
