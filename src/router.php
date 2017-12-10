<?php
  
  
   $sldtld = $_SERVER['HTTP_ORIGIN'] ; // underlying domain 
     
  
  $domaininventory = file_get_contents("domains.json"); 
  
  
  $domaininventory = json_decode($domaininventory, true);
  
  $size = count($domaininventory); 
  $i=0;
  $found = "tbd" ; 
  $responsearray=Array() ; // response array will contain 1 record
   $sldtld = trim ($sldtld); 
   for($i=0;$i<$size;$i++) {
       
       
       $arraydomain = $domaininventory[$i]["domain"]; 
       $arraydomain = trim ($arraydomain); 
       if ( $arraydomain == $sldtld) 
            { $found="yes" ; $responsearray[0]=$domaininventory[$i] ; }
       
       
       
   }
   
   if ($found=="tbd") { $responsearray[0]["domain"]="notfound";}
  
  echo json_encode($responsearray[0]) ;
  
     
  
  
  
  
  
  
  
  
  
  
  
  
?>
