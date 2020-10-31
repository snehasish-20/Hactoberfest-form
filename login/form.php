

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" 
    href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="container">
    <div class="form-info">
        <div class="header">
            <span>User Login</span>
        </div>
        <div class="fields">
            <i class="fa fa-user icon"></i>
            <input type="text" class="username" placeholder="Email" name="email" required><br>
            <i class="fa fa-lock icon"></i>
            </span><input type="password" class="password" placeholder="Password" name="password" required>
        </div>
        <div class="fpass">
            <span><a href="#" class="fp">Forgot password ?</a></span>
        </div>
        <div class="buttons">
            <input type="submit" class="btn-login" name="login-info" value="Login"">
            <input type="submit" class="register" name="register-info" value="Register">
        </div>
    </div>
</div>
</form>
<?php  
if(isset($_POST['register-info']))
{
    ?>
    <script>
        location.replace("location:../signup/register.php");
    </script>
    <?php
}
?>
</body>
</html>


<?php

include 'db.php';

if(isset($_POST['login-info']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM register WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $email_counting = mysqli_num_rows($result);
    if($email_counting)
    {
        $row_data = mysqli_fetch_assoc($result);

        $dbpass = $row_data['password'];

        $pass_decode = password_verify($password, $dbpass);

        if($pass_decode)
        {
            ?>
            <script>
                alert("login successfully!");
                location.replace('../WEBSITES/index.html');
            </script>
            <?php
        }else
        {
            ?>
            <script>
                alert("login Failed!");
            </script>
            <?php
        }

    }else
    {
        ?>
        <script>
            alert("Invalid Email Address !");
        </script>
        <?php
    }
}

?>