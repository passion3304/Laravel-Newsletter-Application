<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;
use Input;
use Newsletter\Subscribers\Subscriber;
use Auth;
use Redirect;
use Newsletter\Groups\Group;
use Newsletter\Subscribers\SusbcriberGroup;
use DB;

class NewslettersController extends Controller{

	public function getIndex(){

		$groups = Group::where("user_id", "=", Auth::user()->id)->get();
		return view('newsletters.index')
				->with("page_title", "Newsletters")
				->with("groups", $groups);
	}

	public function postSend(){

		$data = Input::get();

		if(isset($data['manual_emails'])){

			if(strlen($data['manual_emails']) >5 ){

				$emails = explode(",", $data['manual_emails']);
			}

		}

		if(isset($data['groups'])){

			$group = Group::find($data['groups']);

			if($group){

				$subscribers = DB::table('subscriber_groups')
		            ->join('subscribers', 'subscribers.id', '=', 'subscriber_groups.subscriber_id')
		            ->select('subscribers.email')
		            ->get(); 

		        foreach ($subscribers as $key => $email) {
		        	
		        	$emails[] = $email;
		        }

			}

		}

		foreach ($emails as $key => $email) {
			
			$queueMessage = new QueuedMessage;
			$queueMessage->user_id = Auth::user()->id;
			$queueMessage->template = "templates.epi";
			$queueMessage->email = $email;
			$queueMessage->save();
		}

	}



}