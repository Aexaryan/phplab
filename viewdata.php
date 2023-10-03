<!DOCTYPE html>
<html>

<head>
    <title>Employees Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h2>Alexander IT</h2>
    <nav>
        <a href="index.html">Home</a>
        <a href="form.php">Form</a>
        <a href="viewdata.php">Data</a>
    </nav>
</header>

<div class="container">
    <h1>Employees Data</h1>
    
    <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "Alex2";

   // Creating a connection
   $conn = mysqli_connect($servername, $username, $password, $database);

   if(!$conn)
   {
       die("Sorry, connection failed!!" . mysqli_connect_error());
   }
   else{
       echo "Connection Sucessfull";
   }

   $sql = "SELECT * From `Employees`";
   $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    
    if ($num > 0) {
        echo "<table class='data-table'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Org. Number</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Salary</th>";
        echo "<th>Department</th>";
        echo "<th>Gender</th>";
        echo "<th>Description</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['OrgzNumber']) . "</td>";
            echo "<td>" . htmlspecialchars($row['firstName']) . "</td>";
            echo "<td>" . htmlspecialchars($row['lastName']) . "</td>";
            echo "<td>" . htmlspecialchars($row['salary']) . "</td>";
            echo "<td>" . htmlspecialchars($row['department']) . "</td>";
            echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
            echo "<td>" . htmlspecialchars($row['description']) . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    }
    ?>
</div>

<footer>
    <p>&copy; 2023 Alexander IT. All Rights Reserved.</p>
</footer>

</body>
</html>
