<?php
$name=$_POST['user'];
$pw= $_POST['pw'];

require('./dbconf.php');

$sql = "SELECT name ,password FROM admin";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($name=$row['name']&&$pw=$row['password']){
            echo "<script>alert('You have been successfully signed in.');localStorage.setItem('users', 1);window.location='./index.php';</script>"; 
        }
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>