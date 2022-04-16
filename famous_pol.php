<?php include('api.php');?>
<?php include_once 'header.php';?>
<?php include_once 'fm_pol.php';?>
   
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-top:70px;">

      <div class="container">
    
   <hr> 
   <section>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12441716.154431816!2d-102.60859472483341!3d41.18377631423219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sca!4v1634275155878!5m2!1sen!2sca" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </section>
     <hr> 
     <section>
      <?php
      $address="USA";
     

      findFedralFamousPoliticans($address);




    ?>   
    </section>
    <section>
      <?php
      $address1="Washington";

      $address2="Minnesota";

      $address3="Utah";
     
      
     $address4="New Hampshire";

      $address5="Idaho";

      $address6="Nebraska";

       $address7="Virginia";
     
      
     $address8="Wisconsin";

     $address9="Massachusetts";

     $address10="Florida";
     $addresses=array($address1,$address2,$address3,$address4,$address5,$address6,$address7,$address8,$address9,$address10);
    foreach($addresses as $address){
      findStatesFamousPoliticans($address);
    }
    

    ?>   
    </section>

  
</div>

  </div>
  
<?php
include 'footer.php';
?>
   