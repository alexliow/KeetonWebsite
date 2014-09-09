<?php
include 'header.php';
?>

<img src="../images/16.jpg" id="night" alt="Cornell at Night"/>

<div class = "email">
<div class = "program">
    
<?php

 //Suggestions
 $to = "williamkeetonhouse@gmail.com"; 

 if (isset($_POST['name'])){
 $suggestion = $_POST['suggestion'];
 }
 
if(isset($_POST['name3'])){
 $name3 = $_POST['name3'];
}
if(isset($_POST['netid3'])){
 $netID3 = $_POST['netid3'];
}
if(isset($_POST['room3'])){
 $room3 = $_POST['room3'];
}
if(isset($_POST['suggestion'])){
 $suggestion = $_POST['suggestion'];
}
 $subject3 = "New Suggestion!";
 $headers3 = "From:" . $to;
 
 $outline="Name of Suggestor(may be blank as this is optional): ".$name3."\n NetID(may be blank as this is optional): "
 .$netID3."\n Room #(may be blank as this is optional): ".$room3."\n Suggestion: ".$suggestion;
 
 
$sent = mail($to, $subject3, $outline, $headers3);

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