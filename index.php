<?php
session_start();
include("connect_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    

    <style>
        body{
            padding-top: 5rem;
        }
    </style>
</head>
<body>

    <?php
        if(!empty($_SESSION["user"])){
    ?>
        
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php?menu=home">PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?menu=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- <div id="hideNormalUser"> -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=regis">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=list">List</a>
                </li>
                <!-- </div> -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link" href="#" style="color: white;">
                    <?php
                        echo "สวัสดี " . $_SESSION["user"];
                    ?>
                </a>
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                <a class="btn btn-outline-success my-2 my-sm-0" href="index.php?menu=logout">Logout</a>
            </form>
        </div>
    </nav>

    <?php 
    if(($_SESSION["user"]) == 1){ 
        echo '<script>
        $(document).ready(function(){
            $(#hideNormalUser).hide()
        });
            </script>';
    }  
	?>
    
    
    <?php 
    if(isset($_GET['menu'])){ 
        if($_GET['menu'] == "home"){
            include("home.php");
        }else if($_GET['menu'] == "regis"){
            include("regis.php");
        }else if($_GET['menu'] == "list"){
            include("list.php");
        }else if($_GET['menu'] == "logout"){
            header( "location: login.php" );
            session_destroy();
        }
    }  
	?>

    <?php
        }else{
            ?>
            <div class="container">
            <?php echo 'You are not logged in. <a href="login.php">Click here</a> to log in.'; ?>
            </div>
        <?php
        }
    ?>
    
    

</body>
</html>