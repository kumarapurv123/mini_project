<?php

$user=$_POST['us'];
$pass=$_POST['pas'];

//echo $user;
//echo $pass;

$servername = "localhost";
$username = "root";
$password = "ashish282007";
$dbname = "sis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row['Username']==$user&&$row['Password']==$pass)

    {
    	header('Location: file:///C:/xampp/htdocs/SIS/index1.html');
      exit;
    }
    else
    {
    	echo "<script>Username and password are incorrect</script>";
    	header('Location: file:///C:/xampp/htdocs/SIS/index.html#');
        exit;
    }
  }
} else {
  echo "0 results";
}
$conn->close();



?>