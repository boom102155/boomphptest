<?php
    include("connect_db.php");

    $name = $_GET['name'];
    $pwd = $_GET['pwd'];
    $email = $_GET['email'];
    $tel = $_GET['tel'];
    
    $sql = "INSERT INTO user_tb (user_id, user_name, user_password, user_email, user_tel)
    VALUES (null, '$name', '$pwd', '$email', '$tel')";

    if ($conn->query($sql) === TRUE) {
        echo '<script language="JavaScript">
                alert("บันทึกข้อมูลเรียบร้อย");
                window.location="index.php?menu=regis";
                </script>';

    } else {
        echo '<script language="JavaScript">
                alert("ไม่สามารถบันทึกข้อมูลได้");
                window.location="index.php?menu=regis";
                </script>';
    }

    $conn->close();

?>