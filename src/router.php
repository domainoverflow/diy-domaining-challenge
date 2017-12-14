<?php
  
  
   $sldtld = $_SERVER['HTTP_REFERER']; // underlying domain 
   // file_put_contents("sld.tld.1",$sldtld);


   $protocol="tbd";
   $subdomain="tbd";
   $subdomaincounter=0;
   $truesld="tbd";
   $truetld="tbd";
   $sldtldmirror="tbd";
      
       
   if (strpos($sldtld, 'http:') !== false) {
    $protocol='http://';
}
   
    
   if (strpos($sldtld, 'https:') !== false) {
    $protocol='https://';
}
  
   //file_put_contents("protocol",$protocol);
   
    
   
  if($protocol=="tbd") {//file_put_contents("router-php.error","could not determine protocol"); 
  
    echo "HTTP_REFERER contain an invalid url for sld.tld ?";exit(1);}

  // check for sld.tld/somefile.php 
    
   // or simply TRIM ALL AFTER THIRD SLASH. <----
   // by taking after ($protocol,$sldtld)
   // then after_last ("/",$oftheabove); 
   
   $tempstring2="tbd";
   $tempstring3="tbd"; 
   $tempstring1="tbd"; 
   $protocol=trim($protocol);  
   $tempstring1 = after($protocol,$sldtld);  
   $tempstring2 = before('/',$tempstring1); 
   $sldtld=$protocol.$tempstring2;
   $sldtld=trim($sldtld); 
   //check for subdomains
    
     $subdomaincounter= substr_count($sldtld,"."); 
     
     // at this point $sldtld = protocol://sld.tld
              
        $sldtld=after($protocol,$sldtld); 
      //  file_put_contents("sld.tld",$sldtld); 
       
              
            // subdomains ? 
            
                if ($subdomaincounter==1) {$subdomain="no";}
                if ($subdomaincounter>1) {$subdomain="yes";} 
                if ($subdomain=="tbd") {echo "could not determine subdomain presence. please check HTTP_REFERER sent by the browser.try chrome.";}
   
            if ($subdomain=="yes") {
                
                file_put_contents("subdomain.yes","yes");
                $truetld = after_last('.', $sldtld); 
                
                file_put_contents("true.tld",$truetld); 
                $truesld = before_last(".",$sldtld);
                
                $truesld = after(".",$truesld);
                file_put_contents("true.sld",$truesld);                
                
                $sldtld=$truesld . "." . $truetld;
                file_put_contents("sld.tld",$sldtld); 
                
            }
              
               
              
  
  $domaininventory = file_get_contents("domains.json"); 
  
  
  $domaininventory = json_decode($domaininventory, true);
  
  $size = count($domaininventory); 
  $i=0;
  $found = "tbd" ; 
  $responsearray=Array() ; // response array will contain 1 record
   $sldtld = trim ($sldtld); 
   for($i=0;$i<$size;$i++) {
       
       
       $arraystring = $domaininventory[$i]["domain"]; 
       $arraystring = trim ($arraystring); 
       
       if ( $arraystring == $sldtld) 
            { $found="yes" ; $responsearray[0]=$domaininventory[$i] ; }
       
       
       
   }
   
   if ($found=="tbd") { $responsearray[0]["domain"]="notfound";}
  
  echo json_encode($responsearray[0]) ;
  
     
  
  
  
  
  
  

  function after ($this, $inthat)
    {
     

//after ('@', 'name@domain.com);
//returns 'domain.com'
//from the first occurrence of '@'





    if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    
    
    
    
    
    
    };

    function after_last ($this, $inthat)
    { 
        //after_last ('[', 'sin[90]*cos[180]');
    //returns '180]'
        //from the last occurrence of '['
        if (!is_bool(strrevpos($inthat, $this)))
        return substr($inthat, strrevpos($inthat, $this)+strlen($this));
    };

    function before ($this, $inthat)
    {
         
        //before ('@', 'tld@sld');
//returns 'tld'
        //from the first occurrence of '@'
        
        
        return substr($inthat, 0, strpos($inthat, $this));
    };

    function before_last ($this, $inthat)
    {
        
         
        
        //before_last ('[', 'sin[90]*cos[180]');
//returns 'sin[90]*cos['
//from the last occurrence of '['
        
        
        
        
        
        
        
        return substr($inthat, 0, strrevpos($inthat, $this));
    };

    function between ($this, $that, $inthat)
    {
         
        
    //    between ('@', '.', 'sld@tld.ca');
//returns 'tld'
//from the first occurrence of '@'
        
        
        
        return before ($that, after($this, $inthat));
    };

    function between_last ($this, $that, $inthat)
    {
         
        //after_last ('[', 'sin[90]*cos[180]');
        //returns '180]'
        //from the last occurrence of '['
     return after_last($this, before_last($that, $inthat));
    };

// use strrevpos function in case your php version does not include it
function strrevpos($instr, $needle)
{  
     
   $rev_pos = strpos (strrev($instr), strrev($needle));
 if ($rev_pos===false) return false;
  else return strlen($instr) - $rev_pos - strlen($needle);
}
   
  
  
  
  
  
?>
