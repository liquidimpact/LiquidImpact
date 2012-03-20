<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Case extends Controller_Base {
	public function action_index()
	{
		$this->action_list();
	}

    public function action_list()
    {
        $page = $this->request->param('page', 1);

        $m = new Model_Case();
        $case_list = $m->get_page($page);

        $body = View::factory('case/list');

        $this->body = $body;
    }

    public function action_edit()
    {
        if ($this->request->method() == 'POST')
        {
            $post = $this->request->post();

            $data = array();

            $data['title'] = $post['title'];
            $data['content'] = $post['content'];

            $m = new Model_Case();

            // TODO: add attachment
            if (array_key_exists('case_id', $post)) {
                $case_id = $post['case_id'];
                $data['case_id'] = $case_id;

                $m->update_case($data);
            } else {
                list($case_id, $row) = $m->new_case($data);
            }

            $message = 'Case Has been saved';
        } else{
            $case_id = $this->request->param('cid', null);
            if ($case_id === null) $this->request->redirect('/');
            $m = new Model_Case();
        }

        $case = $m->get_case($case_id);

        $body = View::factory('case/edit');
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
        $body = View::factory('case/edit');
        $this->body = $body;
    }
} // End Case
