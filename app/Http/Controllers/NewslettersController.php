<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;
use Input;
use Newsletter\Subscribers\Subscriber;
use Auth;
use Redirect;
use Newsletter\Groups\Group;
use Newsletter\Subscribers\SusbcriberGroup;
use DB;
use Newsletter\QueuedMessage;
use Mail;

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
		            ->select('subscribers.email', 'subscribers.name')
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

		return Redirect::to('newsletters')
			->with('notification_heading','Success!')
			->with('notification_type', 'alert-success')
			->with('success', 'Newsletters Processed Successfully');

	}


	public function getProcess(){

		$queuedMessages = QueuedMessage::where('sent', '=', 0)->get();

		foreach ($queuedMessages as $key => $queuedMessage) {
			
			$name = $queuedMessage->name;
			$email = $queuedMessage->email;

			 $sendEmail = Mail::send($queuedMessage->template, ['name' => $name, 'email' => $email], function ($m) use ($name, $email) {
	            
	            $m->from('rashkeed@gmail.com', 'Education Pathways International');

	            $m->to($email, $name)->subject('EPI Newsletter!');

	        });

			 if($sendEmail){
			 	$queuedMessage->sent = 1;
			 	$queuedMessage->save();
			 }
		}
	}



}