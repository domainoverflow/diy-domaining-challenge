<?php

// Send email to domain owner with counter-offer
// counter-offer is in the request as per below

$counteroffertemp = json_decode($_POST["data"],true);
$counteroffer = $counteroffertemp["counteroffer"];
//if debug is needed, please uncomment the next line.
//file_put_contents('json.decode', print_r($abc, true),FILE_APPEND);
//Mail the counter offer
$maildata = $counter_offer . " [" .$_SERVER["REMOTE_ADDR"]."]" ;
mail("info@domainoverflow.com","CounterOffer->".$counteroffer,"-checkout" . $maildata) ;

?>
