<?php 
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

//Db Connection
$conn = new mysqli('localhost', 'root', '', 'dotrackdb');
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into User(Email, firstName, lastName, Username, Password) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $Email, $firstName, $lastName, $Username, $Password);
    $stmt->execute();
    echo "Registration Successful!";
}
?>
