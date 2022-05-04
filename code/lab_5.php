<?php

$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno())
{
	printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
	exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	var_dump($_POST);
	$query = "INSERT INTO ad(email, title, description, category) 
				VALUES('{$_POST["email"]}', '{$_POST["title"]}', '{$_POST["desc"]}', '{$_POST["category"]}')";
	$mysqli->query($query);
}

$result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<table>
	<tr>
		<th>Category</th>
		<th>Email</th>
		<th>Title</th>
	</tr>
	<?php foreach ($result as $row)
	{
		echo "	<tr>
			<td>{$row['category']}</td>
			<td>{$row['email']}</td>
			<td>{$row['title']}</td>
		</tr>";
	} ?>
</table>
<form name="adv" action="lab_5.php" method="POST">
	<label>
		<input type="email" name="email" placeholder="Email..." />
	</label>

	<label>
		<select name="category">
			<option selected disabled>Category...</option>
			<option>category1</option>
			<option>category2</option>
			<option>category3</option>
		</select>
	</label>
	<label>
		<input type="text" name="title" placeholder="Title..." />
	</label>
	<label>
		<textarea name="desc" placeholder="Description..."></textarea>
	</label>
	<input type="submit" value="Add" />
</form>
</body>
</html>