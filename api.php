<?php
function findTheRate($person){
include 'connection.php';
$sql = "SELECT AVG(total_attribute_rates) as avarage FROM politicians WHERE person='$person'";
$result = mysqli_query($conn, $sql);
if ((mysqli_num_rows($result)) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     $attribute = $row["avarage"];
    
     return $attribute;
  }
} 
        
}


function searchThePersonFirst($person){
include 'connection.php';
$sql = "SELECT * FROM politicians WHERE person='$person'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    return 1;
  
}else{
    return 0;
}
        
}



function findTheAttribute1Rate($person){
include 'connection.php';
$sql = "SELECT AVG(attribute1) as avarage FROM politicians WHERE person='$person'";
$result = mysqli_query($conn, $sql);
if ((mysqli_num_rows($result)) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     $attribute = $row["avarage"];
    
     return $attribute;
  }
} 
        
}



function findTheAttribute2Rate($person){
include 'connection.php';
$sql = "SELECT AVG(attribute2) as avarage FROM politicians WHERE person='$person'";
$result = mysqli_query($conn, $sql);
if ((mysqli_num_rows($result)) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      $attribute = $row["avarage"];
   
     return $attribute;
  }
} 
        
}


function findTheAttribute3Rate($person){
include 'connection.php';
$sql = "SELECT AVG(attribute3) as avarage FROM politicians WHERE person='$person'";
$result = mysqli_query($conn, $sql);
if ((mysqli_num_rows($result)) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      $attribute = $row["avarage"];
   
     return $attribute;
  }
} 
        
}



function findTheAttribute4Rate($person){
include 'connection.php';
$sql = "SELECT AVG(attribute4) as avarage FROM politicians WHERE person='$person'";
$result = mysqli_query($conn, $sql);
if ((mysqli_num_rows($result)) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      $attribute = $row["avarage"];
   
     return $attribute;
  }
} 
        
}



function findDetails($person){
include 'connection.php';
$sql = "SELECT * FROM politicians WHERE person='$person'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $photo_url = $row["photo_url"];
    return $photo_url;
  }
} 
        
}



function findAddress($person){
include 'connection.php';
$sql = "SELECT * FROM politicians WHERE person='$person'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $office_address = $row["office_address"];
    return $office_address;
  }
} 
        
}


function findProfile($person){
    
include 'connection.php';

$sql = "SELECT * FROM politicians WHERE person='$person' LIMIT 1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  
    $person=$row["person"];

    $photo_url = $row["photo_url"];

    $office_address=$row["office_address"];

    $phone=$row["phone"];

    $state=$row["state"];

    $party=$row["party"];

    $website=$row["website"];

    $channel_type=$row["channel_type"];

    $phone=$row["phone"];

    $channel_id=$row["channel_id"];

    if($channel_type=="Twitter"){
         $channel = "Twitter";
         $url_profile="https://twitter.com/".$channel_id;

    }elseif ($channel_type=="Facebook") {
        $channel = "Facebook";
         $url_profile="https://www.facebook.com/".$channel_id;
         
    }elseif ($channel_type=="YouTube") {
        $channel = "YouTube";
        $url_profile= "https://www.youtube.com/".$channel_id;
        
    }

     $rate=findTheRate($person);
      if($rate <=15 ){
          $color="#f44336";
      }else if($rate <=40){
          $color="#ff9800";
      }else if($rate <200){
          $color="#2196F3";
      }else if($rate ==200){
          $color="#04AA6D";
      }
      $rateAttribute1=findTheAttribute1Rate($person);

        if( $rateAttribute1 <=15 ){
          $colorAttribute1="#00cc00";
      }else if( $rateAttribute1 <=40){
          $colorAttribute1="#00cc00";
      }else if( $rateAttribute1 <200){
          $colorAttribute1="#00cc00";
      }else if( $rateAttribute1 ==200){
          $colorAttribute1="#00cc00";
      }
      

      $rateAttribute2=findTheAttribute2Rate($person);

      if( $rateAttribute2 <=15 ){
          $colorAttribute2="#00cc00";
      }else if( $rateAttribute2 <=40){
          $colorAttribute2="#00cc00";
      }else if( $rateAttribute2 <200){
          $colorAttribute2="#00cc00";
      }else if( $rateAttribute2 ==200){
          $colorAttribute2="#00cc00";
      }
      

      $rateAttribute3=findTheAttribute3Rate($person);

      if( $rateAttribute3 <=15 ){
          $colorAttribute3="#00cc00";
      }else if( $rateAttribute3 <=40){
          $colorAttribute3="#00cc00";
      }else if( $rateAttribute3 <200){
          $colorAttribute3="#00cc00";
      }else if( $rateAttribute3 ==200){
          $colorAttribute3="#00cc00";
      }
     
      $rateAttribute4=findTheAttribute4Rate($person);

      if( $rateAttribute4 <=15 ){
          $colorAttribute4="#00cc00";
      }else if( $rateAttribute4 <=40){
          $colorAttribute4="#00cc00";
      }else if( $rateAttribute4 <200){
          $colorAttribute4="#00cc00";
      }else if( $rateAttribute4 ==200){
          $colorAttribute4="#00cc00";
      }


    $rw="<div style='width:".$rate."px;height:18px; background-color:".$color.";'></div>";
    $rateBarAttribute1="<div style='width:".$rateAttribute1."px;height:18px; background-color:".$colorAttribute1.";'></div>";
    $rateBarAttribute2="<div style='width:".$rateAttribute2."px;height:18px; background-color:".$colorAttribute2.";'></div>";
    $rateBarAttribute3="<div style='width:".$rateAttribute3."px;height:18px; background-color:".$colorAttribute3.";'></div>";
    $rateBarAttribute4="<div style='width:".$rateAttribute4."px;height:18px; background-color:".$colorAttribute4.";'></div>";
     
    $state=$row["state"];

    $party=$row["party"];

    $website=$row["website"];
   ?>
     <p><img src="<?php echo $photo_url;?>" class="" style="width:200px;height:200px"></p>

     <hr>
      <p><h4>Party</h4></p>
      <p> <?php echo $party;?></p>
      <p><h4>State</h4></p>
      <p> <?php echo $state;?></p>
      <p><h4>Website</h4></p>
      <p> 
       <a href="<?php echo $website;?>">Click To View</a>
    </p>
     <p><h4>Overall Ratings</h4></p>
     <p>
         <div class="bar-container">
         <?php echo $rw;?>
         </div>
    </p>
    <p><h4>Politician’s Decision-Making</h4></p>
    <div class="bar-container">
         <?php echo $rateBarAttribute1;?>
    </div>
   <p><h4>Politician’s Honesty</h4></p>
     <div class="bar-container">
         <?php echo $rateBarAttribute2;?>
    </div>
    <p><h4>Politician’s Leadership</h4></p>
    
    
    <div class="bar-container">
         <?php echo $rateBarAttribute3;?>
    </div>
    <p><h4>Politician’s Care About People</h4></p>
    
    <div class="bar-container">
         <?php echo $rateBarAttribute4;?>
    </div>
   
   <p><h4>Office Address:</h4>
     <?php echo $office_address;?>
    </p><h4>Office Phone:</h4>
     <?php echo $phone;?>
    </p>
    <p><h4>Social Media:</h4></p>
    <p><a href="<?php echo $url_profile;?>"><?php echo $channel;?></a></p>
    <?php
}
}         
}

function findProfileBeforeRating(){
    
  $person=$_GET["person"];

    $photo_url = $_GET["photo_url"];

    $office_address=$_GET["address"];

    $phone=$_GET["phone"];

    $state=$_GET["state"];

    $party=$_GET["party"];

    $website=$_GET["website"];

    $channel_type=$_GET["channel_type"];
     $phone=$_GET["phone"];
     $channel_id=$_GET["channel_id"];

     if($channel_type=="Twitter"){
         $channel = "Twitter";
         $url_profile="https://twitter.com/".$channel_id;
     }elseif ($channel_type=="Facebook") {
        $channel = "Facebook";
         $url_profile="https://www.facebook.com/".$channel_id;
         
      }elseif ($channel_type=="YouTube") {
        $channel = "YouTube";
        $url_profile= "https://www.youtube.com/".$channel_id;
        
     }

   


    $rw="<div style='width:px;height:18px; background-color:".$color.";'></div>";
    $rateBarAttribute1="<div style='width:".$rateAttribute1."px;height:18px; background-color:".$colorAttribute1.";'></div>";
    $rateBarAttribute2="<div style='width:".$rateAttribute2."px;height:18px; background-color:".$colorAttribute2.";'></div>";
    $rateBarAttribute3="<div style='width:".$rateAttribute3."px;height:18px; background-color:".$colorAttribute3.";'></div>";
    $rateBarAttribute4="<div style='width:".$rateAttribute4."px;height:18px; background-color:".$colorAttribute4.";'></div>";
     
    $state=$_GET["state"];

    $party=$_GET["party"];

    $website=$_GET["website"];
   ?>
     <p><img src="<?php echo $photo_url;?>" class="" style="width:200px;height:200px"></p>

     <hr>
      <p><h4>Party</h4></p>
      <p> <?php echo $party;?></p>
      <p><h4>State</h4></p>
      <p> <?php echo $state;?></p>
      <p><h4>Website</h4></p>
      <p> 
       <a href="<?php echo $website;?>">Click To View</a>
    </p>
     <p><h4>Overall Ratings</h4></p>
     <p>
         <div class="bar-container">
         <?php echo $rw;?>
         </div>
    </p>
    <p><h4>Politician’s Decision-Making</h4></p>
    <div class="bar-container">
         <?php echo $rateBarAttribute1;?>
    </div>
   <p><h4>Politician’s Honesty</h4></p>
     <div class="bar-container">
         <?php echo $rateBarAttribute2;?>
    </div>
    <p><h4>Politician’s Leadership</h4></p>
    
    
    <div class="bar-container">
         <?php echo $rateBarAttribute3;?>
    </div>
    <p><h4>Politician’s Care People</h4></p>
    
    <div class="bar-container">
         <?php echo $rateBarAttribute4;?>
    </div>
   
   <p><h4>Office Address:</h4>
     <?php echo $office_address;?>
    </p><h4>Office Phone:</h4>
     <?php echo $phone;?>
    </p>
    <p><h4>Social Media:</h4></p>
    <p><a href="<?php echo $url_profile;?>"><?php echo $channel;?></a></p>
    <?php

        
}
?>




<?php
function fetch_polls(){

include 'connection.php';
?>
<div class="tableFixHead">         
<table>
    <thead>
      <center>
        <h1>Politicians</h1>
        <hr>
        
           <?php
// Program to display URL of current page.

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	$link = "https";
else
	$link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
	
// Print the link
echo '<a href="'.$link.'famous_pol.php">Famous Politicans</a>';
?>
        <hr>
      </center>

    </thead>
    <tbody>
<?php

$sql = "SELECT DISTINCT person FROM politicians";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
      $person=$row["person"];
      $rate=findTheRate($person);
    
    if($rate<0){

      $rate=abs($rate);

      if($rate <=15 ){
          $color="#ffc2b3";
      }else if($rate <=40){
          $color="#ff8566";
      }else if($rate==200){
          $color="#ff471a";
      }else if($rate <200){
          $color="#00e600";
      }

    }else{

      if($rate <=15){
          $color="#66ff66";
      }else if($rate<=40){
          $color="#4dff4d";
      }else if($rate<200){
          $color="#1aff1a";
      }else if($rate ==200 or $rate >200){
          $color="#00cc00";
      }

    }

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	$link = "https";
else
	$link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL

	

  
    $rw="<div style='width:".$rate."%;height:18px; background-color:".$color.";'></div><a href='".$link."/rate.php?person=".$person."&full_add=".$address_full."'>Rate</a>";
    if($person!=null){
  $address_full=findAddress($person);
    $photo_url = findDetails($person);
    
    $img_url=$photo_url;
   
?>
        <tr>
           <td>
            <td><a href="profile.php?person=<?php echo $person; ?>&full_add=<?php echo $address_full; ?>"><img src="<?php echo $img_url; ?>" class="" style="width:46px"></a></td>
        <td><?php echo  $person;?></td>
        <td> <?php echo $rw; ?></td>
    </tr>
<?php
    }
  }
} 
?>
</tbody>

</table>
</div>
<?php
}
?>

