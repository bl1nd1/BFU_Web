<?php

require '../vendor/autoload.php';
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
putenv('GOOGLE_APPLICATION_CREDENTIALS=credentials.json');
/*  SEND TO GOOGLE SHEETS */
$client = new Google_Client;
try{
	$client->useApplicationDefaultCredentials();
	$client->setScopes('https://spreadsheets.google.com/feeds');
	$service = new Google_Service_Sheets($client);
	$spreadsheetId = '1HBG8B5vSuWBY9IP2GWghQ8poef9r5HNYZxWmljXpSew';
	$response = $service->spreadsheets->get($spreadsheetId);
	$spreadsheetProperties = $response->getProperties();
	foreach($response->getSheets() as $sheet) {

		$sheetProperties = $sheet->getProperties();
	}
	$response = $service->spreadsheets_values->get($spreadsheetId, "A2:C");
}catch(Exception $e){
	echo $e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile() . ' ' . $e->getCode;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$range = 'A2:C';
	$values = [
		[$_POST['category'], $_POST['email'], $_POST['text']],
	];
	$ValueRange = new Google_Service_Sheets_ValueRange();
	$ValueRange->setValues($values);
	$options = ['valueInputOption' => 'USER_ENTERED'];
	$service->spreadsheets_values->append($spreadsheetId, $range, $ValueRange, $options);
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
		<th>Category</th>
		<th>Email</th>
		<th>Text</th>
	</tr>
	<?php foreach ($response['values'] as $row)
	{
		echo "	<tr>
			<td>$row[0]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
		</tr>";
	} ?>
</table>
<form name="adv" action="lab_4.php" method="POST">
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
		<input type="text" name="text" placeholder="Text..." />
	</label>
	<input type="submit" value="Add" />
</form>
</body>
</html>