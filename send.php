<?php


$url = 'http://localhost/lab_2/index.php';
$data = array('data' => 'value_ku');

$options = array(
	'http' => array(
		'header' => "Content-type: application/x-www-form-urlencoded\r\n",
		'method' => 'POST',
		'content' => http_build_query($data)
		)
	);
	
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);
echo $result;





?>