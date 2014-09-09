
        <?php include 'header.php'; ?>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>  
        
    <script type="text/javascript" >
        function cycleImages(){
      var $active = $('#background_cycler .active');
      var $next = ($('#background_cycler .active').next().length > 0) ? $('#background_cycler .active').next() : $('#background_cycler img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
      $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
      $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }

    $(window).load(function(){
        $('#background_cycler').fadeIn(1500);//fade the background back in once all the images are loaded
          // run every 6s
          setInterval('cycleImages()', 6000);
    })
</script>
 

    </head>
    <body>
   
	
    


   <!-- This is the Image Slideshow-->
    <div id="background_cycler" >

<script type="text/javascript">
$('#background_cycler').hide();//hide the background while the images load, ready to fade in later
</script>
<img class="active" src="../images/cornell1.jpg" alt="0" />
<img src="../images/keeton9.jpg" alt="8" />
<img src="../images/cornell4.jpg" alt="4" />
<img src="../images/keeton8.jpg" alt="7" />
<img src="../images/cornell2.jpg" alt="2" />
<img src="../images/cornell5.jpg" alt="5" />
<img src="../images/cornell6.jpg" alt="6" />
</div>
<div id="wrapper1">
<div id="mission">
    <p>"William Keeton House, named in honor of Cornell faculty member William T. Keeton
    (February 3, 1933 &minus; August 17, 1980), accommodates continuing undergraduates and transfer students who wish to live on the Cornell University campus in a
    faculty-led student-governed residential house."</p>
</div>

<div class = "section" id="about">
    <h2> About the Keeton House</h2>
    <p> William Keeton House is the fourth of five houses on West Campus that are part of the Residential Initiative at
    Cornell University. The House was named in honor of Cornell faculty member William T. Keeton. The House has its own dining room,
    leisure common area, library, pantry, guest suite and rooms for computing, seminars, academic support, and programs,
    engaging faculty, students, and staff in an environment of collegiality, civility, and stewardship.<br><br><br><br></p>
  
  <div class="section" id="events1"><h2> Events</h2>
    <iframe id="cal" class="moveleft" src="https://www.google.com/calendar/embed?title=Keeton%20House%20Events&amp;mode=AGENDA&amp;height=400&amp;wkst=1&amp;hl=en&amp;bgcolor=%23ffffff&amp;src=williamkeetonhouse%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="400"></iframe>

</div>
  
</div>
</div>
<?php include 'footer.php';?>
    </body>
</html>
