<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script> -->
    
</head>
<body>
    <div class="container">
    <h2>Register</h2>
        <form class="needs-validation" action="regis_save.php" novalidate>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" autocomplete="off" required>
                    <div class="invalid-feedback">
                        Please enter your name.
                    </div>
                </div>              
            </div>
            <div class="form-group row">
                <label for="pwd" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pwd" placeholder="pwd must more 6 digit" autocomplete="off" name="pwd" maxlength="8" minlength="6" required>
                    <div class="invalid-feedback">
                        Please enter password.
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="example@email.com" name="email" autocomplete="off" required>
                    <div class="invalid-feedback">
                        Please enter email.
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tel" class="col-sm-2 col-form-label">Tel:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tel" placeholder="0997776655" name="tel" maxlength="10" minlength="10" required>
                    <div class="invalid-feedback">
                        Please enter phone number.
                    </div>
                </div>
            </div>       
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

<script> 
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
    })(); 
</script>

</html>