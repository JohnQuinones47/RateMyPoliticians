<?php include_once 'header.php';?>
 <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:400px;margin-top:70px;">
       
  
    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">


                    <div class="feedback">
                        <h1><?php echo $_GET['person'];  ?></h1> 
                        <hr>
               
                       
                      
                        <form method="get" action="action.php">
                            <label>How would you rate this politician’s decision-making?</label><br>
                                <input type="hidden" name="person" value="<?php echo $_GET['person']; ?>" />
                                <input type="hidden" name="photo_url" value="<?php echo $_GET['photo_url']; ?>" />
                                <input type="hidden" name="full_address" value="<?php echo $_GET['address']; ?>" />
                                <input type="hidden" name="phone" value="<?php echo $_GET['phone']; ?>" />
                                <input type="hidden" name="channel_type" value="<?php echo $_GET['channel_type']; ?>" />
                                <input type="hidden" name="channel_id" value="<?php echo $_GET['channel_id']; ?>" />

                                <input type="hidden" name="website" value="<?php echo $_GET['website']; ?>" />
                                <input type="hidden" name="state" value="<?php echo $_GET['state']; ?>" />
                                <input type="hidden" name="party" value="<?php echo $_GET['party']; ?>" />
                                
                            <span class="star-rating">
  <input type="radio" name="attribute1" value="1"><i></i>
  <input type="radio" name="attribute1" value="2"><i></i>
  <input type="radio" name="attribute1" value="3"><i></i>
  <input type="radio" name="attribute1" value="4"><i></i>
  <input type="radio" name="attribute1" value="5"><i></i>
</span>

                            <div class="clear"></div>
                            <hr class="survey-hr">
                            <label>How honest is this politician?</label><br>
                            <span class="star-rating">
  <input type="radio" name="attribute2" value="1"><i></i>
  <input type="radio" name="attribute2" value="2"><i></i>
  <input type="radio" name="attribute2" value="3"><i></i>
  <input type="radio" name="attribute2" value="4"><i></i>
  <input type="radio" name="attribute2" value="5"><i></i>
</span>


                            <div class="clear"></div>
                            <hr class="survey-hr">
                             <label>How would you rank this politician’s leadership?
</label><br>
                            <span class="star-rating">
  <input type="radio" name="attribute3" value="1"><i></i>
  <input type="radio" name="attribute3" value="2"><i></i>
  <input type="radio" name="attribute3" value="3"><i></i>
  <input type="radio" name="attribute3" value="4"><i></i>
  <input type="radio" name="attribute3" value="5"><i></i>
</span>


                            <div class="clear"></div>
                            <hr class="survey-hr">
                             <label>How much does this politician care about the well-being of the people?
</label><br>
                            <span class="star-rating">
  <input type="radio" name="attribute4" value="1"><i></i>
  <input type="radio" name="attribute4" value="2"><i></i>
  <input type="radio" name="attribute4" value="3"><i></i>
  <input type="radio" name="attribute4" value="4"><i></i>
  <input type="radio" name="attribute4" value="5"><i></i>
</span>


                           
    

                            <div class="clear"></div>
                            <hr class="survey-hr">
                            <label for="m_3189847521540640526commentText">Any Comment:</label><br/>
                            <textarea cols="75" name="comment" rows="5" class="form-control" style=""></textarea><br>
                            
                            <label>Your Email(optional):</label>
                            <input type="text" placeholder="Email(optonal)" name="rater_email" class="form-control" />
                            <br>
                            <div class="clear"></div>
                            <input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" name="rate" value="Submit your review">&nbsp;
                           
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php
include 'footer.php';
?>