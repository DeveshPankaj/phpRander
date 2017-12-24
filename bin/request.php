<?php

function get_request(){
	$request = (isset($_GET['url'])) ? $_GET['url'] : admin\urls\default_url;
	$request = explode('/', $request);
	$filter = array();
	foreach ($request as $value) {
			if(strlen($value)>0){
				$value = str_replace("'", "-", $value);
				$value = str_replace('"', "+", $value);
				$value = str_replace('<', "", $value);
				$value = str_replace('>', "", $value);
				array_push($filter, strtolower($value));
			}
		}

	return $filter;
}


function set_request($request){
	require_once('admin/urls.php');
	require_once('admin/ctrl.php');

	if(isset(admin\urls\urls[$request]))
	{
		if(file_exists(admin\urls\urls[$request].'run.php'))
		{
			require_once(admin\urls\urls[$request].'run.php');
			$str = str_replace("/", "",admin\urls\urls[$request]).'\\run\\Run';
			return new $str;
		}
		else
		{
			require_once('bin/404/run.php');
			$str = admin\urls\urls[$request];
			return new bin\error\Run(
				'Service broken [' .$str. '] dir not avilable !!<br>'
			);
		}
	}
	else
	{
		require_once('bin/404/run.php');
		return new bin\error\Run('Service [' .$request. '] not avilable');
	}

}

?>