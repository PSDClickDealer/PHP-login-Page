<?php

	if(!defined('__CONFIG__')) {
		exit('You do not have a config file');
		}

 	class DB {

 		protected static $con;

 		private function __construct() {

 			try {

 				self::$con = new PDO( 'mysql:host=172.16.2.4;port=3306;dbname=peter;', 'peter', 'W2z2voV22ovI');
 				self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 				self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);

 			} catch (PDOException $e) {
 				echo "Cron could not connect to database."; exit;
 			}
 	}

 	public static function getConnection() {
 		//if thisinstace was not been started, start it.
 		if (!self::$con) {
 			new DB();
 		}
 		//Return the writeable db connection
 		return self::$con;
 	}
 }

 ?>