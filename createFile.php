<?php

$data = $_GET['data'];

$name;
$password;

list($name, $password) = explode(',', $data);

$template1 = file_get_contents("template1.html");
$template2 = file_get_contents("template2.html");

$html = $template1.$password.$template2;

if (!file_exists($name.'.html')) {

	$handle = fopen('files\\'.$name.'.html','w+');

	fwrite($handle,$html);

	fclose($handle);
}
?>
