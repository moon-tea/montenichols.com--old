<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		
		print_r('{"array":[');		
		$users = User::all();
		foreach($users as $user)
		{
			print_r($user->toJson());			
		}
		print_r("	");
		$wines = Wine::all();
		foreach($wines as $wine)
		{
			print_r($wine->toJson());
		}
		print_r(']}');
		die();
		return View::make('home/user');
	}

}