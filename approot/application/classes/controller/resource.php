<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Resource extends Controller_Base {

    public function action_list()
    {
        $page = $this->request->param('page', 1);

        $m = new Model_Resource();
        $rlist = $m->get_page($page);

        $body = View::factory('resource/list');
        $body->bind_global('rlist', $rlist);

        $body->set_global('title', 'Resource List '. $page);
        $this->body = $body;
    }

    public function action_del()
    {
        $rid = $this->request->param('rid', null);
        if ($rid === null) $this->request->redirect('/');

        $m = new Model_Resource();
        $fileinfo = $m->get_resource($rid);

        $m->rm($rid);

        unlink($fileinfo['path']);

        $this->request->redirect('/resource');
    }

    public function action_upload()
    {
        if ($this->request->method() === 'POST')
        {
            if (count($_FILES) > 0) {

                $extend = pathinfo($_FILES['Filedata']['name']);
//                $extension = strtolower($extend['extension']);

                $filename = base64_encode($extend['basename']) . '.'. $extend['extension'];
                $path = Upload::save($_FILES['Filedata'], $filename, './uploads/');
                $this->json = true;
                $this->response->body("/uploads/{$filename}");
//                if ($path != false)
//                    $m->update_logo($client_id, "/uploads/{$filename}");
            }
//            $m = new Model_Resource();
//
//            $m->add($data);
        }
    }

    public function action_index()
    {
        $this->action_list();
    }
} // End Welcome
