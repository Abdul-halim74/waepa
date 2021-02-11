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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('show_ec_member', function () {
     return view('frontend.show_ec_member');
});

Route::get('show_life_member', function () {
     return view('frontend.show_life_member');
});

Route::get('show_general_member', function () {
     return view('frontend.show_general_member');
});

Route::get('show_testimonial', function () {
     return view('frontend.show_testimonial');
});


Route::get('member_registration', function () {
     return view('frontend.member_registration');
});
Route::get('blog', 'Frontend_Controllers\FrontendBlogController@showblog');


Route::get('contact', function () {
     return view('frontend.contact');
});

Route::get('single_member_profile', function () {
     return view('frontend.single_member_profile');
});



// backend routes

Route::get('admin', function(){
	
	return view('backend.index');
});



Route::get('admin/create_blog_category', 'Backend_Controllers\AdminBlogController@blogcategoryshow');




Route::get('admin/create_blog', 'Backend_Controllers\AdminBlogController@create_blog');

Route::post('admin/create_blog_action', 'Backend_Controllers\AdminBlogController@bloginsert');

Route::post('admin/create_blog_category_action', 'Backend_Controllers\AdminBlogController@blogcategoryinsert');

Route::get('admin/blog_list', 'Backend_Controllers\AdminBlogController@blogshow');
Route::post('admin/singleblogshow', 'Backend_Controllers\AdminBlogController@single_blog_show')->name('admin.singleblogshow');


Route::post('admin/singleblogdelete', 'Backend_Controllers\AdminBlogController@single_blog_delete')->name('admin.singleblogdelete');


Route::get('admin/blog/edit/{id}', 'Backend_Controllers\AdminBlogController@single_blog_edit')->name('admin.singleblogedit');


Route::post('admin/update_blog_action', 'Backend_Controllers\AdminBlogController@single_blog_update')->name('admin.singleblogupdate');


Route::post('registration', 'member\registrationController@member_register')->name('member.register');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
