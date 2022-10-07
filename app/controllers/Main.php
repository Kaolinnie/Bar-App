<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$this->view('Main/index');
	}
	
	public function orderPage(){
		$this->view('Main/orderPage');
	}
}
