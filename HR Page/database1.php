<?Php
$host_name = "localhost";
$database = "yuvaparivarthan"; 
$username = "root";        
$password = "";          

$connection = mysqli_connect($host_name, $username, $password, $database);

if (!$connection) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    echo "<br>Debugging error: " . mysqli_connect_error();
    exit;
}
else{
echo $connection->error;
}


// Transfor PHP array to JavaScript two dimensional array 
//echo "<script>
  //      var my_2d = ".json_encode($php_data_array)."
//</script>";

//}
?>