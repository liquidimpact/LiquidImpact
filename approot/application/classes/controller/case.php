<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Case extends Controller_Base {
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
        $case_id = $this->request->param('cid', null);
        if ($case_id === null) $this->request->redirect('/');

        $m = new Model_Case();
        $case = $m->get_case($case_id);

        $body = View::factory('/case/edit');
        $body->bind_global('case', $case);

        $this->body = $body;
    }

    public function action_del()
    {
        $case_id = $this->request->param('cid', null);
        if ($case_id === null) $this->request->redirect('/');

        $m = new Model_Case();
        $m->del_case($case_id);

        // TODO: add del after
        $this->request->redirect('/case');
    }

    public function action_new()
    {
        $body = View::factory('/case/edit');
        $this->body = $body;
    }
} // End Case
