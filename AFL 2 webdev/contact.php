<?php
    if(isset($_GET['action'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "afl2";
    
        $conn = new mysqli( $servername, $username, $password, $database );
        if($conn->connect_error){
            die("Connection Failed: ". $conn->connect_error);
        }
        $nama = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $msg = $_POST['msg'];
    
        $sql = "INSERT into table1 (nama, email, phone, msg) values ('$nama','$email','$phone','$msg');";
        if(mysqli_query($conn,$sql)){
            echo "<script type='text/javascript'>";
            echo "alert('Thank you for contacting, I will respond within 1 business days');";
            echo "window.location.href='contact.html';";
            echo "</script>";
        }
        else{
        echo "Error: ".$sql ."<br>".$conn->error;
        }
        $conn->close();
    }
?>