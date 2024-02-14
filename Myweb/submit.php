<?php
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "ticampuse";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

$nic = $_REQUEST["nic"];
$name = $_REQUEST["name"];
$tel = $_REQUEST["tel"];
$address = $_REQUEST["address"];
$course = $_REQUEST["course"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check which button was clicked
    if (isset($_POST['save'])) {
        $sql = "INSERT INTO student (nic, name, tel, address, course)".
        "VALUES ('$nic', '$name', '$tel', '$address', '$course')";
        $result = $conn->query($sql);
        header("Location: home.php?status=Saved Successfully...");
    } elseif (isset($_POST['update'])) {
        $sql = "UPDATE student
        SET name = '$name', tel = '$tel', address = '$address', course = '$course'
        WHERE nic = '$nic'";
        $result = $conn->query($sql);
        header("Location: home.php?status=Updated Successfully...");
    } elseif (isset($_POST['delete'])) {
        $sql = "DELETE FROM student WHERE nic = '$nic'";
        $result = $conn->query($sql);
        header("Location: home.php?status=Deleted Successfully...");
    } else {
       echo "error";
    }
}


?>
