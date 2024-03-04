<?php

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


Route::get('/', 'PageController@home')->name('home');

Route::post('/contact', 'ContactController@getContactForm')->name('contact_path');

/*
|--------------------------------------------------------------------------
| Backend CMs
|--------------------------------------------------------------------------
*/
Auth::routes();

/*******  Home page  *********/
Route::get('/cms/home', 'HomePageController@homepage')->name('cms_home');
Route::post('/cms/home-header-store', 'HomePageController@storeHomePage')->name('cms_home_store');
/*******  Home page Ending *********/


/*******  Sliders ********/
Route::get('/cms/sliders', 'SliderController@index')->name('cms_sliders');
Route::get('/cms/slider-create', 'SliderController@create')->name('cms_slider_create');
Route::post('/cms/slider-store', 'SliderController@store')->name('cms_slider_store');
Route::get('/cms/slider-edit-{id}', 'SliderController@edit')->name('cms_slider_edit');
Route::post('/cms/slider-update-{id}', 'SliderController@update')->name('cms_slider_update');
Route::delete('/cms/slider-delete-{id}', 'SliderController@delete')->name('cms_slider_delete');
/*******  Sliders  Ending */

/*******  About Section  *********/
Route::get('/cms/about', 'HomePageController@about')->name('cms_about');
Route::post('/cms/about-header-store', 'HomePageController@storeAbout')->name('cms_about_store');
/*******  About Section Ending *********/

/*******  Services ********/
Route::get('/cms/services', 'ServiceController@index')->name('cms_services');
Route::get('/cms/service-create', 'ServiceController@create')->name('cms_service_create');
Route::post('/cms/service-store', 'ServiceController@store')->name('cms_service_store');
Route::get('/cms/service-edit-{id}', 'ServiceController@edit')->name('cms_service_edit');
Route::post('/cms/service-update-{id}', 'ServiceController@update')->name('cms_service_update');
Route::delete('/cms/service-delete-{id}', 'ServiceController@delete')->name('cms_service_delete');
/*******  Services  Ending */

/*******  Projects  Section  *********/
Route::get('/cms/projects', 'ProjectController@index')->name('cms_projects');
Route::get('/cms/project-create', 'ProjectController@create')->name('cms_project_create');
Route::post('/cms/project-store', 'ProjectController@store')->name('cms_project_store');
Route::get('/cms/project-edit-{id}', 'ProjectController@edit')->name('cms_project_edit');
Route::post('/cms/project-update-{id}', 'ProjectController@update')->name('cms_project_update');
Route::delete('/cms/project-delete-{id}', 'ProjectController@delete')->name('cms_project_delete');

/*******  Projects  Section Ending *********/


/******* Projects Images Slider  *********/
Route::prefix('/project-images-{id}')->group(function() {
    Route::get("/image", "PortfolioController@index")->name("cms_project_images");
    Route::get("/create", "PortfolioController@create")->name("cms_project_image_create");
    Route::post("/store", "PortfolioController@store")->name("cms_project_image_store");
    Route::get("/edit-{image_id}", "PortfolioController@edit")->name("cms_project_image_edit");
    Route::post("/{image_id}-update", "PortfolioController@update")->name("cms_project_image_update");
    Route::delete("/{image_id}-delete", "PortfolioController@delete")->name("cms_project_image_delete");
    });
/*******  Projects  Images Slider End  *********/
/*******  Team ********/
Route::get('/cms/team', 'TeamController@index')->name('cms_team');
Route::get('/cms/team-create', 'TeamController@create')->name('cms_team_create');
Route::post('/cms/team-store', 'TeamController@store')->name('cms_team_store');
Route::get('/cms/team-edit-{id}', 'TeamController@edit')->name('cms_team_edit');
Route::post('/cms/team-update-{id}', 'TeamController@update')->name('cms_team_update');
Route::delete('/cms/team-delete-{id}', 'TeamController@delete')->name('cms_team_delete');
/*******  Team  Ending */


/*******  Review ********/
Route::get('/cms/reviews', 'ReviewController@index')->name('cms_reviews');
Route::get('/cms/review-create', 'ReviewController@create')->name('cms_review_create');
Route::post('/cms/review-store', 'ReviewController@store')->name('cms_review_store');
Route::get('/cms/review-edit-{id}', 'ReviewController@edit')->name('cms_review_edit');
Route::post('/cms/review-update-{id}', 'ReviewController@update')->name('cms_review_update');
Route::delete('/cms/review-delete-{id}', 'ReviewController@delete')->name('cms_review_delete');
/*******  Review  Ending */



/*******  Contact Section  *********/
Route::get('/cms/contact', 'HomePageController@contact')->name('cms_contact');
Route::post('/cms/contact-store', 'HomePageController@storeContact')->name('cms_contact_store');
/*******  Contact Section Ending *********/

/*******  settings   *********/
Route::get('/cms/settings', 'SettingsController@index')->name('cms_settings');
Route::post('/cms/settings-store', 'SettingsController@store')->name('cms_settings_store');
/*******  settings  Ending *********/
/*******  Seo Pages *********/
Route::get('/cms/seo', 'SeoPageController@index')->name('seoCms');
Route::get('/cms/seo-edit-{id}', 'SeoPageController@edit')->name('seoEdit');
Route::post('/cms/seo-update-{id}', 'SeoPageController@update')->name('seoUpdate');
/*******  Seo Pages Ending */

