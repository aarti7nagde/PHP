// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {   //if(mysqli_query($conn, $sql))
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}