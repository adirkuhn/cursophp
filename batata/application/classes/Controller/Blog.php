<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {

    public function action_index() {

        $postModel = ORM::factory('Post');

        $posts = $postModel->find_all();


        foreach ($posts as $c => $postagem) {
            echo $c;
            echo '<br>';
            echo $postagem->author;
            echo '<br>';
            echo $postagem->body;
            echo '<hr>';
        }
    }

}