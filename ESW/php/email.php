<?php
include 'header.php';
?>

<img src="../images/16.jpg" id="night" alt="Cornell at Night"/>

<div class = "email">
<div class = "program"> 


<?php

 //PROGRAM PROPOSAL
 $to = "williamkeetonhouse@gmail.com"; 
 
 if(isset($_POST['email'])){
 $email = $_POST['email'];
 }
 if(isset($_POST['programtitle'])){
 $programtitle = $_POST['programtitle'];
 }
 if(isset($_POST['name1'])){
 $poster = $_POST['name1'];
 }
 if(isset($_POST['email'])){
 $email = $_POST['email'] ;
 }
 if(isset($_POST['room'])){
 $room = $_POST['room'];
 }
 if(isset($_POST['description'])){
 $comments = $_POST['description'];
 }
 if(isset($_POST['availability'])){
 $availability = $_POST['availability'];
 }
 if(isset($_POST['materials'])){
 $supplies = $_POST['materials'];
 }
 $subject = "Proposal: " . $programtitle .", Posted by: ".$poster;
 $estcost = $_POST['cost'];
 
 $message ="Proposal: ".$programtitle."\n Proposed by: "
 .$poster."\n Room #: ".$room."\n Description: ".$comments.
 "\n Availability: ".$availability."\n Supplies Needed: ".$supplies.
 "\n Estimated Cost: ".$estcost;
 $headers = "From:" . $email;
 
$sent = mail($to, $subject, $message, $headers);


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