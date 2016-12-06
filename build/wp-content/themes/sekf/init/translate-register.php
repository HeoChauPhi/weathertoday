<?php
add_filter('timber_context', 'sekf_translate_register');
function sekf_translate_register($data){
  $weather_local = GetWeatherLocate()['localtion'];
  $weather_arr = GetWeatherLocate()['weather'];

  $data['weather_region'] = __($weather_local->region, 'weathertoday');
  $data['precip_probability'] = __('precip probability', 'weathertoday');

  return $data;
}