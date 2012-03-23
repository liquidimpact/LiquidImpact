<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base {

	public function action_index()
	{
		$this->action_list();
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

        $m = new Model_User();
        $ulist = $m->get_page($page);

        $body = View::factory('user/list');
        $body->bind('user_list', $ulist);
        $body->set_global('title', "User List Page {$page}");

        $this->body = $body;
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
    {
        $user = array(
            'name' => '',
            'permission' => 2,
        );
        $body = View::factory('user/edit');

        $body->bind('user', $user);
        $body->set_global('title', 'Add New User');

        $this->body = $body;
    }

} // End Welcome
