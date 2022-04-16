<?php include_once 'header.php';?>
<?php include_once 'api.php';?>
 <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:0px;margin-top:43px;">
       
  <br></br>
    <section>
        <div class="container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                   
                    
                    <div class="feedback">
                        <h1 style="text-align:left"><?php echo $_GET['person']; ?></h1> 
                        <h1 style="text-align:right">
                        <?php    
                        //function getURLVars(){
                         $person=$_GET["person"];

                         $photo_url = $_GET["photo_url"];

                         $full_address=$_GET["address"];

                         $phone=$_GET["phone"];

                         $state=$_GET["state"];

                         $party=$_GET["party"];

                        $weburl=$_GET["website"];

                         $channel_type=$_GET["channel_type"];
                        
                         $channel_id=$_GET["channel_id"];
                        ?>
                       <a href="/rate.php?person=<?php echo $_GET["person"];?>&address=<?php echo $_GET["address"];?>&phone=<?php echo $_GET["phone"];?>&photo_url=<?php echo $_GET["photo_url"];?>&channel_type=<?php echo $_GET["channel_type"];?>&channel_id=<?php echo $_GET["person"];?>&website=<?php echo $_GET["website"];?>&party=<?php echo $_GET["party"];?>&state=<?php echo $_GET["state"];?>">Rate</a></h1>
                      </h1>
                        <hr>
                        
                         
                         
                      
                        <?php 
                        $rated=searchThePersonFirst($_GET['person']);
                    
                        if($rated==1){
                           findProfile($_GET['person']);
                        }elseif($rated==0){
                           findProfileBeforeRating();
                        }
                       
                        ?>
                        
                       
                      
                      
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php
include 'footer.php';
?>