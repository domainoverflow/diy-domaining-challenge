<?php
  
 

 
 
 file_put_contents("postoffice", print_r($_POST), FILE_APPEND);
   $data=$_POST["data"];
file_put_contents("postoffice.record", print_r($_POST["data"]), FILE_APPEND);


        $data=implode(",",$data);
        
 
   
   $ipaddress = '';if (getenv('HTTP_CLIENT_IP')){$ipaddress="" ; getenv('HTTP_CLIENT_IP');}
   else if(getenv('HTTP_X_FORWARDED_FOR')) {  $ipaddress = $ipaddress . getenv('HTTP_X_FORWARDED_FOR');}
   else if(getenv('HTTP_X_FORWARDED')) {$ipaddress = $ipaddress .  getenv('HTTP_X_FORWARDED');} 
   else if(getenv('HTTP_FORWARDED_FOR')) { $ipaddress = $ipaddress . getenv('HTTP_FORWARDED_FOR');}
   else if(getenv('HTTP_FORWARDED')) {$ipaddress = $ipaddress . getenv('HTTP_FORWARDED');}
   else if(getenv('REMOTE_ADDR')) {$ipaddress = $ipaddress . getenv('REMOTE_ADDR');}
   else $ipaddress = $ipaddress .  'UNKNOWN'; echo $ipaddress ;
    $maildata = $data;
    mail("the@e.ventures","the-template@e.ventures->".$ipaddress.$maildata,"e.ventures the-template, from:".$ipaddress . $maildata) ; ?>' ;

          
  
  
  
                                        
  
  
?>
