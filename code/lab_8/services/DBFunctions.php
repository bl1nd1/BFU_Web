<?php

class DBFunctions
{
	private static $params;
	private static $db;

	public function __construct(DBConnection $DBConnection)
	{
		$settings = $DBConnection->getSettings();
		self::$db = DBConnection::connectToDB($settings['host'], $settings['username'], $settings['password'], $settings['dbName']);
	}

	public static function getItems(): Items
	{
		$items = [];
		$query = "SELECT CATEGORY, EMAIL, TITLE FROM web.ad;";
		$result = mysqli_query(self::$db, $query);
		foreach ($result as $row)
		{
			array_push($items, [
				$row['category'],
				$row['email'],
				$row['title']
			]);
		}

		return new Items($items);
	}

	public static function getCategories(): Categories
	{
		$categories = [];
		$query = "SELECT CATEGORY FROM web.ad";
		$result = mysqli_query(self::$db, $query);

		foreach ($result as $row)
		{
			array_push($categories, $row['category']);
		}

		return new Categories($categories);
	}

	public static function addItem($email, $title, $desc, $category): void
	{
		$query = "INSERT INTO web.ad (EMAIL, TITLE, DESCRIPTION, CATEGORY)
					VALUES ($email, $title, $desc, $category)";

		$preparedStatement = mysqli_prepare(self::$db, $query);
		mysqli_stmt_bind_param($preparedStatement, "s", self::$params);
		mysqli_stmt_execute($preparedStatement);
	}
}