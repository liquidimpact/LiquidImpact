<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Client extends Controller_Base {

	public function action_index()
	{
		$this->action_list();
	}

    public function action_list()
    {
        // page should big than 0
        $page = $this->request->param('page', 1);

        $m = new Model_Client();
        $client_list = $m->get_page($page);

        $body = View::factory('client/list');
        $body->bind('client_list', $client_list);

        $this->body = $body;
    }

    public function action_edit()
    {
        $client_id = $this->request->param('cid', null);

        if ($client_id === null) $this->request->redirect('/login');

        $m = new Model_Client();
        $client = $m->get_client($client_id);

        $body = View::factory('client/edit');

        $this->body = $body;
    }

    public function action_del()
    {
        $client_id = $this->request->param('cid', null);
    }

    public function action_new()
    {}

} // End Welcome
