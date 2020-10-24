<?php
class dbo
{

	// localhost
	private static $host     = '127.0.0.1:3308';
	private static $user     = 'root';
	private static $pass     = '';
	private static $database = 'iintoo';
	
	public static function nconnection()
	{
		$mysqli = new mysqli(self::$host, self::$user, self::$pass, self::$database);
		$mysqli->set_charset("utf8mb4");
		return $mysqli;
	}
	
	
}