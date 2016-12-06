<?php
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
function GetWeatherLocate(){
  /*$options = get_option('weather_board_settings');

  if ($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){
    $ip = $_SERVER['REMOTE_ADDR'];
  } else {
    $ip = '';
  }

  $localtion_json = file_get_contents("http://ipinfo.io/".$ip."/json");
  $parsed_localtion = json_decode($localtion_json);
  $localtion = str_replace(" ", "-", $parsed_localtion->region);

  $json_string = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/city?q=".$localtion."&APPID=".$options['weather_api_key']."&units=metric");
  $parsed_json = json_decode($json_string);*/
  //print_r($parsed_json);

  $weather = array();

  $options = get_option('weather_board_settings');

  if ($_SERVER['REMOTE_ADDR'] != "127.0.0.1"){
    $ip = $_SERVER['REMOTE_ADDR'] . "/json";
  } else {
    $ip = '';
  }

  $localtion_json = file_get_contents("http://ipinfo.io/".$ip);
  $parsed_localtion = json_decode($localtion_json);
  $localtion = str_replace(" ", "-", $parsed_localtion->loc);
  $weather['localtion'] = $parsed_localtion;
  //print_r($parsed_localtion);

  $json_string = file_get_contents("https://api.darksky.net/forecast/".$options['weather_api_key']."/".$localtion);
  $parsed_json = json_decode($json_string);
  $weather['weather'] = $parsed_json;

  return $weather;
}
