<?php
    session_start();
    include("connect_db.php");
    $username = $_GET['username'];
    $pass = $_GET['pass'];

    $sql = "SELECT user_name, user_password FROM user_tb 
    WHERE user_name = '$username' AND user_password = '$pass'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<script language="JavaScript">
                alert("ลงชื่อเข้าใช้สำเร็จ");
                window.location="index.php?menu=home";
                </script>';
        $_SESSION["user"] = "$username";

    } else {
        echo '<script language="JavaScript">
                alert("รหัสผ่านไม่ถูกต้อง หรือไม่มีผู้ใช้นี้ในระบบ");
                window.location="login.php";
                </script>';
    }

    $conn->close();

?>