 <?php 
    require_once("userheader.php");
    require_once("connection.php");
    session_start();
?>



  <!-- Main picture. || Body part-->
  <div id="main-content" class="container">
    <div class="jumbotron">
      <img src="images/home.jpg" alt="picture of restaurant" class="img-responsive visible-xs">
    </div>

    <!--Menu and other images -->
    <div id="home-tiles" class="row">
       <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="executive.php"><div id="menu-tile"><span>Executive</span></div></a>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="members.php"><div id="specials-tile"><span>Members</span></div></a>
      </div>

      <div class="col-md-4 col-sm-12 col-xs-12">
         <a href="https://goo.gl/maps/CNCT8HbV7KPuwfkN9" target="_blank">
          <div id="map-tile">


            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.8964533706626!2d91.84237551407944!3d24.901513384034537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750554e52cb7077%3A0xf183012d4710cc19!2sSylhet%20International%20University!5e0!3m2!1sen!2sbd!4v1604477990892!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <span>map</span>
          </div>
         </a>
      </div>
    </div>
  </div>

  




 <?php 
    require_once("footer.php");
?>













