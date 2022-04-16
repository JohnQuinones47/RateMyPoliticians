<?php 
function findFedralFamousPoliticans($address){
    if ($address) {
        $address=str_replace(" ", "%", $address);
        $url = "https://civicinfo.googleapis.com/civicinfo/v2/representatives?address=".$address."&levels=country&key=AIzaSyCRrgB_tfAuHfpeMSn9ZQK1_Pv6fo0isNE";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
   "Accept: application/json",
);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        $json = json_decode($resp);
        $persons= $json->officials;
        if ($persons !=null) {
            echo '
<table class="table">
<tr>
      <th scope="col"></th>
      <th scope="col">Politician</th>
      <th scope="col">Party</th>
      <th scope="col">Address</th>
      <th scope="col">Profile</th>
      <th scope="col">Links</th>
      <th scope="col">Rate</th>
</tr>
</thead>
<tbody>';

            foreach ($persons as $off) {
                $res =$off->name;
                $party =$off->party;
                $office_addresses =$off->address;
                foreach ($office_addresses as $off_address) {
                    $office_add_line= $off_address->line1;
                    $office_add_city= $off_address->city;
                    $office_add_state= $off_address->state;
                    $office_add_country= "USA";
                    $full_address=$office_add_line.",".$office_add_city.",".$office_add_state.",".$office_add_country;
                }
                $office_phones = $off->phones;
                foreach ($office_phones as $off_phone) {
                    $office_phone= $off_phone;
                }
                $channels = $off->channels;
                foreach ($channels as $channel) {
                    $channel_type=$channel->type;
                    $channel_id=$channel->id;
                }
                $urls = $off->urls;
                foreach ($urls as $url) {
                    $weburl=$url;
                }
                $photo_url = $off->photoUrl;
                if ($photo_url!=null) {
                    $imageURL=$photo_url;
                    $img_url_store=urlencode($photo_url);
                } else {
                    $imageURL="https://www.w3schools.com//w3images/avatar2.png";
                    $img_url_store=urlencode($imageURL);
                }
        echo '
<tr>
<td><img src="'.$imageURL.'" class="" style="width:60px;height:60px"></td>
<td>'.$res.'</td>
<td>'.$party.'</td>
<td>'.$full_address.'</td>
<td><a href="/profile.php?person='.$res.'&address='.$full_address.'&phone='.$office_phone.'&photo_url='.
$img_url_store.'&channel_type='.$channel_type.'&channel_id='.$channel_id.'&website='.$weburl.'&party='.$party.'&state='.$office_add_state.'&rated=no">Profile</a></td>
<td><a href="'.$weburl.'">Website</td>
<td><a href="/rate.php?person='.$res.'&address='.$full_address.'&phone='.$office_phone.'&photo_url='.
$img_url_store.'&channel_type='.$channel_type.'&channel_id='.$channel_id.'&website='.$weburl.'&party='.$party.'&state='.$office_add_state.'">Rate</a></td> 
</tr>';
            }
        }
    }
}

function findStatesFamousPoliticans($address){

$address=str_replace(" ","%",$address);

$url = "https://civicinfo.googleapis.com/civicinfo/v2/representatives?address=".$address."&levels=administrativeArea1&key=AIzaSyCRrgB_tfAuHfpeMSn9ZQK1_Pv6fo0isNE";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
   "Accept: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);
$json = json_decode($resp);
$persons= $json->officials;
if($persons !=null){
echo '
<table class="table">

<tr>
      <th scope="col"></th>
      <th scope="col">Politician</th>
      <th scope="col">Party</th>
      <th scope="col">Address</th>
      <th scope="col">Profile</th>
      <th scope="col">Links</th>
       <th scope="col">Rate</th>
</tr>
</thead>
<tbody>';

foreach ($persons as $off) {
$res =$off->name;
$party =$off->party;
$office_addresses =$off->address;
foreach ($office_addresses as $off_address) {
        $office_add_line= $off_address->line1;
        $office_add_city= $off_address->city;
        $office_add_state= $off_address->state;
        $office_add_country= "USA";
        $full_address=$office_add_line.",".$office_add_city.",".$office_add_state.",".$office_add_country;
}
$office_phones = $off->phones;
foreach ($office_phones as $off_phone) {
        $office_phone= $off_phone;
} 
$channels = $off->channels;
foreach($channels as $channel) {
    $channel_type=$channel->type;
    $channel_id=$channel->id;
}
$urls = $off->urls;
foreach($urls as $url){
        $weburl=$url;
}
$photo_url = $off->photoUrl;
if($photo_url!=null){
        $imageURL=$photo_url;
        $img_url_store=urlencode($photo_url);
}else{
       $imageURL="https://www.w3schools.com//w3images/avatar2.png";
       $img_url_store=urlencode($imageURL);
}
echo '
<tr>
<td><img src="'.$imageURL.'" class="" style="width:60px;height:60px"></td>
<td>'.$res.'</td>
<td>'.$party.'</td>
<td>'.$full_address.'</td>
<td><a href="/profile.php?person='.$res.'&address='.$full_address.'&phone='.$office_phone.'&photo_url='.
$img_url_store.'&channel_type='.$channel_type.'&channel_id='.$channel_id.'&website='.$weburl.'&party='.$party.'&state='.$office_add_state.'&rated=no">Profile</a></td>
<td><a href="'.$weburl.'">Website</td>
<td><a href="/rate.php?person='.$res.'&address='.$full_address.'&phone='.$office_phone.'&photo_url='.
$img_url_store.'&channel_type='.$channel_type.'&channel_id='.$channel_id.'&website='.$weburl.'&party='.$party.'&state='.$office_add_state.'">Rate</a></td> 
</tr>';
     }
  }
}


?>