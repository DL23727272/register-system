<?php
include_once('connection.php');
$userid = $_GET['id'];
?>
<html>
<head>
<title>EDIT FORM</title>
<style>
  
  </style>
</head>
<body>
<form action="mainpage.php" method="post">
<button type="submit">BACK</button>
    </form>
  <table align="center">
    <form action="editexecute.php" method="POST">
</head>
<body>
<table align="center">
<form action="editexecute.php" method="POST">
<tbody bgcolor="red">
<?php
$query = "SELECT * FROM user WHERE `userid`= '$userid'";
$results = mysqli_query($connection,$query);
$result= mysqli_fetch_array($results);
?>
<input type="hidden" value="<?php echo $userid; ?>" name="userid">
<tr >
<td align="center" colspan="2">
<img src="img1.jpg" alt="image" width="150" height="100" >
</td>
</tr>
<tr>
<td>First Name:</td>
<td><input type="text" name ="firstname" required value ="<?php echo $result['fname']; ?>"></td>
</tr>
<tr>
<td>Middle Name: </td>
<td><input type="text" name ="middlename" value ="<?php echo $result['mname']; ?>"> </td>
</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" name ="lastname" value ="<?php echo $result['lname']; ?>" required></td>
</tr>
<tr>
<td>Sex:</td>
<td><input type="text" name ="sex" value ="<?php echo $result['sex']; ?>" required></td>
</tr>
<tr>
<td>Age</td>
<td><input type="number" name ="age" value ="<?php echo  $result['age']; ?>" required></td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text" name = "address" value ="<?php echo $result['address']; ?>" required></td>
</tr>
<tr>
<td>Username:</td>
<td><input type="text" name = "username" value ="<?php echo $result['username']; ?>" required></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name ="password" value ="<?php echo $result['password']; ?>" required></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="email" name ="email" value ="<?php echo $result['email']; ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="Submit" value ="UPDATE"></td>
</tr>
</tbody>
</form>
</table>
</body>
</html>