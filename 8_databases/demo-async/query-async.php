<?php
/*
Usage:

1. Modifying this script:
    - Change the values for username, password, dbname.
    - Program in your $tableSQL and $insertSQL commands.
    - Host this PHP script on the same server as your SQL.
2. Using the result:
    - Call this page from JS using AJAX.
    - Check for HTTP response code 200 (OK) or 400 (Bad Request) for completion.
    - Use JSON.parse(this.responseText) to receive the response as a JS object.
    - The object will be an array of rows (each row has fieldnames and values).
    - See here for more details:
      https://www.w3schools.com/php/php_ajax_php.asp
*/

// Setup DB info.
$servername = "localhost";
$username = "demo";
$password = "demo";
$dbname = "dbDemo";

// Create connection.
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection.
if ($conn->connect_error) {
    http_response_code(400);
	die("Connection failed: " . $conn->connect_error);
}

// Query DB.
$sql = "SELECT * FROM myTable ORDER BY tblScore DESC;";
$resultObj = $conn->query($sql);

// Parse the query result.
if ($resultObj->num_rows > 0) {
	while ($row = $resultObj->fetch_assoc()) {
		$result[] = $row;
	}
} else {
    $result = [];
}

// Return the query result as a JSON string.
echo json_encode($result);

// Close the connection.
$conn->close();
?>
