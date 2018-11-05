<?php
/*
Usage:

1. Modifying this script:
    - Change the values for username, password, dbname.
    - Program in your $querySQL command.
    - Host this PHP script on the same server as your SQL.
2. Using the result:
    - Call this page from JS using AJAX.
    - Check for HTTP response code 200 (OK) or 500 (Internal Server Error) for completion.
    - Use JSON.parse(this.responseText) to receive the response as a JS object.
    - The object will be an array of rows (each row has fieldnames and values).
    - See here for more details:
      https://www.w3schools.com/php/php_ajax_php.asp
*/

/* --- INITIAL SETUP --- */
/* STUDENTS: Setup your DB info here! */
$servername = "localhost";
$username = "demo";
$password = "demo";
$dbname = "dbDemo";


/* --- SQL COMMANDS --- */
/* STUDENTS: Program your SQL commands here! */

// SQL to query the table for all records (ignore the "EOT" syntax).
$querySQL = <<<EOT
SELECT * FROM highScores ORDER BY hscScore DESC;
EOT;


/* --- SQL CONTINUED --- */
// Create a SQL connection and check that it was successful.
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    http_response_code(500);
	die("Connection failed: " . $conn->connect_error);
}

// Issue pre-defined query SQL statement.
$resultObj = $conn->query($querySQL);

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
