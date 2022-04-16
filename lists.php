<?php 

include('header.php');
include('api.php');
?>

         <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:0px;margin-top:43px;">

    <div class="w3-row w3-grayscale-min">
    <div class="w3-quarter">
     <?php 
     $address=$_GET["address"];

     countryLevel($address);


    ?>
     
   </div>
    
   <div class="w3-quarter">
    <?php 
     $address=$_GET["address"];

     stateLevel($address);


    ?>
     
    </div>
    
    <div class="w3-quarter">
    <?php 
     $address=$_GET["address"];

    countyLevel($address);


    ?>
     
    </div>

    <div class="w3-quarter">
     <?php 
     $address=$_GET["address"];

    cityLevel($address);


    ?>
  </div>
    
        
      
 
          
       
    </div>

    <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
                overlayBg.style.display = "none";
            } else {
                mySidebar.style.display = 'block';
                overlayBg.style.display = "block";
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        }
    </script>

</body>

</html>