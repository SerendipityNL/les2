<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Posts extends Controller_Base {

    public function before()
    {
        parent::before();
    }

    public function action_index()
    {
        $posts = ORM::factory('Post')->find_all();
        $this->template->body = View::factory('posts/index')
            ->set('posts', $posts);
    }

    public function action_view()
    {
        $id = $this->request->param('id');
        $post = ORM::factory('Post', $id);
        $this->template->body = View::factory('posts/view')
            ->set('post', $post);
    }


    public function action_create()
    {
        if ($this->request->method() == HTTP_Request::POST)
        {
            try
            {
                $post = ORM::factory('Post')->values($this->request->post());

                $post->save();

                $this->redirect('posts');
            }
            catch (ORM_Validation_Exception $e)
            {
                var_dump($e->errors());
            }
        }
        $this->template->body = View::factory('posts/create');
    }

    public function action_edit()
    {
        $id = $this->request->param('id');

        if ( ! isset($id))
        {
            $this->redirect('posts');
        }

        $post = ORM::factory('Post', $id);

        if ($this->request->method() == HTTP_Request::POST)
        {
            try
            {
                $post->values($this->request->post());

                $post->save();

                $this->redirect('posts');
            }
            catch (ORM_Validation_Exception $e)
            {
                var_dump($e->errors());
            }
        }
        $this->template->body = View::factory('posts/edit')
            ->set('post', $post);
    }

    public function action_delete()
    {

        $id = $this->request->param('id');

        if ( ! isset($id))
        {
            $this->redirect('posts');
        }
        $post = ORM::factory('Post', $id)->delete();

        $this->redirect('posts');
    }

}
