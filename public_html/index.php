<h1>This is my miniproject</h1>
<h4>Attempting Mysql connection from php...</h4>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
   die("Connection failed: " .$conn->connect_error);
}
echo "Connected to MYSQL successfully..!  Version-";
echo mysqli_get_server_info($conn);
?>
