nclude 'xmlapi.php'; // Cpanel WHM Library for API 2 


 ini_set('max_execution_time', 300); //300 seconds = 5 minutes
  
 #AddDomain  
 
$domains = $_POST["domainlist"]; 
$chosengateway = $_POST["chosengateway"]; 
$marketplacename = $_POST["marketplacename"]; 


if ($chosengateway=="cpanel") {
    
print_r($domains);
echo $chosengateway; 
echo $marketplacename; 


FileWriteArray ( 'addrequest.domains', $sldtld  ) ; // temp persist the input


// Please note: If you are not local to your server 
// ex: if below you need anything but localhost ( below $server )
// then you will need to rethink your security flow.

$server =   "localhost"; // or 127.0.0.1 ... 
set_time_limit(200); // seconds
ini_set('max_execution_time',200); // solves timeouts on some hosting accounts

$auth_user = 'YOUR-HOSTING-ACCOUNT-cpanel-whm-username' ; 
$auth_pass = 'YOUR-HOSTING-ACCOUNT-cpanel-whm-password' ; 
$cpaneluser = $auth_user; 
$cpanelpwd = $auth_pass; 

 $config = array(); // create a config array as it will be needed multiple times.
$config[0]["server"]= $server; 
$config[0]["authuser"] = $auth_user; 
$config[0]["authpass"] = $authpass; // this file is obviously in the server-side
                                    // if that is not your case, please rethink this flow.
$config[0]["maindomain"] = "sld.tld"; // cpanel's account main domain (annoying but required)

$config[0]['cpanelapioutput'] = "json"; // cpanel's output -> json or array 
                                        // Please note this changes the output response 
                                        // and it may break your response parsing if suddenly flipped.
                                        
$config[0]['serverport'] = "2083"; // 2082 for cpanel non-ssl 2083 ssl .. if using root 
                                   // then it must be via whm and that would be 
                                   // 2086 non-ssl and 2087 ssl 
                                   // port values are the default ones, please verify accordingly 
                                   // in your hosting account.
                                   
 $config[0]["inputfile"]="cpanel.add"; 
                                    
  $data = $_POST["domainlist"]; // textarea input domain list 
  // you could take it from a file instead by using:
  // $data = file_get_contents('path/to/input-file-name');
      
       $timestamp=time(); 
 
 file_put_contents("cpanel.add",$data); // please note, if you plan to use this gateway on busy 
                                     // server then you need to queue this with a timestamp
                                     // ( to avoid a overwrite, if say, two forms were being fed at the same time, this could occur,
                                     // although unlikely ).
                                     // if you are in the cloud, and if aws: use sqs ( queue ) 
                                     // or equivalent in google cloud or other clouds.
                                     

define('ARQUIVO', 'cpanel.add');  
$doms = @file(ARQUIVO);
   
  // turn on for debug:  
 //   print_r($data); echo "<---data"; 

 
 $rootdomain = $config[0]["maindomain"]     ;
 $newdomain = ""; // one or more domain(s)
$goodcounter=0;
$badcounter=0;
$json_client = new xmlapi($server);
$serverport = $config[0]['serverport'];
if (!$serverport ) {print "port not set, choosing default";      
                                 
                                 $port=2082;
                                 
                                 }

  




$json_client->set_port($serverport);
$novainte = $cpaneluser;
$json_client->password_auth($auth_user, $auth_pass);
$json_client->set_debug(1); // for debugging
#$json_client->set_port(2086); // if root via whm
$cpanelapioutput = $config[0]['cpanelapioutput']; // json or array
$cpanelapioutputtrimmed = preg_replace('/\s+/', ' ', trim($cpanelapioutput));

// please refer to cpanel's api 2 php sdk 

$json_client->set_output($cpanelapioutputtrimmed); 
$counter=0;


$inputfileconfig = $config[0]["inputfile"];
 
 

 // textarea input 
 // 1 column, one domain per column 
 // divided by linefeed ( enter or return key ) 
 
 // $doms = $data;  
  
  foreach($doms as $dom) {

  $lines = explode(';',$dom);
  if (count($lines) == 1) {
    // domain column exists in batchinput file, hence passed on here ... 
    $domain = trim($lines[0]); 
        $newdomain=$domain;
        $subdomain = str_replace (".", "", $domain) ; 
        //SUBDOMAIN ADD IS A DIFFERENT API CALL BTW ! it could be unified here
        // if so the subd would be as below:
    //$subd = trim($lines[1]); // if count lines = 2 then consider subdomain handling.
    // ** subdomains not handled in this gateway !! validate 
  }
  else {  
 
    $domain = trim($lines[0]); 
        $newdomain=$domain;
        $subdomain = str_replace (".", "", $domain) ; 
    
        
        
     }
  
  // once working, turn off the prints .. 
  // and do a proper notification ( asynch ) flow .. 
  
    
        echo  "<br> newdomain is:<br>" . $newdomain ;
 
        echo "subdomain.<maindomain> is:" . $subdomain; // this does not mean we are handling subdomains 
                                                         // but a rather confusion by cpanel 
                                                         // that wrongly defines subdomains as "parked" 
                                                         // that is simply not the case but if your 
                                                         // hosting account is cpanel-based ... 
                                                         // best way out is the cloud without cpanel
                                                          // mainly because cpanel is not free
                                                          
        
        $dir = $newdomain . '/'; $dir = str_replace (".","-",$dir ) ; $dir = "public_html/" . $dir;
         
         //turn this off if not refactoring or not debugging 
         
         echo "<br> <b>working ...  </b>";
        
        
        // cpanel's confusing arguments
        
    $args = array ( 'dir'            => $dir, 
        'newdomain'      => $newdomain, 
        'subdomain'      => $subdomain
    
    ) ;
        echo  "<br> Domain Details:"; // btw if you are not echoeing back in the browser the <br> will look like <br> on the 
                                      // server side .. so please turn this off once you are done refactoring this code. txs. s
 
 
   
$prearg =  $dir . "-" . $newdomain . "-" . $subdomain; // why cpanel, why ?? 
        
        echo  $prearg; // turn it off please once refactored this code 
 
  // please note that the output format WILL VARY 
  //  please see above $config[0]["cpanelapioutput"]
  // it can be json or array 
   

// Here's the request itself 
        
$resultstr = $json_client->api2_query( $auth_user, 'AddonDomain', 'addaddondomain', $args); 

// and the response should be here at this point 
// please throw and catch as needed on your context
// I use this in a context that is asynch .. and with a real time queue...


  $r=AnalyseCpanelAPIResponse($resultstr,$pathonly, $domain, $dir);

     
        file_put_contents('add.result', $resultstr, FILE_APPEND);  // if running on busy servers, please consider a real 
                                                                    // time queing system, such as aws or the equivalent in 
                                                                    // Google Cloud ... Azures ... 
                                                                    // for the ultimate domaining server 
                                                                    // guide please refer to 
                                                                    // domainoverflow.com 
                                                                    
                                                                    
 
        
        $translated_json = json_decode( $resultstr, true )  ; // I chose JSON .. if refactoring your code, you can toggle to array
       
                             SendNewLine();
        
        $translated_json = $translated_json["cpanelresult"];
          
        $ev= $translated_json['data'][0]['result'] ;   
    
        $reason = $translated_json['data'][0]['reason']  ;  
 
         //todo translate $reason 
         // ex: if substr($reason = 'already exists') {$reason=AlreadyExists..et.c.}
        
  
        FileWrite ('reason', $reason )  ;    
        SendNewLine();    
        print_r ($reason);
 
         print_r($ev);
        
  
               
      SendNewLine();
 
         
      


 if   ($ev == '0')  { print "Error: " . $reason; print "<br> for " .$domain;     
                                        $st = "Reason:" . $reason . ",while trying to add:" . $domain ;
                                         SendNewLine();
                                         
                                        print "<br>"; print"NOTOK"; $badcounter=$badcounter+1;print"<br>";
                                        AppendStringToFile ('error.report', $st);                                    
                                        
                                        } // end of if error
  
  
  if  ($ev == '1')    { print "ok"; $goodcounter=$goodcounter+1;
  
                        $st = "Domain: " . $domain .  ", added Successfully";
                                 FileWrite ('success.addondomain.report', $st) ;   
                                             

                        print "Report to reportFile: " . $newdomain;

                    }  // end of if good
 
print "<br> Next ... " ;
  

    
        $domainfolder = 'tbd';
     
        $folder='tbd';

 

 

$counter=$counter+1;        
        
} // Loop $doms as $dom 


  
     

 print"<br> Domains processed: " .$counter;
 print "<br> Successfully: " .$goodcounter;
 print "<br> as opposed to Not-Successfully ( please check dashboard to visualise discrepancies ): " .$badcounter;
 print "<br>end";

 
 
}  // gateway if 

else {
    
        
    // Handle non-cpanel publishing requests
      
    
    // todo 
    
    // please checkback soon on our repository 
    
    
    // https://github.com/domainoverflow/diy-domaining-challenge
    
}
 
 
 
 
 
 
 
 
 
 
 
 

function CreateAddonDomain (   $newdomain, $rootdomain, $config, $json_client ) 

{
    
    
$newdomain = CleanString($newdomain);
$subdomain = str_replace (".", "", $newdomain) ; 
    $rootdomain = CleanString ($rootdomain);   
    
//$rootdomain = preg_replace('/\s+/', ' ', trim($config['maindomain']));   
 $auth_user =  preg_replace('/\s+/', ' ', trim($config['cpaneluser'])); 
 $auth_pass =  preg_replace('/\s+/', ' ', trim($config['cpanelpwd'])); 
        
$json_client->password_auth($auth_user, $auth_pass);
  
 

 
 
$server='127.0.0.1'  ;     
$port = preg_replace('/\s+/', ' ', trim($config['serverport']));  
$debug = 0;
$output = preg_replace('/\s+/', ' ', trim($config['cpanelapioutput']));
//$client = new xmlapi ( $server ) ;   
    
    
    if (!$port ) {print "port not set, choosing default";      
                                 
                                 $port=2082;
                                 
                                 }
    
    //$client->set_port ( $port) ; 
//$client->set_debug(1); 
//$client->set_output($output); 
//$client->password_auth($auth_user, $auth_pass);

    
    
    
//strip dot from $newdomain to use as subdomain dot root domain 
//$subdomain = $newdomain;
print "<br> newdomain is:" . $newdomain ;
 print "<br>";
 
 print "<br>";

    print "subdomain is:" . $subdomain;
//$subdomain = $subdomain . "." .  $rootdomain ;  
 
    
 
    
    
    //TODO remove print(filewrites )  outs right above
    
//dir will be equal subdomain minus dot root domain

// cpanel is very confusing 


 $dir = $newdomain . '/';
 $dir = str_replace (".","-",$dir ) ;
 $dir = "public_html/" . $dir;

// ftp pass is optional
//TODO add ftp default password to config array
    
//        $ftppass = 'default16';

////////
    


 print "<br> <b>working ...  </b>"; // please eliminate this 
                                // accordingly after refactoring this code
        
        

    $args = array ( 'dir'            => $dir, 
        'newdomain'      => $newdomain, 
        'subdomain'      => $subdomain
    
    ) ;

print "<br> Domain Details:";
 
print "<br>";
FileWriteArray('args.array', $args)  ;    
$prearg =  $dir . "-" . $newdomain . "-" . $subdomain; 
FileWrite ( 'addondomain.api', $prearg)     ;   
    
//    $xmlapi->set_debug(1); 
    
    
 
$resultstr = $json_client->api2_query
    ( $auth_user, 'AddonDomain', 'addaddondomain', $args); 

  
print "OK<br>" ;  
    print "You may safely close this window"; 
    
    print_r($resultstr)   ;   
    
        FileWriteArray ('result', $resultstr) ;   
    
    
    
$translated_json = json_decode ( $resultstr, 'true' )  ;
print_r($translated_json);   

    
    
    
    FileWriteArray ('result', $resultstr) ;   
    
        print_r($resultstr)   ;   
    
return $resultstr;


}



 


function SendNewLine () {  print "\n" ; } 


function FileWriteArray ( $filename, $array  )
  {
    
    $handle = fopen ( $filename, 'w+')  ;
   fwrite ( $handle, var_export($array, true)) ;
          
       
       fclose ($handle) ; 
       
    
  
    
    
    
  }


function ShowString ( $message, $string )
 {
   if (!$message) { $mesage="";}
   print "<br>";
   print "Showing string (" + $message +")=" + $string ;
   print "<br>";
   
   
   
   
 }



function ArrayToJSONString ( $array )
{
  // return string 
  return json_encode ($array) ;   
  
}
  
function JSONStringToArray ( $string )
{
  
  //return array
  return json_decode ($string, true) ;
}
    
  
function ArrayToSerializedString ( $array ) 
{
  
  
  return serialize ( $array ) ; 
  
  
  
}
  
  function SerializedStringToArray ( $string )
  
  {
    
    
  return unserialize ($string) ;   
    
    
  }
  
  function FileWrite ( $filename, $string )
 {
   $handle = fopen ( $filename, 'wb')  ;
   fwrite ( $handle, $string ) ;
     
     
       
       fclose ($handle) ; 
       
     
   
   
   
 } 
   
  
  function AppendStringToFile ( $filename, $string ) 
  {
    
   
      file_put_contents($filename, $string.PHP_EOL , FILE_APPEND);
    
  }
  
  
function cutline($filename,$line_no=-1) {

$strip_return=FALSE;

$data=file($filename);
$pipe=fopen($filename,'w');
$size=count($data);

if($line_no==-1) $skip=$size-1;
else $skip=$line_no-1;

for($line=0;$line<$size;$line++)
if($line!=$skip)
fputs($pipe,$data[$line]);
else
$strip_return=TRUE;

return $strip_return;
} 
   function MoveFile ( $string1, $string2 ){
   
   $file1=$string1;
   $file2=$string2;
      
     $cmd1='mv ' . $file1 . ' ' . $file2 . '.$(date "+%Y.%m.%d-%H.%M.%S")';
$output = shell_exec($cmd1);
echo $output;
  
   
 } 
 

function CleanString ($string)
{
    
$s=preg_replace('/\s+/', ' ', trim($string));

    //REGEX...
return $s;
    
}

   



  





function ApiTranslation ( $code, $config )   {
    
 
    $logfile = $config['logfile'] ;   
     
 
    
      
                switch ($code) {
                    case 100: $text = 'Continue'; $status="ok"; break;
                    case 101: $text = 'Switching Protocols'; $status="ok";break;
                    case 200: $text = 'OK'; $status="ok";break;
                    case 201: $text = 'Created'; $status="ok";break;
                    case 202: $text = 'Accepted';$status="ok"; break;
                    case 203: $text = 'Non-Authoritative Information'; $status="ok";break;
                    case 204: $text = 'No Content'; $status="ok";break;
                    case 205: $text = 'Reset Content'; $status="ok";break;
                    case 206: $text = 'Partial Content'; $status="ok";break;
                    case 207: $text = 'Multi-Status'; $status="ok";break;
                                        case 208: $text = 'Already Reported(WebDAv)'; $status="ok";break;
                                        
                                      case 300: $text = 'Multiple Choices'; $status="error";break;
                    case 301: $text = 'Moved Permanently'; $status="error";break;
                    case 302: $text = 'Moved Temporarily'; $status="error";break;
                    case 303: $text = 'See Other'; $status="error";break;
                    case 304: $text = 'Not Modified'; $status="error";break;
                    case 305: $text = 'Use Proxy'; $status="error";break;
                    case 400: $text = 'Bad Request'; $status="error";break;
                    case 401: $text = 'Unauthorized'; $status="error"; break;
                    case 402: $text = 'Payment Required'; $status="error";break;
                    case 403: $text = 'Forbidden'; $status="error";break;
                    case 404: $text = 'Not Found'; $status="error";break;
                    case 405: $text = 'Method Not Allowed'; $status="error";break;
                    case 406: $text = 'Not Acceptable'; $status="error";break;
                    case 407: $text = 'Proxy Authentication Required'; $status="error";break;
                    case 408: $text = 'Request Time-out'; $status="error";break;
                    case 409: $text = 'Conflict'; $status="error";break;
                    case 410: $text = 'Gone'; $status="error";break;
                    case 411: $text = 'Length Required'; $status="error";break;
                    case 412: $text = 'Precondition Failed'; $status="error";break;
                    case 413: $text = 'Request Entity Too Large'; $status="error";break;
                    case 414: $text = 'Request-URI Too Large'; $status="error";break;
                    case 415: $text = 'Unsupported Media Type'; $status="error";break;
                                      case 422: $text="Not Found -- OR -- Unprocessable Entity - Duplicate ?"; $status="error"; break;
                    case 500: $text = 'Internal Server Error'; $status="error";break;
                    case 501: $text = 'Not Implemented'; $status="error";break;
                    case 502: $text = 'Bad Gateway'; $status="error";break;
                    case 503: $text = 'Service Unavailable'; $status="error";break;
                    case 504: $text = 'Gateway Time-out'; $status="error";break;
                    case 505: $text = 'HTTP Version not supported'; $status="error";break;
                    default:
                        echo "\n"; exit('Unknown http status code');$status="error";
                    break;
                }
        
        
    

                echo "\n"    ;
                      echo $text;
                                echo "\n" ;    
    $fullresponse = array ('ok_or_error'=>$status, 
                                                 'reason' => $text, 
                                                  'code' => $code  
                                                
                                                ) ;
echo $fullresponse['ok_or_error']  ; print "\n"  ;     
echo $fullresponse['reason'] ;  echo "\n" ;  echo $code ; echo "\n" ;
     
    
    print "\n";
 
    
return $fullresponse;
    
}


function Append2Log ($string) {
    $string ='domainoverflow.com e.ventures dotboss.digital 2014-2017 All Rights Reserved';
    
 
    $lever='on'; 
    $file = 'addDomainsReport.log'; // please refactor accordingly to your env. 
                                    // example: return to asynch promisses, notifiers, queues
                                    // or a file .. storage bucket .. 
                                    
  if (file_exists($filename)) {
               //perform append 
        
    file_put_contents($file, $string.PHP_EOL, FILE_APPEND);
    //$lever='off';
    
} else {
    
    
    // create file and then perform append 
    
    $output = shell_exec('touch viptools.log');
    echo "<pre>$output</pre>";

    file_put_contents($file, $string.PHP_EOL, FILE_APPEND);
    $lever='off';
    
}
     

}

     
    
//    if ( $lever=='on') {file_put_contents($file, $string.PHP_EOL, FILE_APPEND); $lever='off';}
    

function SaveDigitalAssetBatchAdd ( $filename, $array)
    {
      
          // old fix to bypass 
          // the old-non-json-supportive libraries 
          
         // not used any longer 
            
            
      $handle =  fopen ($filename,'wb');
      
      $jsonheader="{  \"digital-assets\":";
      fwrite ($handle,$jsonheader);
      fwrite ($handle, "\n");
      fwrite($handle, json_encode ($array, JSON_UNESCAPED_SLASHES ));
      fwrite ($handle, "\n");
      fwrite ($handle, "}");
      fclose ($handle);
 
      
      
    }
    
    

 

 
 function s() {
     
     print "\n" ;
     
 }
 
 
 
 
  function VipConfig ($configpathonly) {
      
    s();  
    echo $configpathonly; s() ; 
    
        //$db = new JsonDB($configpathonly );
           $db = new JsonDB('../persisted/sergioatiddotventures/library/' );
$dbresults = $db -> selectAll("vipconfig") ;
 
    
    return $dbresults; 
       
      
      
      
      
  }

              function AnalyseCpanelAPIResponse ($response, $pathonly, $domain, $dir) {
            $timestamp = date('l jS \of F Y h:i:s A'); 
       $datatype = gettype ($response); 
       echo $datatype; // please turn this off after debug 
                       // this is to explicitly remind you 
                       // that the response will differ
                       // accordingly to the $config[0]["cpanelapioutput] 
                       // it can be array or json 
                       
           $msg = "[".$timestamp."]";
                        $msg = $msg . "[". $domain ."]";
                        $msg = $msg . "Adding to (hosting)Server:".$dir."/     ----->";
                        
         // but if you do happen to flip the setting
         // dont worry as it now handles both outputs ....
                  
         // the reason to the absurd "proprietary" parsing 
         // is again: this code is heavily factored everywhere
         // and the CpanelApiOutputFormat 
         // literally flips-flop across envs 
         
         // Keep in mind that this has been edited  
         // after a few corrections from cpanel 
         
         // $datatype string handles json output
         // whereas ELSE handles an array output without the json 
                 
         
           if ($datatype=="string") {
               
               $rs=json_decode($response, true );
                $rs2=$rs["cpanelresult"]; 
                $rs3=$rs2["data"];    
                $rs4=$rs3[0];
                 $result=$rs4["result"]; 
                 $reason=$rs4["reason"];  
               
           }      else {  $rs=$response;
                $rs2=$rs["cpanelresult"]; 
                $rs3=$rs2["data"];    
                $rs4=$rs3[0];
                 $result=$rs4["result"]; 
                 $reason=$rs4["reason"]; }
       
          s(); // if not running from cli please turn all echoes off 
          // once commit is done 
          
            $cpanelresult=$result;
            $cpanelreason=$reason;
            //echo "CpanelStatusCode:".$cpanelresult;
                s();
       
           if ($cpanelresult==1 )
           
                    {
                                         s();
                        echo "SUCCESS" ; 
                       
                        $msg = $msg  . "Successfully ADDED.. Domain is live";
                        
                        
                        $filename = 'add.requests.report';
                        file_put_contents ($filename, $msg.PHP_EOL, FILE_APPEND);
                        
                        
          ////////////// PLEASE NOTE : THE ABOVE OUTPUT can be seen 
          // in the browser reply of the request (dev tools / browser debug mode ) 
          // these strings should be 
          // send to proper notifiers ... and asynch promisses .. 
          
          // for your convenience it creates a add.requests.report
          
                        
                         return "ok" ; // refactor accordingly to your env  
                        
                    }
       
       
                    if ($cpanelresult==0 )
                         {
                                                                  
                                     echo "ERROR" ; 
                       
                        $msg = $msg  . "ERROR.. Unable to Add, Reason->".$reason;
                        s();

                        $filename = "add.requests.report";
                        file_put_contents ($filename, $msg.PHP_EOL, FILE_APPEND);
                        
                        
                                                         
                           
   
                                      return "error";
                                }


   }

?>


