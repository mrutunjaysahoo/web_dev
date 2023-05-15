<?php
if(isset($_POST['xyz']))
{
include'databaseconnection.php';



$sql="SELECT * FROM questionbank";

if($result=mysqli_query($link,$sql))

{
 if(mysqli_num_rows($result)>0)

 {

 echo "<table border=1 bgcolor=cyan>";
    echo "<tr>";

  echo "<td width=100px>";
     echo "serialnumber";
  echo "</td>";

  
  echo "<td width=340px>";
     echo "questions";
  echo "</td>";

  echo "<td width=100px>";
     echo "ans1"; 
  echo "</td>";

  echo "<td width=100px>";
     echo "ans2";
  echo "</td>";

  echo "<td width=100px>";
     echo "ans3";
  echo "</td>";

echo "<td width=100px>";
     echo "ans4";
  echo "</td>";

echo "<td width=100px>";
     echo "correctans";
  echo "</td>"; 
 
 

 echo "</tr>";
 echo "</table>";


 echo "<table border=1 bgcolor=cyan>";
 
while($row=mysqli_fetch_array($result))

{
  
  echo "<tr>";

  echo "<td width=100px>";
     echo $row['serialnumber'];
  echo "</td>";

  
  echo "<td width=340px>";
     echo $row['questions'];
  echo "</td>";

  echo "<td width=100px>";
     echo $row['ans1']; 
  echo "</td>";

  echo "<td width=100px>";
     echo $row['ans2'];
  echo "</td>";

  echo "<td width=100px>";
     echo $row['ans3'];
  echo "</td>"; 

 echo "<td width=100px>";
     echo $row['ans4'];
  echo "</td>"; 

 echo "<td width=100px>";
     echo $row['correctans'];
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