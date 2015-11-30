<?php namespace Newsletter\Http\Controllers;

use Newsletter\Http\Controllers\Controller;
use Auth;
use Newsletter\Templates\UserTemplate;
use Input;
use Redirect;

class TemplatesController extends Controller{

	public function getIndex(){

		$template = UserTemplate::where("user_id", "=", Auth::user()->id)->first();

		return view('templates.index')
			->with("page_title", "Templates")
			->with("template", $template);
	}

	public function postSaveUserTemplate(){

		$data = Input::get();

		$userTemplate = UserTemplate::find(1);
		$userTemplate->title = "Default Template";
		$userTemplate->description = "";
		$userTemplate->user_id = Auth::user()->id;
		$userTemplate->template_id = 1;
		$userTemplate->header_content = UserTemplate::headerDefault();
		$userTemplate->html_content = $data['html_content'];
		$userTemplate->save();

		return Redirect::to('templates')
				->with('notification_heading','Success!')
				->with('notification_type', 'alert-success')
				->with('success', 'Saved Successfully');
	}

	public function getEPITemplate(){

		return view('templates.epi');
	}

	public function postSaveEPITemplate(){

		$data = Input::get();

		$epiTemplate = new EPITemplate;
	}
}