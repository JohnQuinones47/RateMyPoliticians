<?php

$url = "https://civicinfo.googleapis.com/civicinfo/v2/representatives?address=123%20Brooklyn%20Avenue%20Northeast%2C%20Seattle%2C%20WA%2C%20USA&key=AIzaSyCRrgB_tfAuHfpeMSn9ZQK1_Pv6fo0isNE";

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
//var_dump($resp);
//echo $resp;

$persons= $json->officials;

if($persons !=null){

    foreach ($persons as $off) {
    $res =$off->name;

    $office_addresses =$off->address;

    foreach ($office_addresses as $off_address) {
        $office_add= $off_address->line1;
    }

    $office_phones = $off->phones;
    foreach ($office_phones as $off_phone) {
        $office_phone= $off_phone;
    }

    $channels = $off->channels;

    
    foreach($channels as $channel) {
          /*
          for($i=0;$i<count($channel);$i++){
              echo $channel[$i];
          }
          */
       

          if($channel->type == "Twitter"){
            echo $channel->type."<br>";
            echo $channel->id."<br>";
          }

    }
    

    }

}
?>