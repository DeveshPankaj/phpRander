<?php

namespace login\run;
require_once('bin/controller.php');
use bin\controller\Controller as Controller;

class Run extends Controller
{
	public $message;
	function __construct($request=null)
	{
		parent::__construct('Login');
	}

}

?>