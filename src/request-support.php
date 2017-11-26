<?php
//Request Support

//Change the email to your email
file_put_contents('support.request.post.history', file_get_contents('php://input'),FILE_APPEND);
$maildata=file('support.request.post.history');
$maildata=implode("|",$maildata);
mail("info@domainoverflow.com","Help->from request-support.php".$maildata,"Support Message:" . $maildata) ;
?>
