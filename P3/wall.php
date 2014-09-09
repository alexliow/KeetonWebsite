<?php 
/* [INFO/CS 1300 Project 3] posting_wall.php 
 * Processes data from form.php and shows the current user's post if valid,
 * otherwise displays an error. 
 * Includes a link to form.php if user wishes to create and submit a post.
 */ 
include 'header.php';
require('wall_database.php');

// Fetching data from the request sent by form.php  

$username = $_GET['username'];
$username = strip_tags($username);
$username = trim($username);
$firstbox = trim($_GET['this']);
$secondbox = trim($_GET['that']);
$email = $_GET['email'];
$yourchoice = $_GET['yourchoice'];
if ($yourchoice == "first"){
 $yourchoice = "1";
}
else{
 $yourchoice = "2";
 }



if (ctype_alnum($username) && strlen($firstbox)>=3 && strlen($secondbox)>=3 && strlen($firstbox)<$CHAR_LIMIT
    && strlen($secondbox)< $CHAR_LIMIT) { ?>
<p>Thanks <?php echo $username; ?> for submitting your post.</p>

<a href="form2.php"><p>Submit Again</p></a>

<p><span>All Posts</span></p>
<?php
// Saving the current post, if a form was submitted
   $post_fields = array();
   $post_fields['username'] = $username;
   $post_fields['firstbox'] = $firstbox;
   $post_fields['secondbox'] = $secondbox;
   $post_fields['yourchoice'] = $yourchoice;
   $post_fields['email'] = $email;
   $success_flag = saveCurrentPost($post_fields);

//Fetching all posts from the database
$posts_array = getAllPosts();
?>

<?php
foreach(array_reverse($posts_array) as $post){
$username1 = $post['username'];
$firstbox = $post['firstbox'];
$secondbox = $post['secondbox'];
$yourchoice = $post['yourchoice'];

if ($username == $username1){
?>
<div class="name"><?php echo $username1 . ":(Chose Option". " " . $yourchoice . ")" ?> </div><br> 
<div class="container"><div class="bubble1"><?php echo "<p>".$firstbox."</p>" ?></div>
<div class="bubble1"><?php echo "<p>".$secondbox."</p></div></div>";}
else{ ?>
<div class="name"><?php echo $username1 . ":(Chose Option". " " . $yourchoice . ")" ?> </div><br> 
<div class="container"><div class="bubble"><?php echo "<p>".$firstbox."</p>"?></div>
<div class="bubble"><?php echo"<p>".$secondbox."</p></div></div>" ;}}

  include 'footer.php';
}

elseif(strlen($firstbox)<3 || strlen($secondbox)<3){ ?>
    <p>Post isn't long enough! (Must be at least 3 characters)</p>
    <a href="form.php"><p>Return to Form</p></a>
    <img src="images/hedgehog.gif" alt="hedge" id="hog" />
    </body>
  </html>
 
<?php
}
 
elseif(strlen($firstbox)>=$CHAR_LIMIT || strlen($secondbox)>=$CHAR_LIMIT ||
       strlen($firstbox)>=$CHAR_LIMIT && strlen($secondbox)>=$CHAR_LIMIT ){ ?>
    <p>Post is TOO long! (No more than 160 characters)</p>
    <a href="form.php"><p>Return to Form</p></a>
     <img src="images/hedgehog.gif" alt="hedge" id="hog" />
     </body>
  </html>
 
<?php  }

else{ ?>
    <p> <?php print $username ?> is not a valid username! Please enter only Letters or Numbers.</p>
    <a href="form.php"><p>Return to Form</p></a>
     <img src="images/hedgehog.gif" alt="hedge" id="hog" />
     </body>
  </html>
 
<?php
}
  ?>    