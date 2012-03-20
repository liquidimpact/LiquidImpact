<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base {

	public function action_index()
	{
		$this->list();
	}

    protected function get_uid()
    {
        $user_id = $this->request->param('uid', 'null');
        if ($user_id === null)  $this->request->redirect('/');

        return $user_id;
    }
    public function action_list()
    {
        $page = $this->request->param('page', 1);

    }

    public function action_edit()
    {
        $user_id = $this->get_uid();
    }

    public function action_del()
    {
        $user_id = $this->get_uid();
    }

    public function action_new()
    {}

} // End Welcome
