<?php
/*
Usage:
- Change the values for username, password, dbname, and the query.
- Host this PHP script on the same server as your SQL.
- Call it from JS using AJAX.
- Use JSON.parse(this.responseText) to receive the response as a JS object.
- The object will be an array of rows (each row has fieldnames and values).

See here for more details:
  https://www.w3schools.com/php/php_ajax_php.asp
*/

// Setup DB info.
$servername = "localhost";
$username = "???";
$password = "???";
$dbname = "???";

// Create connection.
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection.
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Query DB.
$sql = "SELECT * FROM Table;";
$resultObj = $conn->query($sql);

// Parse the query result.
if ($resultObj->num_rows > 0) {
	while ($row = $resultObj->fetch_assoc()) {
		$result[] = $row;
	}
}

// Return the query result as a JSON string.
echo json_encode($result);

// Close the connection.
$conn->close();
?>
