<?php
                                   // Create connection
$conn = mysqli_connect("localhost", "root", "", "control of robot arm");

                                    // TO CHECK CONNECTION
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
//------------------------------------------------------
// UPDATE forward button 
if (isset($_POST['forward'])){

   $forward=$_POST['forward'];
  $sql= "UPDATE `direction` SET `direction`='".$_POST['forward']."' WHERE 1";

$result = $conn->query($sql);
 echo "Record forward successfully";

}



//------------------------------------------------------
// UPDATE backward button 
if (isset($_POST['backward'])){

   $backward=$_POST['backward'];
  $sql= "UPDATE `direction` SET `direction`='".$_POST['backward']."' WHERE 1";

$result = $conn->query($sql);
 echo "Record backward successfully";
}


//------------------------------------------------------
// UPDATE left button 
if (isset($_POST['left'])){
   $left=$_POST['left'];

  $sql= "UPDATE `direction` SET `direction`='".$_POST['left']."' WHERE 1";

$result = $conn->query($sql);
 echo "Record left successfully";

}


//------------------------------------------------------
// UPDATE stop button 
if (isset($_POST['stop'])){
   $stop=$_POST['stop'];
  $sql= "UPDATE `direction` SET `direction`='".$_POST['stop']."' WHERE 1";

echo "Record stop successfully";

$result = $conn->query($sql);
 
}

//------------------------------------------------------
// UPDATE right button 
if (isset($_POST['right'])){
   $right=$_POST['right'];
  $sql= "UPDATE `direction` SET `direction`='".$_POST['right']."' WHERE 1";
$result = $conn->query($sql);

echo "Record right successfully";

 
}

 ?>