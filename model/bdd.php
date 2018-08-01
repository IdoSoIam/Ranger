<?php


class BDD
{
    protected function dbConnect()
    {
    	$dns = 'mysql:host=192.168.3.125;dbname=siteportatif';
		$user = 'root';
		$mdp = 'sqlcoda#2018!';
    	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $db = new PDO($dns, $user, $mdp, $options);
		return $db;
    }
}
