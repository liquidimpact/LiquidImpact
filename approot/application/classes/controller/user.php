<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base {

	public function action_index()
	{
		$this->action_list();
	}

    protected function get_uid()
    {
        $user_id = $this->request->param('id', 'null');
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
        if ($this->request->method() == 'POST')
        {
            $post = $this->request->post();

            $error = array();
            $data = array();

            if ($post['name'] !== '')
            {
                $data['name'] = $post['name'];
            } else {
                $error['name'] = 'Can not be space';
            }
            if ($post['permission'] !== 0)
            {
                $data['permission'] = $post['permission'];
            } else {
                $error['permission'] = 'Please choose Permission';
            }

            $user_id = Arr::get($post, 'user_id');

            if ($post['password'] === '')
            {
                if ($user_id !== null) $error = '';
            }else {
                $data['password'] = md5($post['password'] + 'liquid');
            }
            $m = new Model_User();

            if($user_id === null)
                $user_id = $m->add_user($data);
            else
                $m->update_user($user_id, $data);
        } else {
            $user_id = $this->get_uid();
            $m = new Model_User();
        }

        $user = $m->get_user($user_id);

        $body = View::factory('user/edit');
        $body->set_global('title', "Edit User {$user['name']}");
        $body->set_global('user', $user);

        $this->body = $body;
    }

    public function action_del()
    {
        $user_id = $this->get_uid();
        $this->action_list();
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
