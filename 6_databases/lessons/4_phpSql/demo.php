<!DOCTYPE html>

<?php
// Import the DB helper code (adds the query() function).
require 'db.php';
?>

<html>
  <body>
    <!-- DEMO 1: Display SQL data as an HTML table. -->

    <!-- Begin a table to display a list of students. -->
    <table>
      <tr>
        <th>Student Code</th>
        <th>Student Name</th>
      </tr>

      <!-- Now use PHP and SQL to finish the table! -->
      <?php
      // Use the query() function (from db.php) to query our SQL DB.
      $students = query("SELECT * FROM students;");

      // Loop through each result of the query.
      foreach ($students as $student) {
        // Echo a row into the HTML table, using the named fields of the
        // $student object (field names correspond to the SQL table fields).
        echo '
          <tr>
            <td>' . $student['code'] . '</td>
            <td>' . $student['firstName'] . ' ' . $student['lastName'] . '
          </tr>
        ';
      }
      ?>

    <!-- Now that the PHP is done, close off the table in HTML. -->
    </table>

    <!-- DEMO 2: Add a row of data into the SQL table. -->
    <?php
      // query() sends ANY SQL command to your database.
      // Here, we use INSERT to add a new student to the table.
      query("INSERT INTO students (code, firstName, lastName) VALUES ('abc0001', 'Demo', 'Student');");
    ?>

    <script>
      /* DEMO 3: Store SQL data into a JavaScript variable. */
      // This lets us get the SQL response into a JavaScript variable, which we
      // can then do anything with client-side.
      var students = <?php echo json_encode(query("SELECT * FROM students")); ?>;

      // As a demo, this logs all the student info to the console.
      console.log(students);
    </script>
  </body>
</html>

<?php
// Close the SQL connection that was opened in db.php.
$conn->close();
?>
