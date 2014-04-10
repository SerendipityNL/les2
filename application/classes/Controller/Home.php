<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Home extends Controller_Base {

    public function before()
    {
        parent::before();
    }

    public function action_index()
    {
        $posts = ORM::factory('Post')->order_by('id', 'DESC')->find_all();
        $this->template->body = View::factory('home/index')
            ->set('posts', $posts);
    }

}
