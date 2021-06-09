<!DOCTYPE html>
<html>
    <head>
        <link href="./css/bootstrap.css" rel="stylesheet">
        <link href="./css/home.css" rel="stylesheet">
    </head>
    <body>
        <table><tr>
        <td>Name</td><td>Date of birth</td><td>Gender</td><td>Grade</td><td>Year</td><td>Previous school</td><td>mother</td><td>father</td><td>phone</td><td>email</td><td>address</td><td>Delete</td></tr>
        </tr>
        <?php
        require('./config/dbconf.php');
        $sql = "SELECT name ,dob ,gender ,grade ,year ,school ,mother ,father ,phone ,email ,address FROM admission";
        $result = mysqli_query($conn, $sql);
          
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["name"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["gender"]. "</td><td>".$row["grade"]."</td><td>".$row["year"]."</td><td>".$row["school"]."</td><td>".$row["mother"]."</td><td>".$row["father"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row['address']."</td><td><button class='btn btn-danger' onclick='delt(".$row['phone'].")'>Delete</button></td></tr>";
            }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
        ?>
        </table>
        <button onclick='window.location="./config/export.php"' class="btn btn-success">Export CSV</button>
        <script src="./js/home.js"></script>
    </body>
</html>