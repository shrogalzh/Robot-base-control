
<?php
                                   // Create connection
$conn = mysqli_connect("localhost", "root", "", "control of robot arm");
                                  
                                   // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM `direction` WHERE 1"); 

          // LOOP TO PRINT DATA

While($row = $result->fetch_assoc()){

                echo "direction : ".$row['direction']."<br>";
  }

          $conn->close(); 

          ?>
