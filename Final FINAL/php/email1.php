<?php
include 'header.php';
?>

<img src="../images/16.jpg" id="night" alt="Cornell at Night"/>

<div class = "email">
<div class = "program">
    
    <?php


//PROGRAM FEEDBACK
$to = "williamkeetonhouse@gmail.com"; 

  if(isset($_POST['program'])){
 $program = $_POST['program'];
  }

 
 $headers2 = "From:" . $to;
  if(isset($_POST['name'])){
 $name = $_POST['name'];
  }
   if(isset($_POST['netid'])){
 $netID = $_POST['netid'];
   }
 
  if(isset($_POST['thoughts'])){
 $feedback = $_POST['thoughts'];
  }
 $subject2 = "Feedback for Program: ".$program;
 
 $readback = "Program: ".$program."\n Reviewer(may be blank as this is optional): "
 .$name."\n NetID(may be blank as this is optional): ".$netID."\n Feedback: ".$feedback;
 
 
 $sent = mail($to, $subject2, $readback, $headers2);
 
 
 if($sent){
        print "<h1>Your mail was sent successfully</h1>";
    }
    else {
        print "<h1>We encountered an error sending your mail</h1>";
    } 
    
    ?>
    
</div>
</div>
   
   <?php include 'footer.php';?>
</body>
</html>