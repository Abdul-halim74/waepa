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
Route::get('blog', function () {
     return view('frontend.blog');
});


Route::get('contact', function () {
     return view('frontend.contact');
});



// backend routes

Route::get('admin', function(){
	
	return view('backend.index');
});

