<?php
  header("access-control-allow-origin: *");

 
  
  FileWriteArray ("universal.form",$_POST); 
  $emailstring = file_get_contents("universal.form"); 
  file_put_contents ("contact.forms.history",$emailstring,FILE_APPEND); 
  

  
  
  
  mail("the@e.ventures","UniverSalContactForm.php",$emailstring);
  
    
   echo "OK, Message has been sent. We will reply to you shortly.
   <a href='https://contato.link'>Please click here to return.</a>"; 
    
     FileWriteArray ("universalform.server",$_SERVER);
       $emailstring2 = file_get_contents("universalform.server");
       mail("the@e.ventures","universal-contact-formphp-details",$emailstring2.$emailstring);
       FileWriteArray ("universalform.detailed.history",$emailstring2.$emailstring,FILE_APPEND); 
           
    
    
    
    
    
    
    
    
    
    
function FileWriteArray ( $filename, $array  )
  {
      
     
      
    $handle = fopen ( $filename, 'w+')  ;
   fwrite ( $handle, var_export($array, true)) ;
          
       
       fclose ($handle) ; 
       
    
  
    
    
    
  }  
  
  
  ?>



