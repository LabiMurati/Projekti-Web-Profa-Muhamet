<?php
  include "crud/databaseconfig.php";
 
   

    if(isset($_POST["submit"])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users( email,username, password) VALUES 
        ( :email,:username, :password)';

        $query = $conn-> prepare($sql);
       
        $query->execute([           
            'email' => $email,
            'username' => $username,
            'password' =>$hashedPassword
        ]);


        header("Location: Login.php");
        
    }?>


<html>

<head>
    <meta charset="UTF-8" />
    <title>Register</title>
    <meta name="description" content="Login - Register Template" />
    <meta name="author" content="Lorenzo Angelino aka MrLolok" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <style>
    body {
        background-color: #303641;
    }
    </style>
</head>

<body>
    <div id="container-register">
        <div id="title"><i class="material-icons lock">lock</i> Register</div>

        <form method="POST">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="Email" name="email" type="email" required class="validate"
                    autocomplete="off" />
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" name="username" type="text" required class="validate"
                    autocomplete="off" />
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" name="password" type="password" required class="validate"
                    autocomplete="off" />
            </div>

            <div class="remember-me">
                <input type="checkbox" />
                <span style="color: #ddd;">I accept Terms of Service</span>
            </div>

            <input type="submit" name="submit" value="Register" />
        </form>

        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Do you already have an account?
            <a href="#"><button id="register-link">Log In here</button></a>
        </div>
    </div>
</body>

</html>

© 2020 GitHub, Inc. Terms Privacy Security Status Help Contact GitHub Pricing
API Training Blog About