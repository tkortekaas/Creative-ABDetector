<?php
$servername = 'localhost';
$dbusername = 'username';
$dbpassword = 'password';
$dbname = 'database';
$dbtable = 'table';
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

$answer1 = $_POST['answer1'];
if (!preg_match('/^[ABC]{1}$/', $answer1))
    exit();
echo 'valid';

$sql = 'INSERT INTO ' . $dbtable . ' (answer1) VALUES ("' . $answer1 . '")';
mysqli_query($conn, $sql);
mysqli_close($conn);
exit();