<?php namespace Newsletter\Http\Controllers\Tests;

use Newsletter\Http\Controllers\Controller;


class TestController extends Controller{

	public function getIndex(){
		return view("test");
	}

}

