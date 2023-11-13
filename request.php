<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  function CallAPI()
  {
    $api_port=8080;
    $api_resource="/alticci";
    $api_url="localhost:" . $api_port . $api_resource;

    $curl = curl_init($api_url . "/" . $_SESSION["input"]);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    if ($_SESSION["input"] < 0 || $_SESSION["input"] > 10000){
      $error_response = json_decode(curl_exec($curl),true);
      $result = $error_response["message"];
    } else {
      $result = curl_exec($curl);
    }

    curl_close($curl);

    return $result;
  }
?>