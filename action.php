<?php
session_start(); 
error_reporting(0);
include 'connection.php';

        
        

        $comment=$_GET['comment'];
        $photo_url=$_GET['photo_url'];
        $person =htmlspecialchars($_GET['person']);

        $full_address=$_GET['full_address'];

        $phone=$_GET['phone'];

        $channel_type=$_GET['channel_type'];
        $channel_id=$_GET['channel_id'];

        $website=$_GET['website'];

        $state=$_GET['state'];
        $party=$_GET['party'];

        $rater_email=$_GET['rater_email'];

        

       
        if($_GET['attribute1']==1 ){
               $attribute1=-1;  
        }else{
            $attribute1=$_GET['attribute1'];    
        }

        if($_GET['attribute2']==1 ){
               $attribute2=-1;  
        }else{
            $attribute2=$_GET['attribute2'];    
        }

        if($_GET['attribute3']==1 ){
               $attribute3=-1;  
        }else{
            $attribute3=$_GET['attribute3'];    
        }

        if($_GET['attribute4']==1 ){
               $attribute4=-1;  
        }else{
            $attribute4=$_GET['attribute4'];    
        }

        $total_rate=$attribute1+$attribute2+$attribute3+$attribute4;

   

        $sql1="INSERT INTO politicians(comment,person,photo_url,attribute1,attribute2,
        attribute3,attribute4,total_attribute_rates,office_address,phone,channel_type,channel_id,website,state,party,rater_email) 
        VALUES('$comment','$person','$photo_url','$attribute1','$attribute2','$attribute3','$attribute4','$total_rate','$full_address','$phone','$channel_type','$channel_id','$website','$state','$party','$rater_email')";
       
        if (mysqli_query($conn, $sql1)) {
                //echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	        	header('Refresh: 0.00; url= https://ratemypoliticians.org/index.php');

        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            echo "Not Registered, Try Again Now";
        }
        

mysqli_close($conn);

?>

