<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;

class UsersController extends Controller{

	public function getDashboard(){

		return view("users.dashboard")
			->with("page_title", "Dashboard");
	}
}