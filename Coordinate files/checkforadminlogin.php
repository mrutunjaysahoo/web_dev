<?php
if(isset($_POST['jkl']))
{
include'databaseconnection.php';

$password="#";

$sql="SELECT adminpassword FROM studentdata WHERE adminusername='$_POST[g]'";

if($result=mysqli_query($link,$sql))

{
 if(mysqli_num_rows($result)>0)

 {
 
while($row=mysqli_fetch_array($result))

{
 $password=$row['adminpassword'];
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

if($password=="$_POST[h]")

{
 echo "password matched";
 header("Location:Question and result interface page.html");
 exit;
}

else
{
 echo"NO MATCH";
}
mysqli_close($link);
}
?>