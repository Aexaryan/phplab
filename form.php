<!DOCTYPE html>
<html>

<head>
    <title>Employees Form</title>
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

<main>
    <h1>Employees Form</h1>
    <form action="" method="post">
      <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>

        <label for="OrgzNumber">Organization Number (Primary Key):</label>
        <input type="text" id="OrgzNumber" name="OrgzNumber" required><br><br>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" required><br><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $OrgzNumber = $_POST['OrgzNumber'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $salary = $_POST['salary'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $description = $_POST['description'];

        // Database Connectivity
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "Alex2";

        // Creating a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO `Employees` (`OrgzNumber`, `firstName`, `lastName`, `salary`, `department`, `gender`, `description`) VALUES ('$OrgzNumber', '$firstName', '$lastName', '$salary', '$department', '$gender', '$description')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    }
    ?>
</main>

<footer>
    <p>&copy; 2023 Alexander IT. All Rights Reserved.</p>
</footer>
<script>
window.addEventListener('load', function(){
    var footerHeight = document.querySelector('footer').offsetHeight;
    document.querySelector('.container').style.marginBottom = footerHeight + 'px';
});
</script>
</body>
</html>
