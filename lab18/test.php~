<html><head>
<?php
// Create connection object
$user = "ccardenas2";  
$conn = mysqli_connect("localhost",$user,$user,$user);
// Check connection
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

if (isset($_POST['choice']))
{
    $choice = $_POST['choice'];
    if ($choice == "Create User")
    {
    $stmt = $conn->prepare("INSERT INTO users SET username=?, 
                                     email=?, 
                                     usergroup=? 
                                     ");
    $stmt->bind_param("sss", $username, $email, $usergroup);

    $username=$_POST['username155'];
    $usergroup=$_POST['usergroup'];
    $email=$_POST['email155'];
    
    $stmt->execute();

    }
}
?>
</head>
<body>

<form method='POST'>
<br>Username:<input type='text' name='username155' >
<br>Email:<input type='text' name='email155' >
<br>Usergroup:<input type='text' name='usergroup' >
<br><input type='submit' name='choice' value='Create User'>
</form>

</body>
</html>