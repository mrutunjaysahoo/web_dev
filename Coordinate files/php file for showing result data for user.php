<?php
if(isset($_POST['bcd']))
{
session_start();
$x="#";
include'databaseconnection.php';

if(isset($_SESSION['uname']))

{
$x=$_SESSION['uname'];
}


$point=0;

$sql="SELECT * FROM testdata WHERE studentname='$x' ";

if($result=mysqli_query($link,$sql))

{
 if(mysqli_num_rows($result)>0)


 {


 echo "<table border=1 bgcolor=cyan>";
    echo "<tr>";

  echo "<td width=200px>";
     echo "Student Name";
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

echo "<td width=100px>";
     echo "Given answer";
  echo "</td>"; 
 
 
 

 echo "</tr>";
 echo "</table>";


 echo "<table border=1 bgcolor=cyan>";
 
while($row=mysqli_fetch_array($result))

{

$a=$row['correctans'];
$b=$row['givenans'];

if($a==$b)

$point=$point+2;

  
  echo "<tr>";

  echo "<td width=200px>";
     echo $row['studentname'];
  echo "</td>";

  
  echo "<td width=340px>";
     echo $row['question'];
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

echo "<td width=100px>";
     echo $row['givenans'];
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

echo "TOTAL RESULT IS:". $point;

mysqli_close($link);

}


?>