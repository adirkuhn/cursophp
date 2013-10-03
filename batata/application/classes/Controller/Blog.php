<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller {

    //lista todos os posts
    public function action_index() {

        //recupera a model e realiza consulta
        $postModel = ORM::factory('Post');
        $posts = $postModel->find_all();

        //pega a view
        $view = View::factory('blog/index')
            ->bind('postagens', $posts);

        $this->response->body($view);
    }


    //adiciona um novo post
    public function action_novo() {

        //verifica se foi enviado post
        if ($_POST) {

            //tenta salvar postagem
            try {
                //recupera a model
                $postModel = ORM::factory('Post');

                $postModel->author = $_POST['author'];
                $postModel->body = $_POST['body'];

                //salva
                $postModel->save();

                //redireciona para index
                $this->redirect('blog/index');
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('model');
            }

        }

        $view = View::factory('blog/novo')
            ->bind('errors', $errors);

        $this->response->body($view);
    }


    //editar postagem
    public function action_editar() {

        //salva alteracoes
        if ($_POST) {

            try {
                $post = ORM::factory('Post', $_POST['id']);

                $post->author = $_POST['author'];
                $post->body = $_POST['body'];
                $post->save();

                $this->redirect('blog/index');
            } catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('model');
            }      

        }

        $id = $this->request->param('id');

        //recupera model
        $post = ORM::factory('Post', $id);

        $view = View::factory('blog/editar')
            ->bind('errors', $errors)
            ->bind('postagem', $post);

        $this->response->body($view);
    }

    //deletar postagem
    public function action_deletar() {
        $id = $this->request->param('id');

        //recupera model
        $post = ORM::factory('Post', $id);
        $post->delete();
        $this->redirect('blog/index');
    }


        //lista todos os posts
    public function action_json() {

        //recupera a model e realiza consulta
        $postModel = ORM::factory('Post');
        $posts = $postModel->find_all();

        $arr = array();
        foreach ($posts as $valor) {
            $arr[] = array(
                'id' => $valor->id,
                'author' => $valor->author,
                'body' => $valor->body,
                'arr' => array(
                    'id' => $valor->id,
                    'author' => $valor->author,
                    'body' => $valor->body,
                ),
            );
        }

        $this->response->headers('Content-Type','application/json');
        $this->response->body(json_encode($arr));
    }

}