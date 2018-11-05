<!DOCTYPE html>

<html>
    <head>
        <title>Report</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <style type="text/css">
            /* Format the table to have black cell borders. */
            #display {
                border-collapse: collapse;
            }
            #display td, #display th {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
        /*
        Usage:

        1. Modifying this script:
            - Change the values for username, password, dbname.
            - Program in your $querySQL command.
            - Host this PHP script on the same server as your SQL.
        2. Using the result:
            - Call this page from an HTML form using <form action="insert-redirect.php">.
            - Fill in your remaining HTML, CSS, and JS for this form to appear as desired.
            - The result of the query has been made available as `result` in the script tag.
                - It will be an array of rows (each row has fieldnames and values).
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

        // Close the connection.
        $conn->close();
        ?>

        <!-- Report. -->
        <h1>High Scores</h1>
        <table id="display"></table>

        <!-- Link to return home. -->
        <p><a href="./index.html">Click here</a> to return home.</p>


        <script>
            // Pass the query result from PHP to JS.
            var result = <?php echo json_encode($result); ?>;

            /* STUDENTS:  Modify this code to create your own report. */
            /*          - If you want your report to be a table, just modify the line inside of `result.forEach()`. */

            // Build a table to display the results.
            var out = '<tr><th>Name</th><th>Game</th><th>Score</th>';
            result.forEach(function(row) {
                out += '<tr><td>' + row['hscName'] + '</td><td>' + row['hscGame'] + '</td><td>' + row['hscScore'] + '</td></tr>';
            });

            // Update the table on the page.
            document.getElementById('display').innerHTML = out;
        </script>
    </body>
</html>
