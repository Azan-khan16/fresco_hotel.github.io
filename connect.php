<?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "hotel_reservation");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
  
        if(isset($_POST['submit'])){
          $name =  $_POST['name'];
        $email = $_POST['email'];
        $phone =  $_POST['phone'];
        $relative_phone = $_POST['relative_phone'];
        $cnic = $_POST['cnic'];
        $address = $_POST['address'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];

         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO booking (`name`, `email`, `phone`, `relative_phone`, `cnic`, `address`, `check_in`, `check_out`) VALUES ('$name',
            '$email','$phone','$relative_phone','$cnic' , '$address' , '$check_in' , '$check_out')";
         
        if(mysqli_query($conn, $sql)){
            echo "";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        }
         
        // Close connection
        mysqli_close($conn);
        ?>