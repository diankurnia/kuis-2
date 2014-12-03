<?php
error_reporting(E_ALL);
ini_set('display_error',1);
session_start();
require_once('nusoap/lib/nusoap.php');
$url = 'http://api.radioreference.com/soap2/?wsdl&v=latest';
$client = new nusoap_client($url, 'WSDL');
echo "<table border=1>";
$result = $client->call('getCountryList', 
  array(
  'id'         =>  $p_post['coid'], 
  'name'       =>  $p_post['countryName'], 
  'code'       =>  $p_post['countryCode'], 
  )
);
echo "</table>";
?>