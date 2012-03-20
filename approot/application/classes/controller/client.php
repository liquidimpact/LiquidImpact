<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Client extends Controller_Base {

	public function action_index()
	{
		$this->action_list();
	}

    public function action_list()
    {
        $page = $this->request->param('page', 1);
    }

    public function action_edit()
    {
        $client_id = $this->request->param('cid', null);

        if ($client_id === null) $this->request->redirect('/login');
    }

    public function action_del()
    {
        $client_id = $this->request->param('cid', null);
    }

    public function action_new()
    {}

} // End Welcome
