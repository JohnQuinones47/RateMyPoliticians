<?php include('api.php');?>
<?php include_once 'header.php';?>
<?php include_once 'function.php';?>
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:380px;" id="mySidebar"><br>
   
            <?php fetch_polls();?>
          
    </nav>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:400px;margin-top:68px;">

      <div class="container">
        

  <form  method="get" action="" class="w3-center">
    <h1>Search and Rate Politician</h1>
  <div class="form-row">
    <div class="col-8">
      <input type="text" class="form-control" id="address" name="address" placeholder="Enter The Full Address">
    </div>
    <div class="col-2">
      <button type="submit" class="btn btn-primary btn-sm">Search By Address</button>
    </div>
     
  </div>
   <div class="form-group">
      <div class="form-row">
        <div class="col-2">
      <div class="form-check">
      <input class="form-check-input" type="checkbox" id="fedral" name="fedral">
      <label class="form-check-label" for="gridCheck">
        Federal Level
      </label>
    </div>
        </div>
        <div class="col-2">
      <div class="form-check">
      <input class="form-check-input" type="checkbox" name="state">
      <label class="form-check-label" for="gridCheck">
         State Level
      </label>
    </div>
        </div>
        <div class="col-2">
      <div class="form-check">
      <input class="form-check-input" type="checkbox" name="county">
      <label class="form-check-label" for="gridCheck">
         County Level
      </label>
    </div>
        </div>
          <div class="col-2">
      <div class="form-check">
      <input class="form-check-input" type="checkbox" name="sublocal">
      <label class="form-check-label" for="gridCheck">
         Sublocal Level
      </label>
    </div>
        </div>

      </div>
    
    
  </div>
  
</form>

   <hr> 
   <section>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12441716.154431816!2d-102.60859472483341!3d41.18377631423219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sca!4v1634275155878!5m2!1sen!2sca" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </section>
     <hr> 
     <section>
      <?php
      $address=$_GET["address"];
      $fedral=$_GET["fedral"];
      $state=$_GET["state"];
      $county=$_GET["county"];
      $sublocal=$_GET["sublocal"];

      if($_GET["fedral"] ==null or $_GET["state"] == null or $_GET["county"]==null or $_GET["sublocal"]==null){
           
      $fedral="on";
      $state="on";
      $county="on";
      $sublocal="on";
      }

      findPoliticans($address,$fedral,$state,$county,$sublocal);


    ?>   
    </section>

  
</div>
<?php
include 'footer.php';
?>
    
        
   
