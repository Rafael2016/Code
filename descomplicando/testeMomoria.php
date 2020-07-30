<?php 

register_shutdown_function(function(){
  echo 'Pico do uso de mémoria :',memory_get_usage() / 1024, 'kb' , PHP_EOL;
})
