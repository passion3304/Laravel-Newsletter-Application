<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;
use Input;
use Newsletter\Subscribers\Subscriber;
use Auth;
use Redirect;
use Newsletter\Groups\Group;
use Newsletter\Subscribers\SusbcriberGroup;

class NewslettersController extends Controller{

	public function getIndex(){

		$groups = Group::where("user_id", "=", Auth::user()->id)->get();
		return view('newsletters.index')
				->with("page_title", "Newsletters")
				->with("groups", $groups);
	}

	public function postCreate(){


	}
}