<?php

class Config
{
	private $dbConnection;

	public function __construct()
	{
		$this->dbConnection = new DBConnection(
			'db', 'root', 'helloworld', 'web');
	}

	public function getDbConnectionItems(): DBConnection
	{
		return $this -> dbConnection;
	}
}