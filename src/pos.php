<?php
// Domaining DIY: Create Your own Domain Marketplace
// part II - Creating a proper checkout page for your domain marketplace.
// BSD-3 License. Do anything you want with it as long as you keep the original credit.
// DomainOverflow.com
// s, 2nov2017
// the sld.tld - this info will come from the referrer.
// sld stands for second level domain or to the left of the dot.
$sldtld = "tbd"; // to be defined
$route = "tbd"; // This later will help us decide is we are displaying a price or not.
if ($route=="tbd") { // always true unless a new condition is needed and added above
if(isset($_SERVER["HTTP_REFERER"]) && !empty( $_SERVER["HTTP_REFERER"])){
$sldtld = $_GET["sldtld"] ; echo $sldtld;
$dots = substr_count($_SERVER['HTTP_REFERER'],"http");
if ($dots==1) {$sldtld=$_SERVER["HTTP_REFERER"];
$route = "specific.";
}
else {$sldtld="sld.tld";$route="default";
//could try URI from server
//this condition happens when the referrer is not found.
//this can happen if page is directly accessed ( no referrers )
//or if this routine did not manage to fetch the price
}
}
}
// Series of string validations.
if ($route=="tbd") {
if(isset($_GET['sldtld']) && !empty($_GET['sldtld'])){
$sldtld = $_GET["sldtld"] ;
if ($sldtld=="") {echo "blank though!";}
$route = "specific";
}
}// route==tbd
if ($route=="tbd") {
$route = "default"; $sldtld = "sld.tld";
}?>


<!doctype html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<meta name="DomainOverflow.com" content="DomainOverflow.com">
<meta http-equiv="Reply-to" content="info@domainoverflow.com">
<meta name="description" content="DIY Domaining Challenge. Create your own domain marketplace. Part II: Proper Checkout page for your domain marketplace.">
<meta name="keywords" content="domain investing, domainoverflow.com, DIY Domaining, domain management, domaining, .com, gtld, ngtls, website builder for domainers.">
<meta name="creation-date" content="09/06/2017">
<script src="https://code.jquery.com/jquery-3.2.1.min.js">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js">
</script>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
// Below is where you would change the font ( font-family )

<style>.blk-row::after{
clear:both;
display:block;
content:"";
}
.blk-row{
padding-right:1px;
;
padding-left:1px;
}
.blk1{
width:100%;
padding-right:1px;
padding-left:1px;
min-height:75px;
background-color:#ffffff;
color:#e93450;
text-align:center;
font-family: 'Nunito', sans-serif;
font-size:35px;
}
.c1290{
color:#E93450;
font-family: 'Nunito', sans-serif;
font-size:20px;
}
.c1747{
color:black;
text-align:center;
font-family: 'Nunito', sans-serif;
}
.c2128{
color:#e93450;
font-size:20px;
}
.c2306{
color:#07fd30;
}
span.info{
margin-left: 10px;
color: #b1b1b1;
font-size: 11px;
font-style: italic;
font-weight:bold;
}
h1 {
font-family: 'Nunito', sans-serif;
font-size: 33px;
font-style: normal;
font-variant: normal;
font-weight: 500;
line-height: 26.4px;
}
h3 {
font-family: 'Nunito', sans-serif;
font-size: 33px;
font-style: normal;
font-variant: normal;
font-weight: 500;
line-height: 15.4px;
}
p {
font-family: 'Nunito', sans-serif;
font-size: 33px;
font-style: normal;
font-variant: normal;
font-weight: 400;
line-height: 20px;
}
blockquote {
font-family: 'Nunito', sans-serif;
font-size: 33px;
font-style: normal;
font-variant: normal;
font-weight: 400;
line-height: 30px;
}
pre {
font-family: 'Nunito', sans-serif;
font-size: 33px;
font-style: normal;
font-variant: normal;
font-weight: 400;
}
h2
{
position: absolute;
/* To place the text on the image*/
top: 50%;
/* The exact location of the text from the top of the image*/
left: 0;
/* Other beautification stuff */
width: 100%;
/*opacity: 0.5; */
font-family: 'Nunito', sans-serif;
font-size: 34px;
font-style: normal;
font-variant: normal;
font-weight: 100;
}
h2 span /* decorating the text within the span tag */
{
color: '#fcfcff';
font: bold 30px/30px Nunito;
letter-spacing: 1px;
/*background: rgb(0, 0, 0); /* fallback color */
/*background: rgba(0, 0, 0, 0.7); padding: 2px;*/
/*background: white;*/
}
h2 span.spacer {
padding:0 0px;
}
/* to pad the background color of text to make it look more elegant *
</style>
</head>
<body>
<div class='blk-row'>
<div class='blk1'>
<div class="image"
style="position: relative;
">
<!-- the image container -->
<img style="height:33%; width:37%"src='https://domainoverflow/downloads/checkouts.png'>
<!-- span tag to beautify it efficiently -->
<h2 id ="titleobject2"style="font-family: 'Nunito', sans-serif;font-size:15px;color:#fcfcff;">
<span style="display:block;" id="spanobject2">USD:
<span id="priceobject2" >
</span>
<br>
<span class='spacer'>
</span>
</span>
<!-- span tag to beautify it efficiently -->
<div id="pagamento" style="text-align:center">
<div id="paymentlink" style="text-align:center;">
<form action="https://www.paypal.com/cgi-bin/webscr" id="Domain Purchase" method="post" target="_self">
<input type="hidden" name="cmd" value="_xclick" />
<input type="hidden" name="business" value="YOURPAYPAL@PAYPAL.COM"/>
<input type="text" readonly="true" id ="itemname" name="item_name" value="sld.tld"/>
<input id="domainprice" type="text" readonly="true" name="amount" value="Please email the@e.ventures"/>
<input type="hidden" name="currency_code" value="USD"/>
<input type="hidden" name="lc" value="CA"/>
<input type="hidden" name="bn" value="btn_paynowCC_LG.gif"/>
<input type="hidden" name="weight_unit" value="kgs"/>
<br>
<input id ="paypalbutton" type="image" src="https://domainoverflow.com/downloads/paypalcheckout.jpg" name="submit" alt="Make payments with PayPal"/>
</form>
</div>
</h2>
</div>
<h2 id ="titleobject"style="font-family: 'Nunito', sans-serif;font-size:15px">
<span id="spanobject">SLD.TLD
<span id="priceobject" >USD
</span>
<span class='spacer'>
</span>
</span>
</div>
</div>
</div>
<div id="counter" style="text-align:center">
<input id="buynow" type="image" src="https://domainoverflow/downloads/buynows.png" onclick="$('#paymentsection').toggle();$('#pagamento').toggle();">
</input>
<input id="counteroffer" type="image" src="https://domainoverflow/downloads/counters.png" onclick="RequestCounterOffer();">
</input>
<input id="supporthelp" type="image" src="https://domainoverflow/supports.png" onclick="RequestHelp()">
</input>
</div>


<script type="text/javascript">
var paypalstring = '<form action="https://www.paypal.com/cgi-bin/webscr" id="levelIIm" method="post" target="_self">'+
'<input type="hidden" name="cmd" value="_xclick" /><input type="hidden" name="business" value="YOURPAYPAL@PAYPALACCOUNT.COM"/>'+
'<input type="text" readonly="true" id ="itemname" name="item_name" value="loadingsldtld"/>'+
'<input id="domainprice" type="text" readonly="true" name="amount" value="loadingprice"/>'+
'<input type="hidden" name="currency_code" value="USD"/><input type="hidden" name="lc" value="CA"/>'+
'<input type="hidden" name="bn" value="https://domainoverflow/downloads/btn_paynowCC_LG.gif"/><input type="hidden" name="weight_unit" value="kgs"/>'+
'<br><input type="image" src="paypalcheckout.jpg" name="submit" alt="Make payments with PayPal"/></form>';
var paypalcode = paypalstring;
var priceavailable = "tbd";
var records="tbd";
var sldtld=''+'<?php echo $sldtld ?>';
var price=50;
var hostname="tbd";
var isithttp = occurrences (sldtld, 'http://' );
var isithttps = occurrences (sldtld, 'https://');
var spanprice = document.getElementById("spanobject2");
if (isithttp>0) {
hostnamestring = sldtld.replace('http://','');
}
if (isithttps>0) {
hostnamestring = sldtld.replace('https://','');
}
var slashes = occurrences(sldtld, '/');
if (slashes>0) {
hostnamestring=hostnamestring.replace('/','');
}
var hostnamestr = hostnamestring.replace('/', "");
console.log ("hostname string:"+hostnamestr);
var span = document.getElementById("spanobject");
span.textContent = hostnamestr;
$(document).ready(function(){
$('#paymentsection').toggle();
$('#pagamento').toggle();
//payment
SendThisData("local:callitself:sldtld="+sldtld);
}
);
function SendThisData (senddata)
{
var parser = document.createElement('a');
var tobesent="";
parser.href = sldtld;
tobesent = parser.hostname;
$.ajax(
{
// ************ REQUESTS PRICE ************************** from request-price.php
url: 'https://YOURDOMAIN/request-price.php?sldtld='+tobesent, // we will provide this shortly
beforeSend: function(xhr)
{
xhr.setRequestHeader("Content-Type", "application/json");
}
,
success: function(data, status)
{
price=data;
var span2 = document.getElementById("spanobject2");
span2.textContent = tobesent+" is USD:"+price;
var span3 = document.getElementById("spanobject");
span3.textContent = "";
// Update components with domain name and price **************************************
$('#domainprice').val(price);
$('#itemname').val(sldtld);
}
,
error: function(error)
{
console.log("error:data:"+error);
priceavailable="no"
}
}
);
}
function RequestPrice (p) {
// requestprice.php will be provided shortly within this article ( domainoverflow.com )
var data = new FormData();
data.append("data" , JSON.stringify(p));
var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
xhr.open( 'post', 'requestprice.php', true );
xhr.send(data);
}
/** Function that count occurrences of a substring in a string;
* @author Vitim.us https://gist.github.com/victornpb/7736865 */
function occurrences(string, subString, allowOverlapping) {
string += "";
subString += "";
if (subString.length <= 0) return (string.length + 1);
var n = 0,
pos = 0,
step = allowOverlapping ? 1 : subString.length;
while (true) {
pos = string.indexOf(subString, pos);
if (pos >= 0) {
++n;
pos += step;
}
else break;
}
return n;
}
function sleep(milliseconds) {
// s
var start = new Date().getTime();
for (var i = 0; i < 1e7; i++) {
if ((new Date().getTime() - start) > milliseconds){
break;
}
}
}
function RequestBuyNow () {
// MIT License - do as you please -except charge for it - and please keep the credit or the system will auto-destroy itself :-)
// sergio@sergio.email
$('#domainprice').val(price);
$('#paypalbutton').toggle();
var parser5 = document.createElement('a');
var tobesent2="";
parser5.href = sldtld;
tobesent2 = parser5.hostname;
var paypaltemp = paypalstring.replace("loadingprice", "USD"+price);
var paypalready = paypaltemp.replace("loadingsldtld",tobesent2);
$('#itemname').val(tobesent2);
$('#paypalbutton').toggle();
//$('paypalbutton').show(); ////////////////////////////////////////////////// this line and the below line
//$("#paypalbutton").css("display", "block"); ///// could be uncommented if you wish to display buynow gateway ssl right away upon pageload.
// ( regardless if the price was found or not and regardless if the event originates from a referrer or not.)
// depending on your context, you might want tweak with this.
}
function SendAnyData(anydata = "anydata") {
// sergio@sergio.email
// SENDS COUNTER-OFFER !!!!!!
var counteroffer1=anydata;
counteroffer1 = counteroffer1 + "["+ sldtld +"]";
var dataObject = {
counteroffer: counteroffer1
};
jQuery.ajaxSetup({
async: false // this depends on your context;
}
);
// request-counter-offer.php below will also be provided shortly within this article ( domainoverflow.com )
$.post("request-counter-offer.php", {
data: JSON.stringify(dataObject),
}
, function(data, status) {
console.log("Data: " + data + "\nStatus: " + status);
// this can be commented once OK
// to view the above log just right click while hovering your browser screen and choose
// "Inspect Element" or "Developer Tools" depending on the browser.
}
);
jQuery.ajaxSetup({
async: true //again this depends on your context.
}
);
}
function RequestHelp() {
swal({
title: 'Please, write your message below, kindly include your email and/or phone, for a fast reply.',
input: 'textarea',
showCancelButton: true,
}
).then(function(text) {
SendAnyDataTicket(text);
if (text) {
swal(text + ", message sent, We will reply promptly.")
}
}
).catch(swal.noop);
}
function RequestCounterOffer() {
var parser6 = document.createElement('a');
var tobesent3="";
parser6.href = sldtld;
tobesent3 = parser6.hostname;
swal({
// title: 'Counter Offer will be sent directly to the seller of '+sldtld+"[@USD"+price+"]",
text: 'Please include your email.',
input: 'textarea',
html: 'Counter Offer will be sent directly to the seller of:<br><b>'+tobesent3+'</b><br><br>Seller is asking for USD:'+price+'<br><br><h3>What is your counter-offer?</h3><br>*Please be sure to include your email along the message so the seller can reply directly to this offer.',
showCancelButton: true,
}
).then(function(text) {
if (text) {
SendAnyData(text);
swal(text + ", message sent!")
}
}
).catch(swal.noop);
}
function RequestRedirect () {
window.location.replace("https://dotboss.digital","_blank");
}
function CreateTicket() {
swal({
title: 'Support',
text: "Please describe problem and domain name(s) in question",
type: 'warning',
input: 'textarea',
showCancelButton: true,
confirmButtonColor: '#E93450',
cancelButtonColor: '#EFF512F',
useRejections: false,
confirmButtonText: 'Send it'
}
).then(function(text) {
SendAnyDataTicket(text);
swal(
'Sent!',
'You will receive an email with a ticket number, followed by updates until resolution.',
'success'
)
}
)
}
function SendAnyDataTicket(anydata = "anydata") {
var dataObject = {
requestssl: anydata
};
jQuery.ajaxSetup({
async: false
}
);
// support-help.php will be provided later on within this article ( domainoverflow.com )
$.post("request-support.php", {
data: dataObject
}
, function(data, status) {
console.log("Data: " + data + "\nStatus: " + status);
}
);
jQuery.ajaxSetup({
async: true // Depends on your context. If in the cloud, go fully asynch.
// ask us if in doubt info@domainoverflow@.com
}
);
}
</script>
</body>
<footer>
</div>
<div style="text-align:center">
<input id="dotbossdigitalobject" type="image" src="YOUR-LOGO-HERE.png" onclick="window.open('https://dotbossdigital.com', '_blank');">
</input>
</div>
</form>
</div>
</footer>
</html>
