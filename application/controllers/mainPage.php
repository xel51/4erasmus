<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainpage extends CI_Controller {

	public function index()
	{
		$this->template->js('common/jquery');
		$this->template->js('common/bootstrap.min');
		$this->template->css('common/bootstrap.min');
		$this->template->css('mainPage');
		$this->template->write_view('content', 'mainPage_view');
		$this->template->render();
	}
}

?>