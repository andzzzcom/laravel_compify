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

//admin panel routes
Route::get("admin/login", "Admin\Home@login");
Route::post("admin/login_action", "Admin\Home@login_action");
Route::group(['middleware'=>'authuser'], function(){
	Route::group(['prefix'=>'admin'], function(){
		Route::get("home", "Admin\Home@home");
		Route::get("logout", "Admin\Home@logout");
	
		//product
		Route::get("list_category", "Admin\Category@list_category");
		Route::get("add_category", "Admin\Category@add_category");
		Route::post("add_category_action", "Admin\Category@add_category_action");
		Route::get("edit_category/{id_category}", "Admin\Category@edit_category");
		Route::post("edit_category_action", "Admin\Category@edit_category_action");
		Route::get("delete_category/{id_category}", "Admin\Category@delete_category");
		Route::post("delete_category_action", "Admin\Category@delete_category_action");

		//gallery
		Route::get("gallery", "Admin\Gallery@index");
		Route::get("gallery/add", "Admin\Gallery@add");
		Route::post("gallery/add_act", "Admin\Gallery@add_act");
		Route::get("gallery/edit/{id_img}", "Admin\Gallery@edit");
		Route::post("gallery/edit_act", "Admin\Gallery@edit_act");
		Route::get("gallery/delete/{id_img}", "Admin\Gallery@delete");
		Route::post("gallery/delete_act", "Admin\Gallery@delete_act");

		//team
		Route::get("team", "Admin\Team@index");
		Route::get("team/add", "Admin\Team@add");
		Route::post("team/add_act", "Admin\Team@add_act");
		Route::get("team/edit/{id_team}", "Admin\Team@edit");
		Route::post("team/edit_act", "Admin\Team@edit_act");
		Route::get("team/delete/{id_team}", "Admin\Team@delete");
		Route::post("team/delete_act", "Admin\Team@delete_act");

		//product
		Route::get("product", "Admin\Product@index");
		Route::get("product/add", "Admin\Product@add");
		Route::post("product/add_act", "Admin\Product@add_act");
		Route::get("product/edit/{id_prod}", "Admin\Product@edit");
		Route::post("product/edit_act", "Admin\Product@edit_act");
		Route::get("product/delete/{id_prod}", "Admin\Product@delete");
		Route::post("product/delete_act", "Admin\Product@delete_act");

		//blog
		Route::get("blog", "Admin\Blog@index");
		Route::get("blog/add", "Admin\Blog@add");
		Route::post("blog/add_act", "Admin\Blog@add_act");
		Route::get("blog/edit/{id_blog}", "Admin\Blog@edit");
		Route::post("blog/edit_act", "Admin\Blog@edit_act");
		Route::get("blog/delete/{id_blog}", "Admin\Blog@delete");
		Route::post("blog/delete_act", "Admin\Blog@delete_act");

		//blog category
		Route::get("blog_cat", "Admin\BlogCategory@index");
		Route::get("blog_cat/add", "Admin\BlogCategory@add");
		Route::post("blog_cat/add_act", "Admin\BlogCategory@add_act");
		Route::get("blog_cat/edit/{id_cat}", "Admin\BlogCategory@edit");
		Route::post("blog_cat/edit_act", "Admin\BlogCategory@edit_act");
		Route::get("blog_cat/delete/{id_cat}", "Admin\BlogCategory@delete");
		Route::post("blog_cat/delete_act", "Admin\BlogCategory@delete_act");

		//pages
		Route::get("pages", "Admin\Pages@index");
		Route::get("pages/add", "Admin\Pages@add");
		Route::post("pages/add_act", "Admin\Pages@add_act");
		Route::get("pages/edit/{id_page}", "Admin\Pages@edit");
		Route::post("pages/edit_act", "Admin\Pages@edit_act");
		Route::get("pages/delete/{id_page}", "Admin\Pages@delete");
		Route::post("pages/delete_act", "Admin\Pages@delete_act");
		
		//inbox
		Route::get("inbox", "Admin\Inbox@index");
		Route::get("inbox/delete/{id_page}", "Admin\Inbox@delete");
		Route::post("inbox/delete_act", "Admin\Inbox@delete_act");

		//admin
		Route::get("admin", "Admin\Admin@index");
		Route::get("admin/add", "Admin\Admin@add");
		Route::post("admin/add_act", "Admin\Admin@add_act");
		Route::get("admin/edit/{id_admin}", "Admin\Admin@edit");
		Route::post("admin/edit_act", "Admin\Admin@edit_act");
		Route::get("admin/delete/{id_admin}", "Admin\Admin@delete");
		Route::post("admin/delete_act", "Admin\Admin@delete_act");
		Route::get("admin/edit_password/{id_admin}", "Admin\Admin@edit_password");
		Route::post("admin/edit_password_act", "Admin\Admin@edit_password_act");

		//role
		Route::get("role", "Admin\Role@index");
		Route::get("role/add", "Admin\Role@add");
		Route::post("role/add_act", "Admin\Role@add_act");
		Route::get("role/edit/{id_role}", "Admin\Role@edit");
		Route::post("role/edit_act", "Admin\Role@edit_act");
		Route::get("role/delete/{id_role}", "Admin\Role@delete");
		Route::post("role/delete_act", "Admin\Role@delete_act");

		//menu
		Route::get("role/menu", "Admin\Menu@index");
		Route::get("role/menu/add", "Admin\Menu@add");
		Route::post("role/menu/add_act", "Admin\Menu@add_act");
		Route::get("role/menu/edit/{id_menu}", "Admin\Menu@edit");
		Route::post("role/menu/edit_act", "Admin\Menu@edit_act");
		Route::get("role/menu/delete/{id_menu}", "Admin\Menu@delete");
		Route::post("role/menu/delete_act", "Admin\Menu@delete_act");

		//role permission
		Route::post("role/get_role_menu", "Admin\Role_menu@get_role_menu");
		Route::post("role/update_status_role", "Admin\Role_menu@update_status_role");

		//settings
		Route::get("settings/edit_general_settings", "Admin\Settings@edit_general_settings");
		Route::post("settings/edit_general_settings_action", "Admin\Settings@edit_general_settings_action");
		Route::get("upload_settings", "Admin\Settings@upload_settings");
		Route::post("upload_settings_action", "Admin\Settings@upload_settings_action");
		
		//specific settings
		Route::get("settings/edit_specific_settings", "Admin\Settings@edit_specific_settings");
		Route::post("settings/edit_specific_settings_action", "Admin\Settings@edit_specific_settings_action");

		//client logo
		Route::get("client_logo", "Admin\ClientLogo@index");
		Route::get("client_logo/add", "Admin\ClientLogo@add");
		Route::post("client_logo/add_act", "Admin\ClientLogo@add_act");
		Route::get("client_logo/edit/{id_blog}", "Admin\ClientLogo@edit");
		Route::post("client_logo/edit_act", "Admin\ClientLogo@edit_act");
		Route::get("client_logo/delete/{id_blog}", "Admin\ClientLogo@delete");
		Route::post("client_logo/delete_act", "Admin\ClientLogo@delete_act");
		
		//client testimonial
		Route::get("client_testimonial", "Admin\ClientTestimonial@index");
		Route::get("client_testimonial/add", "Admin\ClientTestimonial@add");
		Route::post("client_testimonial/add_act", "Admin\ClientTestimonial@add_act");
		Route::get("client_testimonial/edit/{id_blog}", "Admin\ClientTestimonial@edit");
		Route::post("client_testimonial/edit_act", "Admin\ClientTestimonial@edit_act");
		Route::get("client_testimonial/delete/{id_blog}", "Admin\ClientTestimonial@delete");
		Route::post("client_testimonial/delete_act", "Admin\ClientTestimonial@delete_act");

	});
});

