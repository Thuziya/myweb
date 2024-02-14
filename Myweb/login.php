<?php

$uname = $_POST['uname'];
$pword = $_POST['pword'];

$con = new mysqli("localhost", "root", "", "ticampuse");
if($con->connect_error) {
    die("Failed to connect :".$con->connect_error);
}
else {
    $stmt = $con->prepare("SELECT * FROM users WHERE uname=?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if($data['uname'] === $uname && $data['pword'] === $pword) {
            header("Location: home.php");
            exit();
        }
        else /*if($data['uname'] != $uname || $data['pword'] != $pword)*/ {
            
            header("Location: index.php?error=incorrect username or password!");
        }
    }
}

?>