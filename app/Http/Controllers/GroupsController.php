<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;
use Input;
use Newsletter\Groups\Group;
use Auth;
use Redirect;

class GroupsController extends Controller{

	public function getIndex(){

		return view("groups.index")
			->with("groups", Group::where("user_id", "=", Auth::user()->id)->get())
			->with("page_title", "Groups");
	}

	public function postNew(){

		
	}
}