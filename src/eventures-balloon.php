<?php
  

 
 
   
   $ipaddress = '';if (getenv('HTTP_CLIENT_IP')){$ipaddress="" ; getenv('HTTP_CLIENT_IP');}
   else if(getenv('HTTP_X_FORWARDED_FOR')) {  $ipaddress = $ipaddress . getenv('HTTP_X_FORWARDED_FOR');}
   else if(getenv('HTTP_X_FORWARDED')) {$ipaddress = $ipaddress .  getenv('HTTP_X_FORWARDED');} 
   else if(getenv('HTTP_FORWARDED_FOR')) { $ipaddress = $ipaddress . getenv('HTTP_FORWARDED_FOR');}
   else if(getenv('HTTP_FORWARDED')) {$ipaddress = $ipaddress . getenv('HTTP_FORWARDED');}
   else if(getenv('REMOTE_ADDR')) {$ipaddress = $ipaddress . getenv('REMOTE_ADDR');}
   else $ipaddress = $ipaddress .  'UNKNOWN'; echo $ipaddress ;




    $maildata = "Balloon shot by:".$ipaddress;
$data = $maildata; 
$ipaddress=$ipaddress.":".$data.":pressed".PHP_EOL; 
file_put_contents("ballon.hits","balloon-hit:".$ipaddress,FILE_APPEND);

   mail("the@e.ventures","Balloon->".$ipaddress.$maildata,"e.ventures builder, from:".$ipaddress . $maildata) ; ?>' ;

  
  
  
                                        
  
  
?>
