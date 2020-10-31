<?php
$host="localhost";
$user="root";
$password="";
$dbname="signup";

$conn=mysqli_connect($host, $user, $password, $dbname) or die();

if($conn)
{
    ?>
        <script>
        alert("Connected to Database.");
        </script>
        <?php
}
?>