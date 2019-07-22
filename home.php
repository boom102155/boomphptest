<?php
include("connect_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div id="homepage" class="container">
        <h2>
            <?php           
                echo "สวัสดี " . $_SESSION["user"];                                      
            ?>
        </h2>
    </div>
</body>
</html>