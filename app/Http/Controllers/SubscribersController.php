<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;
use Input;
use Newsletter\Subscribers\Subscriber;
use Auth;
use Redirect;
use Newsletter\Groups\Group;
use Newsletter\Subscribers\SusbcriberGroup;
use PHPExcel;
use Excel;


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

			return Redirect::to('subscribers')
				->with('notification_heading','Success!')
				->with('notification_type', 'alert-success')
				->with('success', 'Subscribers Created Successfully');
			
		} catch (Exception $e) {
			
			return "Error saving subscriber";
		}
	}

	public function getUploadFromExcel(){

		$groups = Group::where("user_id", "=", Auth::user()->id)->get();

		return view("subscribers.upload_from_excel")
					->with("page_title", "Import Subscribers From Excel")
					->with("groups", $groups);
	}


	public function postUploadFromExcel(){

		if (strlen(Input::file('excel_file')) < 1 ) {

			return 'Please select an excel file to upload before proceeding.';
		}

		$original_file = Input::file('excel_file')->getClientOriginalName();

		$file = explode('.', $original_file);
		$FileExtension = $file[1];
		$randomString = uniqid();
		$filePath = app_path().'/uploads/'.$randomString.'.'.$FileExtension;
		Input::file('excel_file')->move(app_path().'/uploads', $randomString.'.'.$FileExtension);

		$excelRows = Excel::load($filePath)->get();

		$groups = array();
		$data = Input::get();

		if(isset($data['groups'])){
			$groups = $data['groups'];
		}

		foreach ($excelRows as $key => $row) {
			
			$subscriber = new Subscriber;
			$subscriber->name = $row->name;
			$subscriber->email = $row->email;
			$subscriber->user_id = Auth::user()->id;
			$subscriber->save();

			foreach($groups as $i => $groupId) {

				$susbcriberGroup = new SusbcriberGroup;
				$susbcriberGroup->group_id = $groupId;
				$susbcriberGroup->user_id = Auth::user()->id;
				$susbcriberGroup->subscriber_id = $subscriber->id;
				$susbcriberGroup->save();

			}
		}

		return Redirect::to('subscribers')
			->with('notification_heading','Success!')
			->with('notification_type', 'alert-success')
			->with('success', 'Subscribers Created Successfully');
	}






}
