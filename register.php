<?php
session_start();
    include("connection.php");
    include("function.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $myEmail = $_POST['email'];
        $pass = $_POST['password'];
        if(!empty($name) && !empty($myEmail) && !empty($pass) ){
            //save from database
            $query = "INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$name', '$myEmail', '$pass')";
            mysqli_query($con, $query);
            header("Location: index.php");
            die;
        }
        else {
            echo "This field is required";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #d1d5d6">
    <div id="app">
        <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow" style="border-radius:40px 0 40px 0">
                        <div class="card-body">
                            <div class="text-center">
                            <img src="download.png" alt="avatar" class="rounded-circle img-fluid " height="100px" width="100px">
                                <h4>Registration Page</h4>
                            </div>
                            <form method="POST">
                            <div class="form-outline mb-4 text-start">
                                    <label for="validationCustom01" class="col-form-label">Name</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-person-fill"></i>
                                    </div>
                                    <input type="text" id="validationCustom01" placeholder="Kaldero" name="name" class="form-control"/>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo $nameErr ?></strong>
                                    </span>
                                </div>
                                <div class="form-outline mb-4 text-start">
                                    <label for="email" class="col-form-label">Email</label>
                                    <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                    <input type="email" id="email" placeholder="juandelacruz@hotmail.com" name="email" class="form-control"/>
                                </div>
                                <div class="form-outline mb-4 text-start">
                                    <label for="email" class="col-form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text" onclick="password_show_hide();">
                                            <i class="fas fa-eye" id="show_eye"></i>
                                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                        </span>
                                        <input id="password" type="password" name="password" placeholder="Must be 8-20 characters long." class="form-control"/>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class=" text-center btn btn-dark mb-2">Sign up</button>
                                </div>
                                <div class="text-center">
                                    <p>Already have an account? <a href="login.php">Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function password_show_hide() {
        var x = document.getElementById("password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            }
            else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>