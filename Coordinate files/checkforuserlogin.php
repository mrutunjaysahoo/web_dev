<?php
if(isset($_POST['efg']))

{
include'databaseconnection.php';

session_start();

$password="#";

$sql="SELECT contactnumber FROM studentdata WHERE emailid='$_POST[a]'";

$_SESSION['uname']=$_POST[a];

if($result=mysqli_query($link,$sql))

{
 if(mysqli_num_rows($result)>0)

 {
 
while($row=mysqli_fetch_array($result))

{
 $password=$row['contactnumber'];
}

mysqli_free_result($result);

}

else

{
 echo"No records matching your query were found.";
}

}

else 
 
{
 echo"ERROR: Could not able to execute $sql.".mysqli_error($link);
}

if($password=="$_POST[b]")

{
 echo "password matched";
 header("Location:exam and result interface page.html");
 exit;
}

else
{
 echo"NO MATCH";
}
mysqli_close($link);
}
?>