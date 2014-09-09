
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
<img class="active" src="../images/timbond.jpg" alt="0" />
<img src="../images/parabolictrough.jpg" alt="8" />
<img src="../images/pvpanel.jpg" alt="8" />
<img src="../images/solarwaterdistiller.jpg" alt="4" />
<img src="../images/eliodomestico.jpg" alt="7" />
<img src="../images/portablesolarcooker.jpg" alt="2" />
<img src="../images/fresnel.jpg" alt="3" />
</div>
<!--Introduction Block-->   

    <!--Block reserved for symbol of the solar oven-->
    <div id="introtitle">
	<p id="icontitle">What is ESW?</p>
	
    </div>
    
    <div id="blockcontain">
    <div id="block1">
    <img src="../images/sunicon.png" class="intropic" alt="Solar Oven Symbol" />
    <p id="block1text">
    </p>
    </div>
    
    <!--Block reserved for symbol of the sun-->
    <div id="block2">
    <img src="../images/ovenicon.png" class="intropic" alt="Sun Symbol" />
    </div>
    
    <!--Block reserved for symbol of the earth-->
    <div id="block3">
    <img src="../images/earthicon.png" class="intropic" alt="Earth Symbol" />
    </div>
    </div>

<!--Quote and Short Description of Team-->
<div id="wrapper1">

<div id="mission">
    <p>"Insert Tim Quote"</p>
</div>

<div class = "section" id="about">
    <h2> About Solar Cooker</h2>
    <p>The Solar Cooker team designs, builds, and tests solar cookers, solar fryers and other solar
    powered systems. Our mission is to improve and optimize solar oven designs in order to provide
    cheap, sustainable, easy alternatives to wood fired cooking. We are partnered with Grupo Fenix,
    an organization at the Universidad Nacional de Ingeneria in Managua, Nicaragua, and Las Mujeres
    Solares de Totogalpa, a women's collective in Sabana Grande, Nicaragua.  Grupo Fenix works in
    Nicaragua to develop, implement and publicize renewable, sustainable solutions to energy needs.
    Las Mujeres Solares de Totogalpa has worked with Grupo Fenix building and using solar cookers,
    dryers, water distillers, biogas generators, charcoal production and charcoal stoves. They have
    a Solar Restaurant, in which the food is prepared with solar cookers and other alternative energy
    cooking methods, including use of electricity from photovoltaic solar arrays and gas from bio-digested
    manure. Sabana Grande is in a region suffering from deforestation, suffering from erosion of topsoil
    and the loss of water retention.  The use of Solar Ovens reduces the need for women to spend hours of
    their day gathering wood for cooking fuel and helps reduce the health risks from fires used for
    cooking and the smoke from open fires in the cooking areas, frequently within the house.
    The Solar Cooker Team works to evolve the cooker design in use in Nicaragua and increase the
    use of Solar Ovens.  New designs are careful to use materials and technologies available to
    our cooperators in Nicaragua.  The team visited Las Mujeres... and Grupo Fenix this spring in
    Sabana Grande during spring break.  Eight members of the team had a successful visit with the
    Solar Women, building 1 new (more portable) cooker, two water distillers and a bicycle powered
    electricity generator.  Here is a short teaser for a video about Las Mujeres that resulted from
    our Spring 2012 trip.<br><br><br><br></p>
  
  
  
</div>
</div>
<?php include 'footer.php';?>
    </body>
</html>
