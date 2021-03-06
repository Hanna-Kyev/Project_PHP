<?php
// php app\cli\test.php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "Project";
$conn = mysqli_connect($host, $user, $password, $dbname);
$sql = "DELETE FROM guestbook WHERE id = 2";
mysqli_query($conn, $sql);
$sql = "SELECT * FROM guestbook";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $collection = mysqli_fetch_all($result, 1);
        print_r($collection);
} else {
    echo "Not result";
}
mysqli_close($conn);