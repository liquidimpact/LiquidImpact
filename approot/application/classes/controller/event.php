<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Event extends Controller_Base {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

    public function action_list()
    {}

    public function action_edit()
    {

    }

    public function action_del()
    {

    }

    public function action_new()
    {}

} // End Welcome
