<?php namespace Newsletter\Http\Controllers\Tests;

use Newsletter\Http\Controllers\Controller;
use Mail;
use Newsletter\Templates\UserTemplate;

class TestController extends Controller{

	public function getIndex(){


		return view("templates.db")->with('template', UserTemplate::first());
	}

	public function getSendEmail(){

		$name = 'Rasheeda Yehuza';
		$email = 'rashkeed@gmail.com';
		$template = UserTemplate::find(1);

		 Mail::send('templates.db', ['name' => $name, 'email' => $email, 'template' => $template], function ($m) use ($name, $email, $template) {
            
            $m->from('rashkeed@gmail.com', 'Education Pathways International');

            $m->to($email, $name)->subject('EPI Newsletter!');

        });

		echo "sent!";
	}

}

