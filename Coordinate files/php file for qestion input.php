<?php
  if(isset($_POST['ijk']))

      {
    include 'databaseconnection.php';
    
    $password="#";

    $sql="INSERT INTO questionbank (serialnumber,questions,ans1,ans2,ans3,ans4,correctans) VALUES ('$_POST[l]','$_POST[m]','$_POST[n]','$_POST[o]','$_POST[p]','$_POST[q]','$_POST[r]')";
    
    mysqli_query($link,$sql);
   
    echo"Registered Successfully";
    header("Location:Question input page.html"); 

    mysqli_close($link);
       }

?>