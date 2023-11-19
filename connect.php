<?php
    $firstName = $_POST['firstName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    //Database Connection
    $conn = new mysqli('localhost','root','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error)
    }else{
        $stmt = $conn->prepare("insert into Form(firstName, email, phone, text)
            values(?, ?, ?, ?)");
        $stmt->bind_param("ssis",$firstName, $email, $phone, $text);  
        $stmt->execute();
        echo "Successfully Recorded...!!" 
        $stmt->close();
        $conn->close();
    }
?>