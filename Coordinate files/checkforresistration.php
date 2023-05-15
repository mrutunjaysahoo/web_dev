<?php
  if(isset($_POST['abc']))

      {
    include 'databaseconnection.php';
    
    $password="#";

    $sql="INSERT INTO studentdata (firstname,lastname,contactnumber,emailid,querry) VALUES ('$_POST[s]','$_POST[t]','$_POST[u]','$_POST[v]','$_POST[w]')";
    
    mysqli_query($link,$sql);
   
    echo"Registered Successfully";
    header("Location:Registration page.html"); 

    mysqli_close($link);
       }

?>