<?php
include 'header.php';
require('wall_database.php');

//Fetching all posts from the database
$posts_array = getAllPosts();
?>

<a href="form.php"><p>Submit a Post</p> </a>
 
<?php
foreach(array_reverse($posts_array) as $post){
$username1 = $post['username'];
$firstbox = $post['firstbox'];
$secondbox = $post['secondbox'];
$yourchoice = $post['yourchoice'];
?>

<div class="name"><?php echo $username1 . ":(Chose Option". " " . $yourchoice . ")" ;?> </div><br>
<div class="container"><div class="bubble"><?php echo "<p>".$firstbox."</p>"?></div>
<div class="bubble"><?php echo"<p>".$secondbox."</p></div></div>" ;}


 include 'footer.php'; 
?> 