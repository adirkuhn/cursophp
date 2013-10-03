<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        echo Inflector::plural('city');
		$this->response->body('hello, world!');
	}

    public function action_ola()
    {

        $mensagem = $this->request->param('id');
        echo 'Olá, você disse: ' . $mensagem;
    }

    public function action_sessao() {

        $session = Session::instance();

        $session->set('user_id', 10);
        $session->delete('user_id');

        echo $session->get('user_id');
        echo '<br>';
        echo $session->get('nome');

        echo '<pre>';
        print_r($session->as_array());

    }

} // End Welcome
