<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}


    public function action_login()
    {

    }

    public function action_logout()
    {

    }

} // End Welcome
