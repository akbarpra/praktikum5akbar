<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../login/form-login.css">
    <title>Login</title>
</head>

<body>
    <div class="login">
    <h1 class="login-header"><b>|S E K O L A H|</b></h1>
    <form action="login.php" method="post" class="login-container">

<p>
    <input type="text" name="username" placeholder="Username" ></input>
</p>

    <p>
    <input type="password" name="password" placeholder="Password" id="myInput" ></input>
    <br>
    <input id="check" type="checkbox" onclick="myFunction()">Show Password</input>
    </p>
    <p>
    <input type="submit" value="Log in">
    </p>
    </form>
    <?php
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>";
        }
      ?>
</body>
</html>
