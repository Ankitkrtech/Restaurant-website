<style>
.mycss{
color: green;
    border:1px solid #000;
    background: #ccc;
    padding: 10px;
}
</style>

<?php
$sever_name="localhost";
$user_name="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($sever_name,$user_name,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $myorder=$_POST['myorder'];
    $message=$_POST['message'];
        $sql_query="INSERT INTO `database123` (`name`, `email`, `number`, `myorder`, `message`) VALUES ('$name', '$email', '$number', '$myorder', '$message');";

        if(mysqli_query($conn,$sql_query))
        {
            echo "<p class='mycss'>New details entered </p>!";
        }
        else
        {
            echo "Error: " . sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);

    }
?>