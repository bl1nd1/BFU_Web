<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<form name="adv" action="table.php" method="POST">
	<label>
		<input type="email" name="email" placeholder="Email..." />
	</label>

	<label>
		<select name="category">
			<option selected disabled>Category...</option>
			<?php foreach (array_diff(scandir("categories"), array('.', '..')) as $category)
				{
					echo "<option>{$category}</option>";
				} ?>
		</select>
	</label>
	<label>
		<input type="text" name="header" placeholder="Header..." />
	</label>
	<label>
		<input type="text" name="text" placeholder="Text..." />
	</label>
	<input type="submit" value="Add" />
</form>
</body>
</html>