<?php
    $ph=$_GET['ph'];
    require('./dbconf.php');

    // sql to delete a record
    $sql = "DELETE FROM admission WHERE phone=$ph";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Your data has been successfully deleted.');window.location='./index.php';</script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>
