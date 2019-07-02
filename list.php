<?php
include("connect_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user list</title>

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script> -->

    
</head>
<body>
    <div class="container">
        <h2>อัปเดตข้อมูลผู้ใช้งาน</h2>
        <br>
        <form action="list_update.php">
            <div class="row">
                <div class="col">
                    <input type="text" name="userid" id="userid" class="form-control" placeholder="ID" readonly>
                </div>
                <div class="col">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Name" required>
                </div>
                <div class="col">
                    <input type="password" name="userpass" id="userpass" class="form-control" placeholder="Password" maxLength="8" minLength="6" required>
                </div>
                <div class="col">
                    <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Email" maxLength="50" required>
                </div>
                <div class="col">
                    <input type="text" name="usertel" id="usertel" class="form-control" placeholder="Phone number" maxLength="10" minLength="10" required>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
        <br>

        <h2>รายชื่อผู้ใช้งาน</h2>
        <br>
        <table class="table" style="padding-top: 5rem;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Pssword</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <form action="list_delete.php">
                    <?php
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 

                        $sql = "SELECT * FROM user_tb";
                        $result = $conn->query($sql); 

                        $x = 1;
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $row['user_id']; ?></td>
                                    <td><?= $row['user_name']; ?></td>
                                    <td><?= $row['user_password']; ?></td>
                                    <td><?= $row['user_email']; ?></td>
                                    <td><?= $row['user_tel']; ?></td>
                                    <td>
                                        <button type="submit" name="delete" value="<?= $row['user_id']; ?>" class="btn btn-danger">Delete</button>
                                        <button type="button" name="edit" value="<?= $x; $x++;?>" class="btn btn-primary">Edit</button>
                                    </td>
                                </tr>
                            <?php 
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                    ?>
                </form>
            </tbody>
            
        
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $(".btn-primary").click(function() {
                $(".table").find('tr').eq(this.value).each(function() {
                    $("#userid").val($(this).find('td').eq(0).text());
                    $("#username").val($(this).find('td').eq(1).text());
                    $("#userpass").val($(this).find('td').eq(2).text());
                    $("#useremail").val($(this).find('td').eq(3).text());
                    $("#usertel").val($(this).find('td').eq(4).text());
                    // $(".btn-success").val($(this).find('td').eq(0).text());
                });
                // $(".btn-success").attr("name", "edit");
            });
        });
    </script>
</body>
</html>