<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;
use Input;
use Newsletter\Subscribers\Subscriber;
use Auth;
use Redirect;


class SubscribersController extends Controller{

	public function getIndex(){

		return view("subscribers.index")
			->with("subscribers", Subscriber::where("user_id", "=", Auth::user()->id)->get())
			->with("page_title", "Susbcribers");
	}

	public function postNew(){

		$data = Input::get();

		$subscriber = new Subscriber;
		$subscriber->name = $data['name'];
		$subscriber->email = $data['email'];
		$subscriber->user_id = Auth::user()->id;

		if($subscriber->save()){

			return Redirect::to('subscribers');
		}
	}

}
