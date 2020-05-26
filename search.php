
<html>
<head>
    <style>table, th, td {
  border: 1px solid black;
}</style>
        <title>Search Page</title>
</head>
<body>

       <h1> You are successfully registered!</h1>

       <p1> Search for registered students!</p1>


<br>
<br>
<form action="search.php" method="post">
<input type = "text" name = "id" class = "search" placeholder = "Search Here">

<input type = "submit" name = "submit" class = "submit" placeholder = "Search">

</form>

</body>
</html>
<?php 
include_once 'connection.php';
if(isset ($_POST['id']))
{
	$search = $_POST['id'];
	$sql = "SELECT * FROM info where name LIKE '%$search%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo'<table><tr><td><b>Name</b></td><td><b>Email</b></td><td><b>Phone No.</b></td><td><b>Password</b></td></tr>';
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      echo'<tr><td>'.$row["Name"].'</td><td>'.$row["Email"].'</td><td>'.$row["Phone"].'</td><td>'.$row["Password"].'</td></tr>';
   
  }
  echo'</table>';
} else {
  echo "<br>0 results";
}
	
}
?>

