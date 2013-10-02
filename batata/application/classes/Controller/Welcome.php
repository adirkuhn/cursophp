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

} // End Welcome
