

<!--This is just an outline for how we want the page to look.
The layout will be similar to this with more descriptions.
We will change the code so that it resizes better. -->


<?php
include 'header.php';
?>

<img src="../images/16.jpg" id="night" alt="Cornell at Night"/>

<div class = "content">
<div class = "program"> 


<h2 id="events">Upcoming Events</h2>
<iframe id="cal" src="https://www.google.com/calendar/embed?title=Keeton%20House%20Events&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;hl=en&amp;bgcolor=%23ffffff&amp;src=williamkeetonhouse%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="400"></iframe>

<h2 id="proposals">Program Proposals</h2>
<p> Have a great program in mind...? Submit your idea! </p>
   <form action="email.php" method="post">
   Name: <br><input type="text" name="name1" required> <br>
   Cornell Email(NetID@cornell.edu): <br><input type="email" name="email" size="40" required> <br>
   Room #: <br><input type="text" name="room" size="40" required> <br>

   Program Title: <br><input type="text" name="programtitle" size= "40" required> <br>
   Description of Program Idea:
   <br>
    <textarea  rows="10" cols="90" name="description" required></textarea>
   
   <br> Availability: <br>  
       <input type="radio" name="availability" value="Willing to Lead">Willing to Lead
       <input type="radio" name="availability" value="Can Help">Can Help 
       <input type="radio" name="availability" value="No Time"> No Time
   <br> Supplies Needed: 
   <br><textarea  rows="10" cols="90" name="materials" required></textarea> <br>
   
   Estimated Cost: <input type="text" name="cost" size = "10" required> <br>
   
   
   
   <br><input type="submit" name="submit" value="Send Proposal">
   <input type="reset" value="Reset">
 </form>
       
  
</div>
<div class= "program">
<h2 id="feedback"> Program Feedback</h2>
   <p> What did you think about the other programs?</p>
   <form action="email1.php" method="post">
       Program Name: <input type="text" name="program" required> <br>
       Name(Optional): <input type="text" name="name"> <br>
       Netid (Optional): <input type="text" name="netid" size="30"> <br>
       Feedback: 
       <br><textarea  rows="10" cols="90" name="thoughts"> </textarea> <br>
       
       <br><input type="submit" name="submit" value="Send Feedback">
   <input type="reset" value="Reset">
   </form>



<h2 id="advising">Advising</h2>
<p><a href="http://sas.cornell.edu/">Student and Academic Services</a></p>

<p><a href="http://www.gannett.cornell.edu/">Gannett Health Services</a></p>

<p>For more information about the West Campus House System and its programs,
contact <a href="mailto:WestCampusHouseSystem@cornell.edu">
<u>WestCampusHouseSystem@cornell.edu.</u></a> For general information related to 
housing rates and assignments, contact Campus Life Housing and Dining, 206 Robert 
Purcell Community Center; <a href="mailto:housing@cornell.edu">housing@cornell.edu.</a></p>

</div>
</div>
   
   <?php include 'footer.php';?>

</body>

</html>
