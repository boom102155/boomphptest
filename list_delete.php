<?php
    include("connect_db.php");
    #Delete selected data
    $id = $_GET['delete'];
    $sql = "DELETE FROM user_tb WHERE user_id = $id";
    if ($conn->query($sql) === TRUE) {
        echo '<script language="JavaScript">
                alert("ลบข้อมูลสำเร็จ");
                window.location="list.php";
                </script>';
    } else {
        echo '<script language="JavaScript">
                alert("ไม่สามารถลบข้อมูลได้");
                window.location="list.php";
                </script>';
    } 
    $conn->close();
?>