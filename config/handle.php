<?php

    $name= $_POST['name'];
    $dob= $_POST['dob'];
    $gender= $_POST['gender'];
    $grade= $_POST['grade'];
    $year= $_POST['year'];
    $school= $_POST['school'];
    $mother= $_POST['mother'];
    $father= $_POST['father'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $address= $_POST['address'];

    require('./dbconf.php');
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql="INSERT INTO `admission` (`name`, `dob`, `gender`, `grade`, `year`, `school`, `mother`, `father`, `phone`, `email`, `address`) VALUES ('$name','$dob','$gender','$grade','$year','$school','$mother','$father','$phone','$email','$address')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('You hae been successfully registered.');window.location='../admission.php';</script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>