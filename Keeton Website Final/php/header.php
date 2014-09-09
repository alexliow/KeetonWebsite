<!DOCTYPE html> 
<html>
   <head>
       <meta charset="utf-8">
<meta name="viewport" content="width=device-width" /> 
       <link type="text/css" rel="stylesheet" href="../css/stylesheet.css" media="only screen and (min-width: 600px)">
<link rel="stylesheet" type="text/css" href="../css/mobile.css" media="only screen and (max-width: 599px)" />
       <title> William Keeton House</title>
       
       <script type="text/javascript">
   
function unhide(divID) {
var item = document.getElementById(divID);
var newdivID = divID;
var click = "click" + newdivID.substring(19);
var mine = document.getElementById(click);

if (item) {
    item.className=(item.className=='hidden')?'unhidden':'hidden';
   }
   if (item) {
   mine.innerHTML=(item.className=='unhidden')?'Click to see less':'Click to see more';
   }
 }


   </script>
   
   </head>
   <body>
   <nav>
       <ul id="navigation">
               <li id="logolink"><a href="index.php"> <img src="../images/keetonlogo.png" id ="logo" alt="Keeton Logo"/></a> </li>
               <li class="categ"><a href="house.php">The House</a></li>
<li class="categ"><a href="people.php">The People</a>
<ul>
   <li><a href="houseprofessor.php">House Professor and Dean</a></li>
   <li><a href="assistanthousedean.php">House Assistant Dean</a></li>
   <li><a href="graduate.php">Graduate Resident Fellows</a></li>
                           <li><a href="studentassistant.php">Student Assistants</a></li>
                           <li><a href="housefellows.php">House Fellows</a></li>
                           <li><a href="staff.php">Staff</a></li>
</ul>
</li>
<li class="categ" ><a href="program.php">The Program</a>
<ul>
<li><a href="program.php#events">Events</a></li>
<li><a href="program.php#proposals">Proposals</a></li>
<li><a href="program.php#feedback">Feedback</a></li>
<li><a href="program.php#advising">Advising</a></li>
</ul>
</li>
<li class="categ"><a href="contact.php">Contact</a></li>
</ul>
   </nav>
   
<div id="down">
   <img src="../images/down-arrow2.png" alt="scroll down"> 
</div>