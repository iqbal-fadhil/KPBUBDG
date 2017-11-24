<?php

Route::any("/", [
	"as" => "user/login",
	"uses" => "UserController@login"
	]);

Route::group(["prefix" => "", "before" => "auth"], function() {

	// Route::get('/home','ProjectsController@home');
	// Route::get('/create','ProjectsController@create');
	// Route::get('/edit','ProjectsController@edit');
	// Route::get('/delete','ProjectsController@delete');
	Route::get('create', ['as' => 'create', "uses" => "ProjectsController@create"]);
	Route::get('home', ['as' => 'home', "uses" => "ProjectsController@home"]);
});

// /keren/home
// /keren/create
// /keren/edit
// /keren/delete

// Route::any("/request", 
// 	[
// 		"as" => "user/request",
// 		"uses" => "UserController@request"
// 	]);

// Route::any("/reset/{token}", 
// 	[
// 		"as" => "user/reset",
// 		"uses" => "UserController@reset"
// 	]);

Route::any("/logout", 
	[
		"as" => "user/logout",
		"uses" => "UserController@logout"
	]);

