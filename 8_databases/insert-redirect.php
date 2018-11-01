<!DOCTYPE html>

<?php
/*
Usage:
- Change the values for username, password, dbname, and the query.
- Host this PHP script on the same server as your SQL.
- Call it from an HTML form using <form action="query-redirect.php">.
- Fill in your remaining HTML, CSS, and JS for this form to appear as desired.
- The result of the query has been made available as `result` in the script tag.
    - It will be an array of rows (each row has fieldnames and values).

See here for more details:
  https://www.w3schools.com/php/php_ajax_php.asp
*/

// Setup DB info.
$servername = "localhost";
$username = "???";
$password = "???";
$dbname = "???";

// Create a SQL connection.
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

// Close the connection.
$conn->close();
?>

<html>
  <head></head>
  <body>

    <script>
      // Pass the query result from PHP to JS.
      var result = <?php echo json_encode($result); ?>;
    </script>
  </body>
</html>
