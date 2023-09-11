<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'ricotest1') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['btype'])) {
          $name= $_POST['name'];
          $email= $_POST['email'];
          $phone= $_POST['phone'];
          $btype= $_POST['btype'];
  
          $sql= "INSERT INTO users (name, email, phone, btype) VALUES ('$name', '$email', '$phone', '$btype')";
  
          $query = mysqli_query($conn,$sql);
            if($query) {
              echo 'Entry Successfull';
            }
            else {
              echo 'Error Occurred';
            }
        }
    }

?>