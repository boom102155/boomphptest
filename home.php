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

    <link rel="stylesheet" href="css/hover.css">
    
</head>
<body>
    <div id="homepage" class="container">
        <h2>
            <?php           
                echo "สวัสดี " . $_SESSION["user"];                                      
            ?>
        </h2>

        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail hvr-hang">
                    <a href="#">
                        <img src="images/img-menu.jpg" alt="Lights" style="width:100%">
                        <div class="caption">
                        <p>Menu01</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail hvr-hang">
                    <a href="#">
                        <img src="images/img-menu.jpg" alt="Nature" style="width:100%">
                        <div class="caption">
                        <p>Menu02</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail hvr-hang">
                    <a href="#">
                        <img src="images/img-menu.jpg" alt="Fjords" style="width:100%">
                        <div class="caption">
                        <p>Menu03</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>