<?php

error_reporting(E_ALL ^ E_WARNING);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$path = "categories/{$_POST['category']}/{$_POST['email']}";
	mkdir($path);
	file_put_contents($path . '/' . $_POST['header'] . '.txt', $_POST['text']);
}
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
		<th>Email</th>
		<th>Category</th>
		<th>Text</th>
	</tr>
	<?php foreach (array_diff(scandir("categories"), array('.', '..')) as $category)
	{
		foreach (array_diff(scandir("categories/{$category}"), ['.', '..']) as $email)
		{
			foreach (array_diff(scandir("categories/{$category}/{$email}"), ['.', '..']) as $adv)
			{
				echo "	<tr>
					<td>$email</td>
					<td>$category</td>
					<td>" . file_get_contents("categories/{$category}/{$email}/{$adv}") . "</td>
				</tr>";
			}
		}
	} ?>
</table>
</body>
</html>
