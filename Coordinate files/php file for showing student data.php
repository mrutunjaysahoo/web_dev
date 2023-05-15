<?php
if(isset($_POST['def']))
{
include'databaseconnection.php';



$sql="SELECT * FROM studentdata";

if($result=mysqli_query($link,$sql))

{
 if(mysqli_num_rows($result)>0)

 {

 echo "<table border=1 bgcolor=cyan>";
    echo "<tr>";
  
  echo "<td width=70px>";
     echo "firstname";
  echo "</td>";

  echo "<td width=70px>";
     echo "lastname"; 
  echo "</td>";

  echo "<td width=70px>";
     echo "contactnumber";
  echo "</td>";

  echo "<td width=240px>";
     echo "emailid";
  echo "</td>"; 

 echo "</tr>";
 echo "</table>";


 echo "<table border=1 bgcolor=cyan>";
 
while($row=mysqli_fetch_array($result))

{
  
  echo "<tr>";
  
  echo "<td width=70px>";
     echo $row['firstname'];
  echo "</td>";

  echo "<td width=70px>";
     echo $row['lastname']; 
  echo "</td>";

  echo "<td width=95px>";
     echo $row['contactnumber'];
  echo "</td>";

  echo "<td width=240px>";
     echo $row['emailid'];
  echo "</td>"; 

 echo "</tr>";
}

 echo "</table>";



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


mysqli_close($link);
}
?>