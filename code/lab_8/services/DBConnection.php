<?php

class DBConnection
{
	private $host;
	private $username;
	private $password;
	private $dbName;
	private static $db;

	public static function connectToDB($host, $username, $password, $dbName): mysqli
	{
		self::$db = mysqli_init();
		$dbConnect = self::$db->real_connect($host, $username, $password, $dbName);
		$dbChangeEncoding = mysqli_set_charset(self::$db, "utf8mb4");
		$error = mysqli_errno(self::$db). ":" .mysqli_error(self::$db);
		if(!$dbConnect || !$dbChangeEncoding)
		{
			trigger_error($error);
		}
		return self::$db;
	}
	/**
	 * @param string $host
	 * @param string $username
	 * @param string $password
	 * @param string $dbName
	 */
	public function __construct(string $host, string $username, string $password, string $dbName)
	{
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->dbName = $dbName;

		self::connectToDB($host, $username, $password, $dbName);
	}

	public function getSettings()
	{
		return [
			$this->host,
			$this->username,
			$this->password,
			$this->dbName
		];
	}
}