<?php

/*
$_SERVER[REQUEST_URI] => /~veronica/uptt/index.php
$_SERVER[SCRIPT_NAME] => /~veronica/uptt/index.php
$_SERVER[PHP_SELF] => /~veronica/uptt/index.php
*/


$p=dirname($_SERVER['SCRIPT_FILENAME']);
//die($p);
if (MOD == '') {
	define('APP',  $p);	
} else {
	$cad='/modulos/'. MOD;
	$p=explode($cad, $p);
	define('APP',  $p[0]);	
}
