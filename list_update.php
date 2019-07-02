<?php
include("connect_db.php");

$id = $_GET['userid'];
$name = $_GET['username'];
$pass = $_GET['userpass'];
$email = $_GET['useremail'];
$tel = $_GET['usertel'];

$sql = "UPDATE user_tb SET user_name='$name', user_password='$pass', 
user_email='$email', user_tel='$tel' WHERE user_id = $id";

if ($conn->query($sql) === TRUE) {
    echo '<script language="JavaScript">
            alert("อัปเดตข้อมูลสำเร็จ");
            window.location="list.php";
            </script>';
} else {
    echo '<script language="JavaScript">
            alert("ไม่สามารถอัปเดตข้อมูลได้");
            window.location="list.php";
            </script>';
}

$conn->close();

?>