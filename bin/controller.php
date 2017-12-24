<?php
namespace bin\controller;

abstract class Controller{
	static $count = 0;
	public $title;
	private $view;
	public function __construct($title='Time'){
		self::$count++;
		$this->title = $title;
		self::set_view();
	}

	public function set_view($view="null_view"){
		require_once('admin/views.php');
		
		if(isset(views[$view])){
			if(file_exists(views[$view]))
			{
				$this->view = file_get_contents(views[$view]);
				$this->view = str_replace('{% TITLE %}', $this->title, $this->view);
			}
		}
	}
	public function rander(){
		echo $this->view;
	}
}



?>