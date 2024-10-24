<?php
// Connect to server/database
$mysqli = mysqli_connect("localhost", "YOUR_LOGIN", "YOUR_PASSWORD", "YOUR_DATABASE");
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
} else {
    echo "Connected to the database successfully.";
}

// Run SQL query
$res = mysqli_query($mysqli, "SELECT name, species, age FROM pet");

// Are there any errors in my SQL statement?
if (!$res) {
    print("MySQL error: " . mysqli_error($mysqli));
    exit;
}

// How many rows were returned?
$rowCount = mysqli_num_rows($res);
echo("<p>" . $rowCount . " record(s) were returned...</p>");
?>

<!DOCTYPE html>
<html>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<body>

<h2>Pet Records</h2>

<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Species</th>
        <th>Age</th>
    </tr>
    <?php
    // Loop through resultset and display each field's value
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['species']) . "</td>";
        echo "<td>" . htmlspecialchars($row['age']) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<p>To understand the example better, we have added borders to the table.</p>

</body>
</html>