<?php
/*
Usage:

1. Modifying this script:
    - Change the values for username, password, dbname.
    - Program in your $tableSQL and $insertSQL commands.
    - Host this PHP script on the same server as your SQL.
2. Using the result:
    - Call this page from JS using AJAX.
    - Check for HTTP response code 200 (OK) or 500 (Internal Server Error) for completion.
    - See here for more details:
      https://www.w3schools.com/php/php_ajax_php.asp
*/

/* --- INITIAL SETUP --- */
/* STUDENTS: Setup your DB info here! */
$servername = "localhost";
$username = "???";
$password = "???";
$dbname = "???";


/* --- SQL --- */
// This function will run within each post array including multi-dimensional arrays.
function ExtendedAddslash(&$params, $conn) {
    foreach ($params as &$var) {
        // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
        is_array($var) ? ExtendedAddslash($var) : $var="'" . mysqli_real_escape_string($conn, $var) . "'";
        unset($var);
    }
}

// Create a SQL connection and run ExtendedAddslash on all of $_POST.
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    http_response_code(500);
	die("Connection failed: " . $conn->connect_error);
}
ExtendedAddslash($_POST, $conn);


/* --- SQL COMMANDS --- */
/* STUDENTS: Program your SQL commands here! */

// SQL to create the table, if it doesn't exist (ignore the "EOT" syntax).
$tableSQL = <<<EOT
CREATE TABLE IF NOT EXISTS myTable (
    tblID INT NOT NULL AUTO_INCREMENT,
    tblName VARCHAR(100)
);
EOT;

// SQL to insert the new record into the table (ignore the "EOT" syntax).
$insertSQL = <<<EOT
INSERT INTO myTable (tblName) VALUES (
    {$_POST["tblName"]}
);
EOT;


/* --- SQL CONTINUED --- */
// Issue pre-defined table and insert SQL statements.
if ($conn->query($tableSQL) !== TRUE) {
    http_response_code(500);
    die("Error creating table: " . $tableSQL . "<br>" . $conn->error);
}
if ($conn->query($insertSQL) !== TRUE) {
    http_response_code(500);
    die("Error adding record: " . $insertSQL . "<br>" . $conn->error);
}

// Close the connection.
$conn->close();
?>
