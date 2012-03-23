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

        $body->set_global('title', "Client Page {$page}");
        $body->bind('client_list', $client_list);

        $this->body = $body;
    }

    public function action_edit()
    {
        if ($this->request->method() == 'POST')
        {
            $post = $this->request->post();

            // logo will save by another way
            $data = array(
                'name'   => $post['name'],
                'description'   => $post['description'],
            );

            $m = new Model_Client();

            $client_id = Arr::get($post, 'client_id');

            if ($client_id === null)
            {
                $client_id= $m->new_client($data);
            } else {
                $m->update_client($client_id, $data);
            }
            if (count($_FILES) > 0) {

                $extend = pathinfo($_FILES['logo']['name']);
                $extension = strtolower($extend['extension']);

                $filename = $client_id. '.'. $extension;
                $path = Upload::save($_FILES['logo'], $filename, './logo/');
                if ($path != false)
                    $m->update_logo($client_id, "/logo/{$filename}");
            }
        } else {
            $client_id = $this->request->param('id', null);
            if ($client_id === null) $this->request->redirect('/login');

            $m = new Model_Client();
        }

        $client = $m->get_client($client_id);

        $body = View::factory('client/edit');

        $body->bind('client', $client);
        $body->set_global('title', "Edit Client {$client['name']}");

        $this->body = $body;
    }

    public function action_del()
    {
        $client_id = $this->request->param('id', null);
    }

    public function action_new()
    {
        $client = array(
            'name' => '',
            'logo' => '',
            'description' =>''
        );

        $body = View::factory('client/edit');

        $body->set_global('title', 'Add new Client');
        $body->bind('client', $client);

        $this->body = $body;
    }

} // End Welcome
