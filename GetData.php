<?php
   
  $Url = "https://api.crypto-loot.com/stats/history?name=cjovanov@gmail.com&secret=c5603c18aa9634ef4614a00d0742cc1e91b89d236748";
  try {
	  $jsondata = file_get_contents($Url);
	  echo $jsondata;
   } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
   }
?>