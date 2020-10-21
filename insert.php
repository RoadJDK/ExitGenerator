<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "passwordsdb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$users = $_GET["users"];
$passwords = $_GET["passwords"];

// Attempt insert query execution
$sql = "INSERT INTO usertable (users, passwords) VALUES ('$users', '$passwords')";

if(mysqli_query($link, $sql)){
    echo "success";
} else{
    echo "fail";
}

// Close connection
mysqli_close($link);
?>