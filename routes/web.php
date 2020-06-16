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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'HomeController@c_layout')->name('/');
Route::get('main_page', 'HomeController@main_page')->name('main_page'); 
Route::get('j_layout', 'HomeController@j_layout')->name('j_layout');
Route::get('main_category', 'HomeController@main_category')->name('main_category');
// dummy category layout
Route::get('d_category_layout', 'HomeController@d_category_layout')->name('d_category_layout');

Route::get('about', 'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('header2', 'HomeController@header2')->name('header2');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('c_layout', 'HomeController@c_layout')->name('c_layout');

Route::get('a_layout', 'HomeController@a_layout')->name('a_layout');

Route::get('logo', 'adminController@logo')->name('logo');
Route::post('logo_insert', 'adminController@logo_insert')->name('logo_insert');
Route::get('client_review', 'adminController@client_review')->name('client_review');
Route::get('review_active/{id}/{active}', 'adminController@review_active')->name('review_active');


route::get('banner','bannercontroller@banner')->name('banner');
route::post('banner_insert','bannercontroller@banner_insert')->name('banner_insert');
route::get('banner_active/{id}/{active}','bannercontroller@banner_active')->name('banner_active');
route::get('editbanner/{id}','bannercontroller@editbanner')->name('editbanner');
route::post('updatebanner','bannercontroller@updatebanner')->name('updatebanner');
route::post('deletebanner','bannercontroller@deletebanner')->name('deletebanner');

route::get('works','workcontroller@works')->name('works');

route::post('works_insert','workcontroller@works_insert')->name('works_insert');

route::get('works_active/{id}/{active}','workcontroller@works_active')->name('works_active');

Route::get('editcategory/{id}','categorycontroller@editcategory')->name('editcategory');
Route::get('deletecategory/{id}','categorycontroller@deletecategory')->name('deletecategory');

route::post('updatcategory','categorycontroller@updatcategory')->name('u_category');

// route::get('service','categorycontroller@service')->name('service');
route::get('category','categorycontroller@category')->name('category');
route::POST('category_insert','categorycontroller@category_insert')->name('category_insert');
Route::get('cate_layout', 'HomeController@cate_layout')->name('cate_layout');
// ajax pagination
Route::post('c_layout/pagination', 'HomeController@fetch_data')->name('pagination.fetch');

Route::get('cate_name', 'categorycontroller@cate_name')->name('cate_name');
Route::post('cate_name_insert', 'categorycontroller@cate_name_insert')->name('cate_name_insert');

Route::get('subcate_name', 'categorycontroller@subcate_name')->name('subcate_name');
Route::post('subcate_name_insert', 'categorycontroller@subcate_name_insert')->name('subcate_name_insert');

// for subcategory dropdown data
Route::post('subcate_list', 'categorycontroller@subcate_list')->name('subcate_list');

// for modal page//
Route::get('modal1/{id}','modalcontroller@modal1')->name('modal1');
Route::post('form','modalcontroller@form')->name('form');

Route::get('cate_vise_data/{id}', 'categorycontroller@cate_vise_data')->name('cate_vise_data');



// portfolio page
Route::get('portfolio_start', 'portfoliocontroller@portfolio_start')->name('portfolio_start');
Route::post('portfolio_insert', 'portfoliocontroller@portfolio_insert')->name('portfolio_insert');
Route::get('portfolio_layout', 'HomeController@portfolio_layout')->name('portfolio_layout');

// banner image dynamic
Route::get('b_image', 'banner_imagecontroller@b_image')->name('b_image');
Route::post('b_image_insert', 'banner_imagecontroller@b_image_insert')->name('b_image_insert');





Route::get('all', 'HomeController@all')->name('all');


Route::get('category_display', 'HomeController@category_display')->name('category_display');

// about page dynamic
Route::get('about_content', 'aboutcontroller@about_content')->name('about_content');
Route::post ('content_insert', 'aboutcontroller@content_insert')->name('content_insert');
Route::post('review_form','aboutcontroller@review_form')->name('review_form');





// admin login start//

// Route::get('admin/home', 'Admin_logincontroller@index1')->name('admin_main');

Route::get('admin_layout', 'Admin_logincontroller@index1')->name('admin_layout');
Route::get('admin/admin_home', 'Admin\RegisterController@admin_home')->name('admin_home');


Route::group(['middleware' => 'admin_auth'], function() 
{

Route::post('/admin/logout', 'Admin\LoginController@logout')->name('admin_logout');
});

Route::group(['middleware' => 'admin_auth_guest'], function() 
{


Route::get('/admin/register','admin\RegisterController@showregisterform')->name('admin_register');

Route::post('/admin/register', 'admin\RegisterController@admin_register_submit')->name('admin_register_submit');

Route::get('/admin/login_d', 'Admin\LoginController@showLoginForm')->name('admin_login');
Route::get('/admin', 'Admin\LoginController@login_d')->name('admin_login1');
Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('admin_login');



Route::post('admin/signin', 'Admin\LoginController@Login')->name('admin_login_submit');


Route::post('/admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::get('/admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::post('/admin-password/reset', 'Admin\ResetPasswordController@reset');

Route::get('/admin-password/reset{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

});


// admin side add  quality
Route::get('add_quality', 'addtocartcontroller@add_quality')->name('add_quality');
Route::post('q_insert', 'addtocartcontroller@q_insert')->name('q_insert');
// admin side add Quantity
Route::get('add_quantity', 'addtocartcontroller@add_quantity')->name('add_quantity');
Route::post('q_insert1', 'addtocartcontroller@q_insert1')->name('q_insert1');
// admin side card side insert
Route::get('add_side', 'addtocartcontroller@add_side')->name('add_side');
Route::post('side_insert', 'addtocartcontroller@side_insert')->name('side_insert');
// price list
Route::get('price_list', 'addtocartcontroller@price_list')->name('price_list');
Route::post('price_list_insert', 'addtocartcontroller@price_list_insert')->name('price_list_insert');


// particular categoryvise data display on cate_layout page//
Route::get('par_category/{id}', 'categorycontroller@par_category')->name('par_category');

Route::get('modal123', 'modalController@modal123')->name('modal123');
route::post('quantity_list','addtocartcontroller@quantity_list')->name('quantity_list');
route::post('side_list','addtocartcontroller@side_list')->name('side_list');
route::post('total_list','modalcontroller@total_list')->name('total_list');






// trt pages
route::get('tryabout','aboutcontroller@tryabout')->name('tryabout');
// model123page try 
Route::post('change_table_query','modalcontroller@change_table_query')->name('change_table_query');

// trypage routes
// 
// 
// 
route::get('my_reg','trycontroller@my_reg')->name('my_reg'); 
route::get('trydropdown','trycontroller@trydropdown')->name('trydropdown');
route::get('trymain_layout','trycontroller@trymain_layout')->name('trymain_layout');

// route::post('dd_list','trycontroller@dd_list')->name('dd_list');
route::post('dd_list','modalcontroller@dd_list')->name('dd_list');
route::post('quantity_list1','modalcontroller@quantity_list1')->name('quantity_list1');
route::post('side_list1','modalcontroller@side_list1')->name('side_list1');

// bill book start
route::get('bill_book','modalcontroller@bill_book')->name('bill_book');
route::post('bill_book_info','modalcontroller@bill_book_info')->name('bill_book_info');
route::post('b_quantity_list','modalcontroller@b_quantity_list')->name('b_quantity_list');
route::post('bill_total_list','modalcontroller@bill_total_list')->name('bill_total_list');

// admin side bill book data enter

route::get('bill_book_size','facilitycontroller@bill_book_size')->name('bill_book_size');
route::post('bill_book_size_insert','facilitycontroller@bill_book_size_insert')->name('bill_book_size_insert');
 
route::get('bill_book_quantity','facilitycontroller@bill_book_quantity')->name('bill_book_quantity');
route::post('bill_book_quantity_insert','facilitycontroller@bill_book_quantity_insert')->name('bill_book_quantity_insert');

route::get('bill_book_pricelist','facilitycontroller@bill_book_pricelist')->name('bill_book_pricelist');
route::post('bill_book_pricelist_insert','facilitycontroller@bill_book_pricelist_insert')->name('bill_book_pricelist_insert');

// envelop start
route::get('envelop','modalcontroller@envelop')->name('envelop');
route::post('envelop_info','modalcontroller@envelop_info')->name('envelop_info');
route::post('e_quantity_list','modalcontroller@e_quantity_list')->name('e_quantity_list');
route::post('e_total_list','modalcontroller@e_total_list')->name('e_total_list');

// ***************admin side insert envelop detail
route::get('e_quality','facilitycontroller@e_quality')->name('e_quality');
route::post('e_quality_insert','facilitycontroller@e_quality_insert')->name('e_quality_insert');
route::get('e_quantity','facilitycontroller@e_quantity')->name('e_quantity');
route::post('e_quantity_insert','facilitycontroller@e_quantity_insert')->name('e_quantity_insert');
route::get('envelop_pricelist','facilitycontroller@envelop_pricelist')->name('envelop_pricelist');
route::post('envelop_pricelist_insert','facilitycontroller@envelop_pricelist_insert')->name('envelop_pricelist_insert');
route::post('e_quantity_list','facilitycontroller@e_quantity_list')->name('e_quantity_list');







// handbill start
route::get('handbill','modalcontroller@handbill')->name('handbill');
route::post('handbill_info','modalcontroller@handbill_info')->name('handbill_info');
route::post('h_quantity_list','modalcontroller@h_quantity_list')->name('h_quantity_list');
route::post('h_side_list1','modalcontroller@h_side_list1')->name('h_side_list1');
route::post('h_total_list','modalcontroller@h_total_list')->name('h_total_list');


// handbill admin side add

route::get('handbill_size','facilitycontroller@handbill_size')->name('handbill_size');
route::post('handbill_size_insert','facilitycontroller@handbill_size_insert')->name('handbill_size_insert');
route::get('handbill_quantity','facilitycontroller@handbill_quantity')->name('handbill_quantity');
route::post('handbill_quantity_insert','facilitycontroller@handbill_quantity_insert')->name('handbill_quantity_insert');
route::get('handbill_side','facilitycontroller@handbill_side')->name('handbill_side');
route::post('handbill_side_insert','facilitycontroller@handbill_side_insert')->name('handbill_side_insert');
route::post('h_quantity_list','facilitycontroller@h_quantity_list')->name('h_quantity_list');
route::get('handbill_pricelist','facilitycontroller@handbill_pricelist')->name('handbill_pricelist');
route::post('handbill_pricelist_insert','facilitycontroller@handbill_pricelist_insert')->name('handbill_pricelist_insert');
route::post('h_side_list','facilitycontroller@h_side_list')->name('h_side_list');


// visiting card
route::get('visitingcard','modalcontroller@visitingcard')->name('visitingcard');
route::post('visitingcard_info','modalcontroller@visitingcard_info')->name('visitingcard_info');


// laterpad start
route::get('laterpad','modalcontroller@laterpad')->name('laterpad');
route::post('laterpad_info','modalcontroller@laterpad_info')->name('laterpad_info');
route::post('l_total_list','modalcontroller@l_total_list')->name('l_total_list');


// ***********laterpad admin side insert*******
route::get('laterpad_size','facilitycontroller@laterpad_size')->name('laterpad_size');
route::post('laterpad_size_insert','facilitycontroller@laterpad_size_insert')->name('laterpad_size_insert');
route::get('laterpad_quantity','facilitycontroller@laterpad_quantity')->name('laterpad_quantity');
route::post('laterpad_quantity_insert','facilitycontroller@laterpad_quantity_insert')->name('laterpad_quantity_insert');
route::get('laterpad_pricelist','facilitycontroller@laterpad_pricelist')->name('laterpad_pricelist');
route::post('laterpad_pricelist_insert','facilitycontroller@laterpad_pricelist_insert')->name('laterpad_pricelist_insert');

route::post('l_quantity_list','facilitycontroller@l_quantity_list')->name('l_quantity_list');





// banner start
route::get('banner','modalcontroller@banner')->name('banner');
route::post('banner_info','modalcontroller@banner_info')->name('banner_info');
route::post('banner_total_list','modalcontroller@banner_total_list')->name('banner_total_list');

// *************admin side banner
route::get('banner_quality','facilitycontroller@banner_quality')->name('banner_quality');
route::post('banner_quality_insert','facilitycontroller@banner_quality_insert')->name('banner_quality_insert');

route::get('banner_quantity','facilitycontroller@banner_quantity')->name('banner_quantity');
route::post('banner_quantity_insert','facilitycontroller@banner_quantity_insert')->name('banner_quantity_insert');
route::get('banner_pricelist','facilitycontroller@banner_pricelist')->name('banner_pricelist');
route::post('banner_pricelist_insert','facilitycontroller@banner_pricelist_insert')->name('banner_pricelist_insert');
route::post('banner_quantity_list','facilitycontroller@banner_quantity_list')->name('banner_quantity_list');


// 
// 
// 
// cart routes
route::get('showcart','shopingcartcontroller@showcart')->name('showcart');
Route::get('/cart', 'shopingcartcontroller@cart')->name('cart');
Route::post('/add', 'shopingcartcontroller@add')->name('cart.store');
Route::post('/update', 'shopingcartcontroller@update')->name('cart.update');
Route::post('/remove', 'shopingcartcontroller@remove')->name('cart.remove');
Route::post('/clear', 'shopingcartcontroller@clear')->name('cart.clear');

Route::post('finalcart', 'modalcontroller@finalcart')->name('finalart');
Route::post('cate_info_store', 'modalcontroller@cate_info_store')->name('cate_info_store');
route::post('contactus_save', 'HomeController@contactus_save')->name('contactus_save');

// pay u money 
route::post('payumoney', 'payumoneycontroller@payumoney')->name('payumoney');
route::post('payment_view_sucess', 'payumoneycontroller@payment_view_sucess')->name('payment_view_sucess');

route::post('payment_view_failure', 'payumoneycontroller@payment_view_failure')->name('payment_view_failure');


route::get('show_contact_mails','notificationController@show_contact_mails')->name('show_contact_mails');

route::get('show_contact_mails_display/{id}','notificationController@show_contact_mails_display')->name('show_contact_mails_display');



route::get('order','ordercontroller@order')->name('order');
route::post('showdetail/{pid}','ordercontroller@showdetail')->name('showdetail');




// (______________________________________________________________________________________________)
// admin shide route
route::get('user_detail','admincontroller@user_detail')->name('user_detail');
route::get('admin_detail','admincontroller@admin_detail')->name('admin_detail');
route::get('dashboard','admincontroller@dashboard')->name('dashboard');;


view::composer(['*'],function($view){

	$cart = \Cart::getContent();
	// dd($cart);
	$view->with('cart',$cart);
});



