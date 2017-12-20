<?php
  

 
  
  FileWriteArray ("universal.form",$_POST); 
  $emailstring = file_get_contents("universal.form"); 
  file_put_contents ("contact.forms.history",$emailstring,FILE_APPEND); 
  

  
  
  
  mail("the@e.ventures","UniverSalContactForm",$emailstring);
  
    
   echo "OK, Message has been sent. We will reply to you shortly.
   <a href='https://contato.link'>Please click here to return.</a>"; 
    
    
function FileWriteArray ( $filename, $array  )
  {
      
     
      
    $handle = fopen ( $filename, 'w+')  ;
   fwrite ( $handle, var_export($array, true)) ;
          
       
       fclose ($handle) ; 
       
    
  
    
    
    
  }  
  
  
  ?>



