<?php



Route::get('/', 'WelcomeController@index');

Route::get('/home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*@if (Authority::can('update', $article))
{{ link_to_route("articles.edit", "Edit", $article->id) }}
@endif*/
