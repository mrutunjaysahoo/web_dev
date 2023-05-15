<?php

session_start();

include'databaseconnection.php';

if(isset($_SESSION['uname']))
{

$x=$_SESSION['uname'];


if(isset($_SESSION['count']))


$_SESSION['count']=$_SESSION['count']+1;
 
  
   
else
    
$_SESSION['count']=1;


if($_SESSION['count']>=11)
     
              {
                
              header("location:after_exam_completon_page.php");            
            
               }
  
$p=$_SESSION['count'];


$sql="SELECT * FROM questionbank where qsent=0 order by rand() limit 1";

$result=mysqli_query($link,$sql);


   $row =mysqli_fetch_array($result);

        $serial=$row ['serialnumber'];
     
        $ques=$row ['questions'];

        $ans1=$row ['ans1'];

        $ans2=$row ['ans2'];

        $ans3=$row ['ans3'];

        $ans4=$row ['ans4'];

        $correctans=$row ['correctans'];

    echo " <html>

               <body bgcolor='grey'>              

                <br>
                   <br>
                     <br>
                       <br>

              welcome $x &nbsp &nbsp  $p
               
                   <hr>

                <h1> <center>TEST</center></h1>
                   
                    <hr>

               <br>
                   <br>
                     <br>
                
           <center>
    
          <form method='post'>

          <table>
       
          <tr>
             <td>
          <input type='hidden' name='b' value='$serial'>
            </td>
          </tr>
 

          
          <tr>
             <td>
          <label>$ques</label>
          
          <input type='hidden' name='c' value='$ques'>
           </td>
          </tr>
 

           
          <tr>
             <td>
          <input type='radio' name='g' value='$ans1'> $ans1
           
          <input type='hidden' name='j' value='$ans1'>
            </td>
          </tr>
 
            
            
          <tr>
             <td>    
          <input type='radio' name='g' value='$ans2'> $ans2 

          <input type='hidden' name='k' value='$ans2'>
            </td>
          </tr>
 

 
             
          <tr>
             <td>          
          <input type='radio' name='g' value='$ans3'> $ans3 

          <input type='hidden' name='l' value='$ans3'>
            </td>
          </tr>
    
           
           
          <tr>
             <td>
          <input type='radio' name='g' value='$ans4'> $ans4
                        
          <input type='hidden' name='m' value='$ans4'>
            </p>

             
          <tr>
             <td>
          <input type='hidden' name='h' value='$correctans'>
            </td>
          </tr>
   
                
              
          <tr>
             <td>
             <input type='submit' name='mno' value='SUBMIT'>
             </td>
          </tr>
 
       
           </table>            

        </form>

               </center>

         

        </body>
    </html>";
    

 if(isset($_POST['mno']))

      {

   
    $sql="INSERT INTO testdata (studentname,question,ans1,ans2,ans3,ans4,correctans,givenans) VALUES ('$x','$_POST[c]','$_POST[j]','$_POST[k]','$_POST[l]','$_POST[m]','$_POST[h]','$_POST[g]')";
    
    
    mysqli_query($link,$sql);
   
    echo "Registered Successfully";
     
     $sql1="UPDATE questionbank SET qsent=1 where serialnumber='$_POST[b]'" ; 

      mysqli_query($link,$sql1);
     
      

       }

    

  
mysqli_close($link);

}

 ?> 
