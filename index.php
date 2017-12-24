<?php

require_once('bin/request.php');

require_once('admin/urls.php');
require_once('admin/ctrl.php');

$services 	= admin\urls\urls;
$admin		= admin\ctrl\admin;
$request	= get_request()[0];

$frame = set_request($request);
$frame->rander();


?>