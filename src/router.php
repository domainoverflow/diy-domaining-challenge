<?php
  
  
   $sldtld = $_SERVER['HTTP_ORIGIN'] ; // underlying domain 
   $sldtld = after("http://",$sldtld); 
   $sldtld=trim($sldtld) ;  
      
  file_put_contents("sld.tld",$sldtld); 
  
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
