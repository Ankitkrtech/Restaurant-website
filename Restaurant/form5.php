<?Php

$insert = false;
if(isset($_POST['Name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    // $phone = $_POST['phone'];
    // $city = $_POST['city'];
    $sql = "INSERT INTO `service`.`service` (`Name`,`Email`,`phone`,`city`) VALUES ('$Name', '$Email','$phone','$city');";
    echo $sql;
   
        if($con->query($sql) == true){
            // echo "Successfully inserted";
    
            // Flag for successful insertion
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }

        header("location:thankyou.html");
        
        $con->close();
    
}
?>
<!-- , `phone`, `city`, -->
<!-- , '$phone', '$city' -->