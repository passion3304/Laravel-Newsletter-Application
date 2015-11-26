<?php namespace Newsletter\Templates;

use Eloquent;
use Newsletter\Templates\DefaultTemplate;

class UserTemplate extends Eloquent{

	protected $table = 'user_templates';

	public static function headerDefault(){

		return DefaultTemplate::header();
	}

	public static function htmlDefault(){

		return DefaultTemplate::body();
	}
}