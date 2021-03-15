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

Route::get('/', 'Frontend_Controllers\FrontendViewController@view')->name('/');

// Route::get('/', function () {
//      echo "string";die;
//     return view('frontend.index');
// })->name('/');

// Route::get('show_ec_member', function () {
//      return view('frontend.show_ec_member');
// });

Route::get('show_ec_member', 'Frontend_Controllers\FrontendShowECMemberController@show_ec_member');
Route::get('show_life_member', 'Frontend_Controllers\FrontendShowECMemberController@show_life_member');
Route::get('show_honourable_member', 'Frontend_Controllers\FrontendShowECMemberController@show_honourable_member');
Route::get('show_general_member', 'Frontend_Controllers\FrontendShowECMemberController@show_general_member');
Route::get('show_former_ec_member', 'Frontend_Controllers\FrontendShowECMemberController@show_former_ec_member');

// Route::get('show_life_member', function () {
//      return view('frontend.show_life_member');
// });

// Route::get('show_general_member', function () {
//      return view('frontend.show_general_member');
// });

Route::get('show_testimonial', function () {
     return view('frontend.show_testimonial');
});



Route::get('eligibility_of_membership', function () {
     return view('frontend.eligibility_of_membership');
});


Route::get('member_registration', function () {
     return view('frontend.member_registration');
});

Route::get('about_us', function () {
     return view('frontend.about_us');
});




// Route::get('frontend_notice_details', function () {
//      return view('frontend.frontend_notice_details');
// });

Route::get('frontend_blog', 'Frontend_Controllers\FrontendBlogController@showblog');

Route::post('user_frontend_comment_submit', 'Frontend_Controllers\FrontendBlogController@insert_blog');


Route::get('contact', function () {
     return view('frontend.contact');
});

Route::post('contact_action','Frontend_Controllers\ContactController@insert');

// Route::get('single_member_profile', function () {
//      return view('frontend.single_member_profile');
// });

Route::get('single_member_profile/{id}', 'Frontend_Controllers\FrontendSingleMember@single_member_profile');




Route::post('registration', 'member\registrationController@member_register')->name('member.register');

Route::get('frontend/login', 'Frontend_Controllers\LoginController@login');
Route::post('frontend_login_submit', 'Frontend_Controllers\LoginController@login_submit');
Route::get('index', 'Frontend_Controllers\LoginController@successfull_login')->middleware('auth');
Route::get('frontend/logout', 'Frontend_Controllers\LoginController@logout')->middleware('auth');

Route::get('waepatalk', 'Frontend_Controllers\WaepaTalkController@waepa');



Route::get('waepagallary', 'Frontend_Controllers@gallary');


Route::get('frontend/enewsletter', 'Frontend_Controllers@enewsletter');
Route::get('enewsletter_details/{id}', 'Frontend_Controllers@enewsletter_details');

Route::post('user_frontend_enewsletter_comment_submit', 'Frontend_Controllers@user_frontend_enewsletter_comment_submit');

Route::post('user_frontend_seminar_comment_submit', 'Frontend_Controllers@user_frontend_seminar_comment_submit');

// Route::get('waepatalk',function () {
//      return view('frontend.digital_archive.waepatalk');
// });

// Route::get('waepagallary',function () {
//      return view('frontend.digital_archive.waepagallary');
// });

Route::get('blog_details/{id}','Frontend_Controllers\FrontendBlogController@blogdetails');

Route::get('frontend/notice','Frontend_Controllers\NoticeController@index');

// Route::get('frontend/notice',function () {
//      return view('frontend.notice');
// });

Route::get('about/about_us','Frontend_Controllers\FrontendAboutController@about_us');
Route::get('about/vission_mission','Frontend_Controllers\FrontendAboutController@vission_mission');
Route::get('about/aims_and_object','Frontend_Controllers\FrontendAboutController@aims_and_object');
Route::get('about/programs_of_waepa','Frontend_Controllers\FrontendAboutController@programs_of_waepa');

// Route::get('frontend/my_profile', function(){

//      return view('frontend.my_profile');
// });

Route::get('frontend/my_profile/{id}','Frontend_Controllers\FrontendMyProfileController@my_profile');

Route::get('my_profile_edit/{id}','Frontend_Controllers\FrontendMyProfileController@edit_my_profile')->middleware('auth');


Route::post('frontend/profile_update','Frontend_Controllers\FrontendMyProfileController@update_profile' )->name('frontend.update_my_profile');

// backend routes

Route::get('admin', 'Backend_Controllers\AdminLoginController@adminlogin');

//E-newsletter
Route::get('admin/create_enewsletter_category', 'Backend_Controllers\AdminEnewsletterController@create_enewsletter_category');

Route::get('edit_enewsletter_cat/{id}', 'Backend_Controllers\AdminEnewsletterController@edit_enewsletter_cat');






Route::post('admin/create_enewsletter_category_action', 'Backend_Controllers\AdminEnewsletterController@create_enewsletter_category_action');


Route::post('admin/enewsletter_category_update', 'Backend_Controllers\AdminEnewsletterController@enewsletter_category_update');

Route::post('admin/single_enewsletter_delete', 'Backend_Controllers\AdminEnewsletterController@single_enewsletter_delete');


Route::get('admin/create_enewsletter', 'Backend_Controllers\AdminEnewsletterController@create_enewsletter');
Route::get('admin/enewsletter_list', 'Backend_Controllers\AdminEnewsletterController@enewsletter_list');
Route::get('admin/enews_letter/edit/{id}', 'Backend_Controllers\AdminEnewsletterController@enewsletter_edit');
Route::post('admin/single_enewsletter_show', 'Backend_Controllers\AdminEnewsletterController@single_enewsletter_show');

Route::post('admin/enewsletter_update', 'Backend_Controllers\AdminEnewsletterController@enewsletter_update');

Route::post('admin/enewsletter_delete', 'Backend_Controllers\AdminEnewsletterController@enewsletter_delete');

Route::post('admin/create_enewsletter_action', 'Backend_Controllers\AdminEnewsletterController@create_enewsletter_action');


//end E-newsletter


//start seminar

Route::get('admin/seminar', 'Backend_Controllers\AdminEnewsletterController@seminar');
Route::get('admin/seminar_list', 'Backend_Controllers\AdminEnewsletterController@seminar_list');
Route::get('admin/seminar/edit/{id}', 'Backend_Controllers\AdminEnewsletterController@seminar_edit');

Route::get('frontend/seminar', 'Backend_Controllers\AdminEnewsletterController@frontend_seminar');
Route::get('seminar_details/{id}', 'Backend_Controllers\AdminEnewsletterController@frontend_seminar_details');

Route::post('admin/single_seminar_show', 'Backend_Controllers\AdminEnewsletterController@single_seminar_show');

Route::post('admin/single_seminar_delete', 'Backend_Controllers\AdminEnewsletterController@single_seminar_delete');

Route::post('admin/create_seminar_action', 'Backend_Controllers\AdminEnewsletterController@create_seminar_action');

Route::post('admin/seminar_update', 'Backend_Controllers\AdminEnewsletterController@seminar_update');



//end seminar


//start general Meeting

Route::get('admin/general_meeting', 'Backend_Controllers\AdminEnewsletterController@general_meeting');

Route::post('admin/create_general_meeting_action', 'Backend_Controllers\AdminEnewsletterController@create_general_meeting_action');


Route::get('admin/general_meeting_list', 'Backend_Controllers\AdminEnewsletterController@general_meeting_list');
Route::get('admin/general_meeting/edit/{id}', 'Backend_Controllers\AdminEnewsletterController@general_meeting_edit');

Route::post('admin/general_meeting_update', 'Backend_Controllers\AdminEnewsletterController@general_meeting_update');

Route::post('admin/single_general_meeting_delete', 'Backend_Controllers\AdminEnewsletterController@single_general_meeting_delete');

Route::post('admin/single_general_meeting_show', 'Backend_Controllers\AdminEnewsletterController@single_general_meeting_show');


Route::get('frontend/general_meeting', 'Backend_Controllers\AdminEnewsletterController@frontend_show_general_meeting');

Route::get('general_meeting_details/{id}', 'Backend_Controllers\AdminEnewsletterController@general_meeting_details');


Route::post('user_frontend_general_meeting_comment_submit', 'Backend_Controllers\AdminEnewsletterController@user_frontend_general_meeting_comment_submit');




//end general Meeting

//start social_events

Route::get('admin/social_events', 'Backend_Controllers\AdminEnewsletterController@social_events');
Route::get('admin/social_events_lists', 'Backend_Controllers\AdminEnewsletterController@social_events_lists');

Route::get('admin/social_events/edit/{id}', 'Backend_Controllers\AdminEnewsletterController@social_events_edit');

Route::post('admin/create_social_events_action', 'Backend_Controllers\AdminEnewsletterController@create_social_events_action');

Route::post('admin/single_social_events_show', 'Backend_Controllers\AdminEnewsletterController@single_social_events_show');

Route::post('admin/social_events_update', 'Backend_Controllers\AdminEnewsletterController@social_events_update');
Route::post('admin/single_social_events_delete', 'Backend_Controllers\AdminEnewsletterController@single_social_events_delete');


Route::get('frontend/social_events', 'Backend_Controllers\AdminEnewsletterController@frontend_social_events');
Route::get('social_events_details/{id}', 'Backend_Controllers\AdminEnewsletterController@social_events_details');

Route::post('user_frontend_social_events_submit', 'Backend_Controllers\AdminEnewsletterController@user_frontend_social_events_submit');

//end social_events

Route::get('admin/create_blog_category', 'Backend_Controllers\AdminBlogController@blogcategoryshow');


Route::get('admin/create_blog', 'Backend_Controllers\AdminBlogController@create_blog');

Route::post('admin/create_blog_action', 'Backend_Controllers\AdminBlogController@bloginsert');

Route::post('admin/create_blog_category_action', 'Backend_Controllers\AdminBlogController@blogcategoryinsert');

Route::get('admin/blog_list', 'Backend_Controllers\AdminBlogController@blogshow');
Route::post('admin/singleblogshow', 'Backend_Controllers\AdminBlogController@single_blog_show')->name('admin.singleblogshow');

Route::post('admin/singleMembershow', 'Backend_Controllers\AdminMemberController@single_member_show')->name('admin.singleMembershow');


Route::get('admin/ec_member_setting', 'Backend_Controllers\AdminMemberController@ec_member_setting')->name('admin.ec_member_setting');


Route::post('admin/create_ec_number_submit', 'Backend_Controllers\AdminMemberController@create_ec_number_submit')->name('admin.create_ec_number_submit');


Route::get('admin/ec_setting_data_edit/{id}', 'Backend_Controllers\AdminMemberController@ec_setting_data_edit');


Route::post('admin/edit_ec_number_update', 'Backend_Controllers\AdminMemberController@edit_ec_number_update');

Route::post('admin/ec_setting_delete', 'Backend_Controllers\AdminMemberController@ec_setting_delete');



Route::post('admin/singleblogdelete', 'Backend_Controllers\AdminBlogController@single_blog_delete')->name('admin.singleblogdelete');


Route::get('admin/blog/edit/{id}', 'Backend_Controllers\AdminBlogController@single_blog_edit')->name('admin.singleblogedit');

Route::get('admin/member/edit/{id}', 'Backend_Controllers\AdminMemberController@memberedit')->name('admin.memberedit');

Route::post('admin/update_member', 'Backend_Controllers\AdminMemberController@update_member')->name('admin.update_member');


Route::post('admin/update_blog_action', 'Backend_Controllers\AdminBlogController@single_blog_update')->name('admin.singleblogupdate');


Route::get('admin/member_lists','Backend_Controllers\AdminMemberController@memberlist')->name('admin.member');

Route::get('admin/about_us','Backend_Controllers\AdminAboutController@about_us');

Route::get('admin/vision_mission','Backend_Controllers\AdminAboutController@vision_mission');
Route::get('admin/aims_object','Backend_Controllers\AdminAboutController@aims_object');
Route::get('admin/programs_of_waepa','Backend_Controllers\AdminAboutController@programs_of_waepa');

Route::get('backend/waepa_talk','Backend_Controllers\WaepaTalkController@index');
Route::get('backend/waepa_talk_list','Backend_Controllers\WaepaTalkController@list');
Route::get('admin/waepatalk_edit/{id}','Backend_Controllers\WaepaTalkController@edit');
Route::post('admin/create_waepa_talk','Backend_Controllers\WaepaTalkController@create');
Route::post('admin/update_waepa_talk','Backend_Controllers\WaepaTalkController@update_waepa_talk');
Route::post('admin/single_waepa_delete','Backend_Controllers\WaepaTalkController@single_waepa_delete');

// gallary

Route::get('backend/create_a_gallary','Backend_Controllers\GallaryControllerler@index');
Route::get('backend/gallary_list','Backend_Controllers\GallaryControllerler@list');
Route::get('admin/gallary_edit/{id}','Backend_Controllers\GallaryControllerler@edit');

Route::post('admin/create_a_gallary_submit','Backend_Controllers\GallaryControllerler@create_a_gallary_submit');
Route::post('admin/update_gallary','Backend_Controllers\GallaryControllerler@update_gallary');
Route::post('admin/single_gallary_delete','Backend_Controllers\GallaryControllerler@single_gallary_delete');

//end  gallary
Route::get('admin/constitution','Backend_Controllers\ConstitutionControllerler@index');
Route::get('archive/constitution','Backend_Controllers\ConstitutionControllerler@front_cost');
Route::post('admin/constitution_submit','Backend_Controllers\ConstitutionControllerler@constitution_submit');


Route::post('admin/about_us_submit','Backend_Controllers\AdminAboutController@about_us_submit');
Route::post('admin/vision_mission_submit','Backend_Controllers\AdminAboutController@vision_mission_submit');
Route::post('admin/aims_obj_submit','Backend_Controllers\AdminAboutController@aims_obj_submit');
Route::post('admin/programs_waepa_submit','Backend_Controllers\AdminAboutController@programs_waepa_submit');




Route::post('sendmail/send','Backend_Controllers\SendEmailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Ramjan route

############################### Advertisement #################################
Route::group(['as'=> 'advert.','namespace'=>'Backend_Controllers'], function(){

Route::get('advertisment', 'AdvertController@index')->name('index');
Route::get('advertisment-create', 'AdvertController@create')->name('create');
Route::post('advertisment-create', 'AdvertController@store')->name('store');
Route::get('advertisment-edit/{id}', 'AdvertController@edit')->name('edit');
Route::post('advertisment-edit/{id}', 'AdvertController@update')->name('update');
Route::get('advertisment-active/{id}', 'AdvertController@active')->name('active');
Route::get('advertisment-inactive/{id}', 'AdvertController@inactive')->name('inactive');
Route::post('advertisment-delete', 'AdvertController@delete')->name('delete');

});
############################### end  Advertisement #################################

############################### Notice #################################
Route::group(['as'=>'notice.', 'namespace'=>'Backend_Controllers'], function(){
Route::get('notices', 'NoticeController@index')->name('index');
Route::get('notice-create', 'NoticeController@create')->name('create');
Route::Post('notice-create', 'NoticeController@store')->name('store');
Route::get('notice-edit/{id}', 'NoticeController@edit')->name('edit');
Route::post('notice-edit/{id}', 'NoticeController@update')->name('update');
Route::post('notice-delete', 'NoticeController@delete')->name('delete');
Route::get('notice-inactive/{id}', 'NoticeController@inactive')->name('inactive');
Route::get('notice-active/{id}', 'NoticeController@active')->name('active');
});


Route::get('frontend_notice_details/{id}', function ($id) {
      $data =DB::table('notice')->select('*')->where('id', $id)->first();
     return view('frontend.frontend_notice_details', compact('data'));
});



###############################  Slider ####################################

Route::group(['as'=> 'slider.', 'namespace'=>'Backend_Controllers'], function(){

    Route::get('slider', 'SliderController@index')->name('index');
    Route::get('slider-create', 'SliderController@create')->name('create');
    Route::post('slider-create', 'SliderController@store')->name('store');
    Route::get('slider-edit/{id}', 'SliderController@edit')->name('edit');
    Route::post('slider-edit/{id}', 'SliderController@update')->name('update');
    Route::post('slider-delete', 'SliderController@delete')->name('delete');
    Route::post('slider-delete', 'SliderController@delete')->name('delete');
    Route::get('slider-inactive/{id}', 'SliderController@inactive')->name('inactive');
    Route::get('slider-active/{id}', 'SliderController@active')->name('active');
});
############################### end Slider #################################




// Ramjan route


// samiul route

Route::get('admin/logo/index', 'Backend_Controllers\AdminLogoController@index')->name('admin.logo.index');
Route::get('admin/logo_edit/{id}', 'Backend_Controllers\AdminLogoController@logo_edit');

Route::get('admin/logo/create', 'Backend_Controllers\AdminLogoController@create')->name('admin.logo.create');
Route::post('admin/logo/store', 'Backend_Controllers\AdminLogoController@store')->name('admin.logo.store');
Route::get('admin/logo/active/{id}', 'Backend_Controllers\AdminLogoController@active')->name('admin.logo.active');
Route::get('admin/logo/deactive/{id}', 'Backend_Controllers\AdminLogoController@deactive')->name('admin.logo.deactive');
Route::get('admin/logo/destroy/{id}', 'Backend_Controllers\AdminLogoController@destroy')->name('admin.logo.destroy');


// samiul route