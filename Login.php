<html>

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
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
    <div id="container-login">
        <div id="title"><i class="material-icons lock">lock</i> Login</div>

        <form method="POST">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" name="email" placeholder="Username" type="text" required class="validate"
                    autocomplete="off" />
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" name="password" placeholder="Password" type="password" required class="validate"
                    autocomplete="off" />
            </div>

            <div class="remember-me">
                <input type="checkbox" />
                <span style="color: #ddd;">Remember Me</span>
            </div>

            <input type="submit" name="submit" value="Log In" />
        </form>

        <div class="register">
            Don't have an account yet?
            <a href="#"><button id="register-link">Register here</button></a>
        </div>
    </div>
</body>

</html>
<?php

 include 'crud/databaseconfig.php';

 session_start();
if(isset($_POST['submit'])){
     $username=$_POST['email'];
    $password=$_POST['password'];
    $userInformation = array($username, $password);
   
    if(empty($username) || empty($password)){       
         header("Location: index.php?error=emptyFields");
        exit();
    }
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
    $stmt->bindParam(":username",$username);
    $stmt->execute();
    $usercount = $stmt->fetchColumn();
  
    if($usercount == 0){
        header("Location: index.php?error=usernameNotFoundOrIncorrectPassword");
        exit();
    }else{
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = :username");
        $stmt->bindParam(":username",$username);
        $stmt->execute();
        $dbPassword = $stmt->fetchColumn();

        $passwordCheck = password_verify($password, $dbPassword);

       

        if($passwordCheck !== true){
            header("Location: index.php?error=usernameNotFoundOrIncorrectPassword");
            // exit();
        }else{
            $query = $conn->prepare('SELECT * FROM users WHERE username = :username');
            $query->bindParam(":username", $username);
            $query->execute();
            $user = $query->fetchAll();
            foreach($user as $user){
                $_SESSION['userId'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
            }
            header("Location: index.php?success=loginSuccess");

        }

        
        
      
    }
  }
    

 ?>