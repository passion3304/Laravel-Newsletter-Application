<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;


class SubscribersController extends Controller{

	public function getIndex(){
		return view("subscribers.index");
	}

}
