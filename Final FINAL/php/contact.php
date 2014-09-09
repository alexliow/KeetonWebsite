<?php
include 'header.php';
?>

<img src="../images/johnson.jpg" id="johnson" alt="contact" />



<div id="contactwrap">
<div id="table"> 
<div id="office">

   <h2>House Office </h2>
       <p> House Office Phone: 607-255-5001</p>
       <p> House Office Fax: 607-255-3767</p>
       <p> Monday - Friday:   9:00 am - 8:00 pm</p>
       <p> Saturday:  11:00 am - 4:00 pm </p>
       <p> Sunday:  5:00 pm - 7:00 pm</p>
       <p> When the office is closed, please contact the GRF
       on call for assistance with any urgent needs (327-1710).</p> 
</div>

<div id="emergency">
       <h2> Emergency Help</h2>
           <p> <strong> Cornell University Police</strong>
           <br> 607 255-1111 or 911
           <br> immediate assistance, emergency response/ambulance, 
           reporting suspicious activity and crimes</p>
           
           <p> <strong> Gannett Health Services </strong>
               <br> 607 255-5155
               <br> medical and mental health care, consultation,  
               coordination with hospital and other local services </p> 
           <p> <strong>Faculty and Staff Assistance Program (FSAP)</strong>
               <br> 607 255-2673
              <br> consultation and support around work/life issues, 
               referral to local providers
               </p>
           <p> 
               <strong>The Advocacy Center</strong>
               <br> 607 277-5000
               <br> Ithaca&#39;s sexual and relationship violence hotline, 
               immediate support
           </p>
           <p> 
               <strong>Local Crisis Line</strong>
               <br> 607 272-1616
               <br> Ithaca&#39;s suicide prevention services, crisis counseling
           </p>
   </div>
<div id="suggestbox">
   <h2> Suggestion Box! </h2>
   <p> Got any suggestions to improve Keeton? Submit them below!</p>
    <form action="email2.php" method="post">
   Name(Optional): <input type="text" name="name3"> <br>
   Netid(Optional): <input type="text" name="netid3" size="30"> <br>
   Room #(Optional): <input type="text" name="room3" size="30"> <br>
   Suggestion:
   <br><textarea name="suggestion" rows="10" cols="80" required> </textarea> 
   
   <input type="submit" name="submit" value="Send Suggestion">
   <input type="reset" value="Reset">
 </form>
</div>
  
   
</div>
<div id="other-contact"> 
       <h2> Other Contact Information</h2>
           <p>More information about the West Campus House System and its programs, contact WestCampusHouseSystem@cornell.edu.
            </p>
           <p> General information related to housing rates and assignments, contact Campus Life Housing and Dining, 206 Robert Purcell Community Center; housing@cornell.edu.
        </p>
   </div>
</div>

<?php include 'footer.php';?>
</body>
</html>