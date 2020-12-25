<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('/auth')->name('auth.')->group(function () {
    
    // Admin Routes
    Route::get('/admin_login',  'Auth\Admin\LoginController@loginPage')->name('admin_login');
    Route::post('/login_admin',  'Auth\Admin\LoginController@login')->name('login_admin');
    Route::get('/logout_admin',  'Auth\Admin\LoginController@logout')->name('logout_admin');
    // End of Admin Routes
});


Route::prefix('/admin')->name('admin.')->group(function () {
    #Dashboard Routes
    Route::get('/dashboard',  'Admin\DashboardController@dashboard')->name('dashboard');

    // Component Routes

    // Mandate Routes
    Route::get('/component/mandate/index',  'Admin\Component\MandateController@index')->name('component.mandate.index');
    Route::post('/component/mandate/store',  'Admin\Component\MandateController@storeMandate')->name('component.mandate.store');
    Route::post('/component/mandate/update',  'Admin\Component\MandateController@updateMandate')->name('component.mandate.update');
    Route::get('/component/mandate/status/{id}',  'Admin\Component\MandateController@mandateStatus')->name('component.mandate.status');
    // End of Mandate Routes

    // Mission Routes
    Route::get('/component/mission/index',  'Admin\Component\MissionController@index')->name('component.mission.index');
    Route::post('/component/mission/store',  'Admin\Component\MissionController@storeMission')->name('component.mission.store');
    Route::post('/component/mission/update',  'Admin\Component\MissionController@updateMission')->name('component.mission.update');
    Route::get('/component/mission/status/{id}',  'Admin\Component\MissionController@missionStatus')->name('component.mission.status');
    // End of Mission Routes

    // Vision Routes
    Route::get('/component/vision/index',  'Admin\Component\VisionController@index')->name('component.vision.index');
    Route::post('/component/vision/store',  'Admin\Component\VisionController@storeVision')->name('component.vision.store');
    Route::post('/component/vision/update',  'Admin\Component\VisionController@updateVision')->name('component.vision.update');
    Route::get('/component/vision/status/{id}',  'Admin\Component\VisionController@visionStatus')->name('component.vision.status');
    // End of Vision Routes

    // End of Component Routes

    // Blog Routes
    Route::get('/blog/index',  'Admin\BlogController@index')->name('blog.blog_index');
    Route::get('/blog/add',  'Admin\BlogController@addBlog')->name('blog.blog_add');
    Route::post('/blog/store',  'Admin\BlogController@storeBlog')->name('blog.blog_store');
    Route::get('/blog/edit/{id}',  'Admin\BlogController@editBlog')->name('blog.blog_edit');
    Route::post('/blog/update',  'Admin\BlogController@updateBlog')->name('blog.blog_update');
    Route::get('/blog/status/{id}',  'Admin\BlogController@blogStatus')->name('blog.blog_status');
    // End of Blog Routes

    // Admin Routes
    Route::get('/user/admin/index',  'Admin\User\AdminController@index')->name('user.admin.index');
    Route::get('/user/admin/add',  'Admin\User\AdminController@addAdmin')->name('user.admin.add');
    Route::post('/user/admin/store',  'Admin\User\AdminController@storeAdmin')->name('user.admin.store');
    Route::get('/user/admin/edit/{id}',  'Admin\User\AdminController@editAdmin')->name('user.admin.edit');
    Route::post('/user/admin/update',  'Admin\User\AdminController@updateAdmin')->name('user.admin.update');
    Route::get('/user/admin/status/{id}',  'Admin\User\AdminController@adminStatus')->name('user.admin.status');
    // End of Admin Routes

    // Admin Profile Routes
    Route::get('/user/admin/profile',  'Admin\User\AdminController@profile')->name('user.admin.profile');
    Route::post('/user/admin/profile_update',  'Admin\User\AdminController@updateProfile')->name('user.admin.profile_update');
    // End of Admin Profile Routes

     // Team Routes
     Route::get('/team/index',  'Admin\TeamController@index')->name('team.team_index');
     Route::post('/team/store',  'Admin\TeamController@storeTeam')->name('team.team_store');
     Route::get('/team/edit/{id}',  'Admin\TeamController@editTeam')->name('team.team_edit');
     Route::post('/team/update',  'Admin\TeamController@updateTeam')->name('team.team_update');
     Route::get('/team/status/{id}',  'Admin\TeamController@teamStatus')->name('team.team_status');
     Route::get('/team/delete/{id}',  'Admin\TeamController@deleteTeam')->name('team.team_delete');
     // End of Team Routes

     // Event Routes
     Route::get('/event/index',  'Admin\EventController@index')->name('event.event_index');
     Route::post('/event/store',  'Admin\EventController@storeEvent')->name('event.event_store');
     Route::get('/event/edit/{id}',  'Admin\EventController@editEvent')->name('event.event_edit');
     Route::post('/event/update',  'Admin\EventController@updateEvent')->name('event.event_update');
     Route::get('/event/status/{id}',  'Admin\EventController@eventStatus')->name('event.event_status');
    //  Route::get('/event/delete/{id}',  'Admin\EventController@deleteEvent')->name('event.event_delete');
     // End of Event Routes
});

    
    // Welcome Routes
    Route::get('/',  'Welcome\WelcomeController@index');
    // End of Welcome Routes