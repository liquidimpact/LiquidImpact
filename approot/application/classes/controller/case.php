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
        $body->set_global('title', "Case List {$page}");
        $body->bind('case_list', $case_list);

        $this->body = $body;
    }

    public function action_edit()
    {
        if ($this->request->method() == 'POST')
        {
            $post = $this->request->post();

            $data = array();

            $data['name'] = $post['name'];
            $data['client_id'] = $post['client_id'];
            $data['category'] = $post['category'];
            $data['description'] = $post['description'];

            $m = new Model_Case();

            // TODO: add attachment
            $case_id = $post['case_id'];
            if (array_key_exists('case_id', $post)) {
                $m->update_case($case_id, $data);
            } else {
                $case_id = $m->new_case($data);
            }

            $message = 'Case Has been saved';
        } else{
            $case_id = $this->request->param('id', null);
            if ($case_id === null) $this->request->redirect('/');

            $m = new Model_Case();
        }

        $case = $m->get_case($case_id);

        $client = new Model_Client();
        $client_list = $client->get_all();


        $body = View::factory('case/edit');
        $body->set_global('title', "Edit Case {$case['name']}");

        $body->bind('client_list', $client_list);
        $body->bind_global('case', $case);

        $this->body = $body;
    }
    public function action_del()
    {
        $case_id = $this->request->param('id', null);
        if ($case_id === null) $this->request->redirect('/');

        $m = new Model_Case();
        $m->del_case($case_id);

        // TODO: add del after
        $this->request->redirect('/case');
    }

    public function action_new()
    {
        $case = array(
            'name' => '',
            'category' => 0,
            'description'   => '',
            'client_id'     => 0,
        );

        $m = new Model_Client();
        $client_list = $m->get_all();

        $body = View::factory('case/edit');

        $body->bind('case', $case);
        $body->bind('client_list', $client_list);
        $body->set_global('title', 'Add New Case');

        $this->body = $body;
    }
} // End Case
