<?php
/*
 * STUDENTS:
 *  1. The ONLY code you have to change is the value of $dbname.
 *    -> Fill in your own database name, according to what you have set up in
 *       SQL/PhpMyAdmin.
 *
 *  2. By default (in XAMPP), the username "root" with a blank password has
 *     full access to all of SQL.
 *
 *  3. If you want to upload your code to the NHS Computing server, you will
 *     need to use your student code for the user/pass.
 *    -> I recommend creating a matching username/password on your local SQL
 *       that has full access to your DB/table, so that the same code will work
 *       on your computer and the Computing server.
 */

// Setup variables.
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   "DATABASE_NAME";  // STUDENTS: Change this!

// Create connection.
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection.
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function query($sql) {
  // Query SQL.
  global $conn;
  $result = $conn->query($sql);

  if (!$result) {
    // Handle errors.
    die("Query failed: " . $conn->error);
  }
  else if (is_object($result)) {
    // Initialise an empty array.
    $array = [];

    // Parse the results.
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $array[] = $row;
      }
    }

    // Return the array.
    return $array;
  }

  // Return the numeric result (e.g. for INSERT/UPDATE).
  return $result;
}
?>
