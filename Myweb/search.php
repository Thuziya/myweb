<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "ticampuse";

$nic = $_REQUEST["search"];

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the search term
if(isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query the database (replace your_table and column_name with actual table and column names)
    $sql = "SELECT * FROM student WHERE nic = '$searchTerm'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the first result
        $row = $result->fetch_assoc();
        // Assign the relevant values to variables
        $nic = $row['nic'];
        $name = $row['name'];
        $tel = $row['tel'];
        $address = $row['address'];
        $course = $row['course'];
    } else {
        // If no results found, set default values or show an error message
        $nic = "";
        $name = "";
        $tel = "";
        $address = "";
        $course = "";
        $error = "No results found";
    }

    header("Location: home.php?nic=" . urlencode($nic) . "&name=" . urlencode($name) . "&tel=" . urlencode($tel) . "&address=" . urlencode($address) . "&course=" . urlencode($course) . "&error=" . urlencode($error));
    exit();
}

?>

<?php/*
// Database connection code
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "ticampuse";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the search term
if(isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query the database
    $sql = "SELECT * FROM student WHERE nic LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display the search results
        echo "<h2>Search Results:</h2>";
        while ($row = $result->fetch_assoc()) {
            // Display relevant values
            echo "<p>{$row['address']}</p>";
            // Add more columns as needed
        }
    } else {
        echo "No results found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
</head>
<body>
    <h1>Search Page</h1>
    
    <!-- Search form -->
    <form method="post" action="">
        <label for="search">Search:</label>
        <input type="text" id="search" name="search" required>
        <button type="submit">Search</button>
    </form>
</body>
</html>
