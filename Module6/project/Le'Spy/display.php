<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Le'Spy Cafe</title>
  <meta name="description" content="Le'Spy Coffee and Pastry Spot">
  <meta name="author" content="David Udofia">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/slicknav.min.css">
  <link rel="stylesheet" href="css/pgwslideshow.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
  
   <!--Modernizr-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="icon/svg" href="images/lconB.svg">

</head>
<body>
       
<header id="tops">
      
       <div class="logo row">
          <div class="two columns">
            <a href="index.html">Le'Spy</a>        
          </div><!--column-->
       </div>   <!--row-->
       
         <!--Begin Nav-->
        
       <nav id="menu" class="u-pull-right row">
          <div class="ten column">          
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a> </li>
                    <li><a href="#">COFFEE</a></li>
                    <li><a href="display.php">DISPLAY</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">LOCATION</a></li>
                </ul>
            </div>
        </nav>
        <!--End Nav-->
</header>
  
  <div>
      <h2>
        Page 1
      </h2>
      <p>
        Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
      </p>
    </div>
    
     <div class="row">
      <div class="u-full-width">
    
        <?php
      include 'config.php';
      include 'opendb.php';

      $sql= "SELECT fname, lname, address FROM customers LIMIT 10";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              echo "FirstName: " . $row["fname"]. "<br>";
              echo "LastName: " . $row["lname"]. "<br>";
              echo "EmailAddress: " . $row["address"]. "<br><hr>";
          }
      } else {
          echo "0 results";
      }

      mysqli_close($conn);

      ?>
      </div>
    </div>
    

       
    <section id="social">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                   <ul class="socialMedia">
                       <li class="twitter"><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                       <li class="facebook"><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                       <li class="instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> 
                       <li class="pinterest"><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                    </ul> 
                 </div><!--column-->
            </div><!--row-->
        </div><!--container-->
    </section>
        
   
<footer id="bottoms">
        <div class= "row twelve columns">
               <h2 id="foot">Contact</h2>
               <p>2800 Hennepin Avenue South, Minneapolis, MN 55405</p>
               <p>&copy; 2019 Le'Spy Cafe. All Rights Reserved.</p> 
        </div>
</footer>

  <!-- Primary Page Layout
  ––––––––––––––––––––––––––––––––––––––––––––––––––-->


  <!-- End Document
  ––––––––––––––––––––––––––––––––––––––––––––––––––-->
  <!--jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
  <!--Slicknav-->
  <script src="js/jquery.slicknav.min.js"></script>

  <!--PgwSlidehsow Plugin-->
  <script src="js/pgwslideshow.js"></script>
  
  <script>
    $(document).ready(function() {
    var pgwSlideshow = $('.pgwSlideshow').pgwSlideshow();
    pgwSlideshow.startSlide({
    transitionEffect : 'fading',
    adaptiveDuration : 3000
    });
    });  
  </script>
  
  <script>
      $(document).ready(function(){
      $('#menu').slicknav();
      });
  </script> 
  
</body>
</html>