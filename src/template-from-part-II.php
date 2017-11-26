<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<meta name="author" content="Sergio Abrahao">
<meta http-equiv="Reply-to" content="info@domainoverflow.com">
<meta name="description" content="DIY Domaining Challenge: Your own domain marketplace. Part III: Lander template">
<meta name="keywords" content="domaining, domainoverflow, domain overflow">
<meta name="creation-date" content="08-Nov-2017">
<meta name="revisit-after" content="2 days">
<title>TBD-This content will be dynamically changed</title>
<style>

/* Uncomment next line for a bonus special effect. sa. nov,8th-2017
.image:hover { background-size:70%; }

*/


.image { position:relative ; width: 100% ;
/* Requeriment R1 (Background picture)  */
    background-image: url('part3-lander.png');
    background-size: 1024px;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 50%;
    background-clip: border-box;
    transition: background-size 0.2s;
    transition-timing-function: cubic-bezier(.07,1.41,.82,1.41);
    display: block;
    width: 80%;
    height: 80%;
    text-decoration: none;
    cursor: pointer;
    overflow: hidden;
    text-indent: 100%;




}


h2 { position:absolute;top:20%;left:28%;width:99%;}
</style>
</head>
<body>

<div class="image">
<!--       Requirement R5 !-->
<a  href="https://contato.link" target="_blank"><span
style="position:absolute; width:100%;height:100%;top;0;left:0; z-index:1;"

></span></a>

<img src="part3-lander.png" alt=""/>
<!--   Requirement R3     !-->
<h2>h <?php  $a= $_SERVER['HTTP_HOST']; 
echo trim(strtoupper($a)." is for SALE, by Owner"); 
?></h2>
</div>
</a>
<script>

(function() {

// Requirement 3 ( Auto-identify domain's name )
var domainOfWhichIsHostingThisPage='<?php echo $_SERVER["HTTP_HOST"]; 
?>';
console.log("My name is:"+domainOfWhichIsHostingThisPage);
// end of requirement R3. s.

})();

//Change the page's tab title to the domain name

document.title='<?php echo $_SERVER["HTTP_HOST"];?>';


</script>








  
</body>
</html>

