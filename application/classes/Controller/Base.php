<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template = 'template';

    public function before()
    {
        parent::before();

        $site_title = 'Mijn website';
        $standard_page_title = $this->request->controller().' / '.$this->request->action();
        $top_menu = View::factory('parts/top_menu');

        View::bind_global('site_title', $site_title);
        View::bind_global('page_title', $standard_page_title);
        View::bind_global('top_menu', $top_menu);
    }

    public function action_index()
    {
        $this->template->body = 'hello, world!';
    }

}
