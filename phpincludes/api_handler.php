<?php

function callAPI($method, $url, $data, $headers = false){
  $curl = curl_init();

  switch ($method){
    case "POST":
      curl_setopt($curl, CURLOPT_POST, 1);
      if ($data)
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
      break;
    case "PUT":
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
      if ($data)
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
      break;
    default:
      if ($data)
        $url = sprintf("%s?%s", $url, http_build_query($data));
  }

  // OPTIONS:
  curl_setopt($curl, CURLOPT_URL, $url);
  if(!$headers){
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'user-key: ca048bf3ad9e600e60aae233ffc34d07',
      'Accept: application/json',
    ));
  }else{
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'user-key: ca048bf3ad9e600e60aae233ffc34d07',
      'Accept: application/json',
      $headers
    ));
  }
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

  // EXECUTE:
  $result = curl_exec($curl);
  if(!$result){die("Connection Failure");}
  curl_close($curl);
  return $result;
}

/**
 *
 * EXAMPLE OF USAGE
 *
$rent_header = 'Search: and[][created][greater]=02039182%and[][created][less]=' . date('Y-m-d') . '%';

//the actual call with custom search header
$make_call = callAPI('GET', 'https://api.example.com/get_url/', false, $rent_header);
 *
 */

?>
