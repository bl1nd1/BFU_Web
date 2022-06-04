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
	<?php foreach (DBFunctions::getItems() as $item)
			{
				echo "	<tr>
					<td>{$item['category']}</td>
					<td>{$item['email']}</td>
					<td>{$item['title']}</td>
				</tr>";
			} ?>
</table>
<form name="adv" action="index.php" method="POST">
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