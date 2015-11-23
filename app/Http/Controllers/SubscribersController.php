<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;
use Input;
use Newsletter\Subscribers\Subscriber;
use Auth;
use Redirect;
use Newsletter\Groups\Group;
use Newsletter\Subscribers\SusbcriberGroup;


class SubscribersController extends Controller{

	public function getIndex(){

		return view("subscribers.index")
			->with("subscribers", Subscriber::where("user_id", "=", Auth::user()->id)->get())
			->with("page_title", "Susbcribers")
			->with("groups", Group::where("user_id", "=", Auth::user()->id)->get());
	}

	public function postNew(){

		try {

			$data = Input::get();

			$groups = [];

			if(isset($data['groups'])){
				$groups = $data['groups'];
			}

			$subscriber = new Subscriber;
			$subscriber->name = $data['name'];
			$subscriber->email = $data['email'];
			$subscriber->user_id = Auth::user()->id;

			$subscriber->save();

			foreach($groups as $key => $groupId) {

				$susbcriberGroup = new SusbcriberGroup;
				$susbcriberGroup->group_id = $groupId;
				$susbcriberGroup->user_id = Auth::user()->id;
				$susbcriberGroup->subscriber_id = $subscriber->id;
				$susbcriberGroup->save();
			}

			return Redirect::to('subscribers');
			
		} catch (Exception $e) {
			
			return "Error saving subscriber";
		}
	}

}
