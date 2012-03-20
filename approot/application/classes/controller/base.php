<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller {
    var $layout = '';
    var $body = '';

    public function before()
    {
        $this->layout = View::factory('layout');
    }

    public function after()
    {
        $this->layout->bind('body', $this->body);
        $this->response->body($this->layout);
    }
}