<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller {
    var $body = '';
    var $json = false;

    public function before()
    {

    }

    public function after()
    {
        if (!$this->json)
        {
            $layout = View::factory('layout');

            $layout->bind('body', $this->body);

            $this->response->body($layout);
        }
    }
}