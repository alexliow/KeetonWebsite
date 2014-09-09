<?php 
/* [INFO/CS 1300 Project 3] form.php 
 * Contains code for the user form and submits it to posting_wall.php
 */



// A variable for the username of the current user.
$user = "NEW USER";

include 'header.php';

?>

  <!--TODO Add a name for your app -->
  <p><a href="index.php">Posting Wall</a></p>
  <p>Welcome <?php echo $user; ?></p>
  

  <!-- TODO Add more fields and customizations to your form.
       Don't forget to add method and action attributes. 
  -->
  <form method="get" action="wall.php">
    Enter your username:
        <br>
            <input type="text" name="username" required>
        <br><br>
    Enter your e-mail:
        <br>
            <input type="email" name="email" required>
        <br><br>
    Would You Rather...
        <br>
            <textarea name="this" required ></textarea>
    or...
            <textarea name="that" required ></textarea>
        <br><br>
    Which would you pick?
        <br>
        <input type="radio" name="yourchoice" value="first" required> 1st
        <br>
        <input type="radio" name="yourchoice" value="second" required> 2nd
        <br>
        <input type="submit" value="Post to Wall"><input type="reset" value="Reset">
      </form>
  
  <!-- TODO Add common footer here. -->
  </body>
  </html>

