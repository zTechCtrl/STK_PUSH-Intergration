<?php
//MPESA API KEYS
$consumerKey = "l4ItDcHHSMrsYxJI8yN9DXIB6BDSJmxEUaMFDZms4l0vojuX";   
$consumerSecret = "QyQi7PQG9zJNBxG9G3IzJQ1EGUhQMZvypBWR7VuZcfnPUV4p22ko6k5Jqy6ZLqfU";


//GENERATE ACCESS TOKEN
$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$headers = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey. ':'.$consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$result = json_decode($result);
$access_token = $result->access_token;
curl_close($curl);
