<?php
namespace bin\error;

require_once('bin/controller.php');
use bin\controller\Controller as Controller;

class Run extends Controller
{
	private $message;
	const title = 'ERROR:';
	
	function __construct($error)
	{
		parent::__construct(self::title.$error);
		$this->message = $error;
	}

}

?>