<?php 
function myAutoload($cls) {
	require_once 'classes/'.$cls.'.class.php';
}
spl_autoload_register('myAutoload');