<?php
  
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
   
  ////////////////////////////////////////////////////////
  
  $sldtld = $_SERVER['HTTP_REFERER']; // underlying domain 
  

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
  
    echo "You've arrived here without a referrer. <a href='https://e.ventures' target='_blank'>Please click here to return.</a>";$protocol='https://';}

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
                if ($subdomain=="tbd") {$subdomain="no";}
   
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
              


?>

<html>


<head>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-63552696-16"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-63552696-16');
</script>  
      <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
<meta charset="utf-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<meta name="author" content="dotboss.digital">
<meta http-equiv="Reply-to" content="the@e.ventures">
<meta name="description" content="e.ventures POS, Dotboss.Digital, Manage your dot like a boss.">
<meta name="keywords" content="domain investing, e.ventures,  domain management, domaining, .com, gtld, ngtls, website builder for domainers.">
<meta name="creation-date" content="09/06/2017">
    <script src="https://e.ventures/lib/jquery3.min.js"></script>     
       <link rel="stylesheet" href="https://e.ventures/lib/sweetalert2.min.css">
    <script src="https://e.ventures/lib/sweetalert2.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



 <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> !-->
 
 <script type="text/javascript" src="https://e.ventures/content/more-balloons/moveobj.js"></script>  
 
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">

</head>

    
<style>
@font-face {
  font-family: "open_sansregular";
  src: url("OpenSans-Regular-webfont.eot");
  src: url("OpenSans-Regular-webfont.eot?#iefix") format("embedded-opentype"),
    url("OpenSans-Regular-webfont.woff2") format("woff2"),
    url("OpenSans-Regular-webfont.woff") format("woff"),
    url("OpenSans-Regular-webfont.ttf") format("truetype"),
    url("OpenSans-Regular-webfont.svg#open_sansregular") format("svg");
  font-weight: normal;
  font-style: normal;
}

* {
  font-family: 'open_sansregular';
    font-weight: normal;
    font-style: normal;
}

/*
// CSS Grid Domain Marketplace POS 
// CSS Grid Template 1
// written by sergio@abrahao.ca
// knowledge from GridsByExample.com 
// by CSS Grid's author: Rachel Andrew
// 12-Dec-2017
// All Rights Reserved DomainOverflow.com 
// License: MIT */

.grid {
  display: grid;
  align-items: stretch;

  grid-template-columns: [col1start] 1fr [col2start] 1fr [col3start] 1fr
    [col3end];
  grid-template-rows: [row1start] 80px [row2start] auto [row3start] auto
    [row4start] auto [row4end] ;
  grid-gap: 1px;

  grid-template-areas: 
    "titleArea titleArea domainnameArea"
    "buynowArea counterArea promo2Area"
    "posArea supportArea promo1Area"
    "navbarArea navbarArea additionalArea";
    
}

.box {
  color: #6c7a89;
  font-size: 18px;
  border-radius: 5px;
  padding: 2px;
  /*border: 1px solid #171717;*/
  /* box-shadow: 1px 1px #888888; */
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "open_sansregular", Fallback, sans-serif;
}

.urllink {
  color: #6c7a89;
  font-family: "open_sansregular", Fallback, sans-serif;
}

.domainName {
  grid-area: domainnameArea;
  background-color: white;
  color: #6c7a89;font-size:22px;
}
.title {
  grid-area: titleArea;
  background-color: blue;
  color: white;
  min-height: 80px;
}
.additional {
  grid-area: additionalArea;
  background: white;
  color: #6c7a89;
  max-width: 1fr;
  max-height: 200px;
  height: 99%;
  width:99%;
}

.logoimage {
    
    display:flex; 
    max-width:400px; 
    max-height:380px; 
    padding: 1px; 
    border radius: 5px;
    height:100%;
    width:auto
    
    
    
}


.support {
  grid-area: supportArea;
  background-color: #2c8fc9;
  min-height: 200px;
  color: white;
  padding-top: 10px;
  text-align: center;
}
.promo2 {
  grid-area: promo2Area;
   
  min-height: 200px;
  color: #6c7a89;
  padding-top: 10px;
  background: #6c7a89; /* Old browsers */
 
}
.buyNow {
  grid-area: buynowArea;
  min-height: 200px; min-height: 200px;
  padding-top:10px;
  background: #60dd4d;
 
}
.counter {
  grid-area: counterArea;

  background: #2c8fc9; 
 
}
.navBar {
  grid-area: navbarArea;
  background-color: #6c7a89;
  color: white;
  min-height: 200px;
  max-height: 200px;
  height: 100%; font-size:15px;
}
.promo1 {
  grid-area: promo1Area;
  background-color: #6c7a89;
  color: white;
  display:flex;
}

.pos {
  grid-area: posArea;
  background-color: #60dd4d;
  color: white;

  padding-top: 10px;
  text-align: center;
}

.btn {
  border-radius: 5px;
  padding: 14px 25px;
  font-size: 14px;
  text-decoration: none;
  margin: 10px;
  color: #fff;
  position: relative;
  display: inline-block;
}
.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}

.blue {
  background-color: #55acee;
  box-shadow: 0px 5px 0px 0px #3c93d5;
}

.blue:hover {
  background-color: #6fc6ff;
}

.green {
  background-color: #2ecc71;
  box-shadow: 0px 5px 0px 0px #15b358;
}

.green:hover {
  background-color: #48e68b;
}

.red {
  background-color: #95a5a6;
  box-shadow: 0px 5px 0px 0px #595959;
}

.red:hover {
  background-color: #d2d7d3;
}


 
.myForm {
    display: grid;
    grid-template-columns: [labels] auto [controls] 1fr;
    grid-auto-flow: row;
    grid-gap: .8em;
    background: #6c7a89;
    padding: 0.2em;
  }
  .myForm > label  {
    grid-column: labels;
    grid-row: auto;
  }
  .myForm > input,
  .myForm > textarea {
    grid-column: controls;
    grid-row: auto;
  }
  .myForm > button {
      font-size:18px;
    grid-column: span 2;
    background-color:#6c7a89; color:white; 
     border-radius: 12px;
  box-shadow: 0 5px #999;
  }  
   
   
   .myForm2 {
    display: grid;
    grid-template-columns: [labels] auto [controls] 1fr;
    grid-auto-flow: row;
    grid-gap: .8em;
    background: #2c8fc9;
    padding: 0.2em;
  }
  .myForm2 > label  {
    grid-column: labels;
    grid-row: auto;
  }
  .myForm2 > input,
  .myForm2 > textarea {
    grid-column: controls;
    grid-row: auto;
  }
  .myForm2 > button {
      font-size:18px;
    grid-column: span 2;
    background-color:#2c8fc9; color:white; 
     border-radius: 12px;
  box-shadow: 0 5px #999;
  }  
   
   
     .myForm3 {
    display: grid;
    grid-template-columns: [labels] auto [controls] 1fr;
    grid-auto-flow: row;
    grid-gap: .8em;
    background:  #60dd4d;
    padding: 0.2em;
  }
  .myForm3 > label  {
    grid-column: labels;
    grid-row: auto;
  }
  .myForm3 > input,
  .myForm3 > textarea {
    grid-column: controls;
    grid-row: auto;
  }
  .myForm3 > button {
      font-size:18px;
    grid-column: span 2;
    background-color: #60dd4d; color:white; 
     border-radius: 12px;
  box-shadow: 0 5px #999;
  }  
   
   
   
   
   
    
 </style>

<body>

<div id="grid" class="grid">


<div id="domainname" class="box domainName"></div>
<div id="title" class="box title">
  Domain purchase checkout.
</div>

<div id="buynow" class="box buyNow">

<a href="#" id="buynowbutton" onclick="RequestBuyNow();" class="btn green" style="font-size:15px;">

 


</a>
</div>
<div id="counter" class="box counter"> 


<a href="#" onclick="RequestCounter();" id="counterbutton" class="btn blue"></a>





</div>
<div id="support" class="box support">

<form class="myForm2" id="formcounter" action="universalcontactform.php" method="post">
<h3> Contact the owner of<?echo " ".$sldtld?></h3>
  <label for="customer_name2">Name </label>
  <input type="text" name="customer_name2" id="customer_name2" required>

  <label for="email_address2">Email </label>
  <input type="email" name="email_address2" id="email_address2">

  <label for="comments2">Message</label>
  <textarea name="comments" required id="comments2" maxlength="500">
  
  
  </textarea>

  <button id="formcounterbutton">Send</button>

</form>










</div>
  <div id="navbar" class="box navBar">
  
  
  <a href="https://dotboss.digital" target="_blank" class="urllink" style="color:white;">Created with dotboss.digital</a>
  
  
  </div>
<div id="promo1" class="box promo1">

 <form class="myForm" id="formcontact" action="universalcontactform.php" method="post">
<h3>Contact <h3 style="color:#e93418">dotboss.digital</h3></h3>
  <label for="customer_name">Name </label>
  <input type="text" name="customer_name" id="customer_name" required>

  <label for="email_address">Email </label>
  <input type="email" name="email_address" id="email_address">

  <label for="comments">Message</label>
  <textarea name="comments" required id="comments" maxlength="500">
  
  
  </textarea>

  <button id="formcontactbutton">Send</button>

</form>
   



</div>
<div id="promo2" class="box promo2"><br>
  <a href="#" onclick="RequestHelp();" class="btn red">
  <pre><h1>Get Help<br>For <?php echo $sldtld ?></h1><br>from<h3 style="color:#e93418;">dotboss.digital<br></h3></h3></pre>
    </a>
</div>
<div id="pos" class="box pos">
<form class="myForm3" id="formhelp" action="universalcontactform.php" method="post">
<h3 id="buynowlabel"> Get a price quote for <?echo " ".$sldtld?></h3>
  <label for="customer_name3">Name </label>
  <input type="text" name="customer_name2" id="customer_name2" required>

  <label for="email_address3">Email </label>
  <input type="email" name="email_address3" id="email_address2">

  <label for="comments3">Message</label>
  <textarea name="comments" required id="comments3" 
  placeholder="Hi Dotboss.digital, please what is the price of <?php echo $sldtld?>"
    
  maxlength="500">
  
  
  </textarea>

  <button id="formhelpbutton">Send</button>

</form>



  </div>

<div id="additional" class="box additional">

<img onclick="CallDotBoss();"src="dotboss-logo-nunito.jpg" id="logoimage" style="margin:0; padding:1px;height:100%;width:auto;"class="box additional"/>


</div>

 </div>
 
<script>
  var globalprice="tbd";
  var globalstatus="tbd"; 
   var paypalstring = '<form action="https://www.paypal.com/cgi-bin/webscr" id="levelIIm" method="post" target="_self">'+
  
  '<input type="hidden" name="cmd" value="_xclick" /><input type="hidden" name="business" value="lara@id.ventures"/>'+
  '<input type="text" readonly="true" id ="itemname" name="item_name" value="loadingsldtld"/>'+
  '<input id="domainprice" type="text" readonly="true" name="amount" value="loadingprice"/>'+
  '<input type="hidden" name="currency_code" value="USD"/><input type="hidden" name="lc" value="CA"/>'+
  '<input type="hidden" name="bn" value="btn_paynowCC_LG.gif"/><input type="hidden" name="weight_unit" value="kgs"/>'+
   '<br><input type="image" src="paypalcheckout.jpg" name="submit" alt="Make payments with PayPal"/></form>';
  
        var   globalclientlocation ; 
       var isMobile = false; //initiate as false
       var isitmobile2 = false; 
       var registrationhelper="";
       var screenformat = "services/"; 
       var formatsize = 'dashboard/';
  
   var requestedauth="tbd";   
       var fullname="tbd"; 
       var fullcountry="tbd"; 
       var fullphone = "tbd";
       var fullcity="tbd" ;
       var fullreceived;
       var enveloperesult;
       var thisresult;
      // SendAnyData() ; 

         var email="tbd";
              
              
               
       var client_ip = '<?php $ipaddress = '';if (getenv('HTTP_CLIENT_IP')){$ipaddress="" ; getenv('HTTP_CLIENT_IP');}else if(getenv('HTTP_X_FORWARDED_FOR')) {  $ipaddress = $ipaddress . getenv('HTTP_X_FORWARDED_FOR');}else if(getenv('HTTP_X_FORWARDED')) {$ipaddress = $ipaddress .  getenv('HTTP_X_FORWARDED');} else if(getenv('HTTP_FORWARDED_FOR')) { $ipaddress = $ipaddress . getenv('HTTP_FORWARDED_FOR');}else if(getenv('HTTP_FORWARDED')) {$ipaddress = $ipaddress . getenv('HTTP_FORWARDED');}else if(getenv('REMOTE_ADDR')) {$ipaddress = $ipaddress . getenv('REMOTE_ADDR');}else $ipaddress = $ipaddress .  'UNKNOWN'; echo $ipaddress ;?>' ;

    
     
     
     var templocation="";      jQuery.ajaxSetup({async:false});
      $.get("https://freegeoip.net/json/"+client_ip, function(data, status){
           var divider="<br>";
              clstring =        "IP:"+data.ip + divider + "Country Code:"+data.country_code + divider + "Country Name:"+data.country_name + divider + 

                    "Region Code:"+data.region_code + divider + "Region Name:"+data.region_name + divider + "City:"+data.city + divider + "Postal Code:"+data.zip_code + 

                    divider + "Time Zone:"+data.time_zone + 

                    divider + "Latitude:"+data.latitude + divider + "Longitude:"+data.longitude + divider + "Area Code:"+data.metro_code ;





                 globalclientlocation =  data;   
console.log(data);
                    console.log(clstring);    
      });     // get 
         
var databutton="button";



         
              jQuery.ajaxSetup({async:false});     


                   $.post("eventures-mailbox.php",{data:globalclientlocation}, function(data, status){

     console.log("Data: " + data + "\nStatus: " + status);   
        
    });            

    
                           

       jQuery.ajaxSetup({async:true});  





  
  
  
  
  
  
  
  
  
  
  
  
    
function RequestBuyNow () {
   
     
   
   
   
   
    
   
   
       $('#domainprice').val(globalprice); 
            $('#paypalbutton').toggle();   
                
      var parser5 = document.createElement('a');
     var tobesent2=""; 
     parser5.href = sldtld;
     tobesent2 = parser5.hostname;
    
var paypaltemp = paypalstring.replace("loadingprice", globalprice);
var paypalready = paypaltemp.replace("loadingsldtld",sldtld);
   $('#itemname').val(tobesent2);
      $('#paypalbutton').toggle();   
      
      $('#levelIIm').submit();
      
      
      
  //$('paypalbutton').show();
  //$("#paypalbutton").css("display", "block");
    
}


   
      
        function RequestCounter() {
  var parser6 = document.createElement('a');
     var tobesent3=""; 
     parser6.href = sldtld;
     tobesent3 = parser6.hostname;
        
            swal({
              //  title: 'Counter Offer will be sent directly to the seller of '+sldtld+"[@USD"+price+"]",
                text: 'Please include your email.',
                input: 'textarea',
                html: 'Counter Offer will be sent directly to the seller of:<br><b>'+tobesent3+'</b><br><br>Seller is asking for USD:'+price+'<br><br><h3>What is your counter-offer?</h3><br>*Please be sure to include your email along the message so the seller can reply directly to this offer.',
                                          
                       
                showCancelButton: true,
            }).then(function(text) {
               
                if (text) { SendAnyData(text);
                    swal(text + ", message sent!")
                }
            }).catch(swal.noop);



        }
 function RequestHelp() {

        
            swal({
                title: 'Please, write your message below, kindly include your email and/or phone, for a fast reply.',
                input: 'textarea',

                showCancelButton: true,
            }).then(function(text) {
               SendAnyDataTicket(text);
                if (text) {
                    swal(text + ", message sent, We will reply promptly.")
                }
            }).catch(swal.noop);



        }
         
         
          

         
         
         
           var paypalstring = '<form action="https://www.paypal.com/cgi-bin/webscr" id="levelIIm" method="post" target="_self">'+
  
  '<input type="hidden" name="cmd" value="_xclick" /><input type="hidden" name="business" value="lara@id.ventures"/>'+
  '<input type="text" readonly="true" id ="itemname" name="item_name" value="loadingsldtld"/>'+
  '<input id="domainprice" type="text" readonly="true" name="amount" value="loadingprice"/>'+
  '<input type="hidden" name="currency_code" value="USD"/><input type="hidden" name="lc" value="CA"/>'+
  '<input type="hidden" name="bn" value="btn_paynowCC_LG.gif"/><input type="hidden" name="weight_unit" value="kgs"/>'+
   '<br><input type="image" src="paypalcheckout.jpg" name="submit" alt="Make payments with PayPal"/></form>';
         
         console.log(paypalstring);
         var paypalcode = paypalstring;         
         var priceavailable = "tbd";
         var records="tbd";
         var sldtld=''+'<?php echo $sldtld  ?>';
         var price="";
         var hostname="tbd";
        
      //   var isithttp = occurrences (sldtld, 'http://' );
      //   var isithttps = occurrences (sldtld, 'https://');
             var spanprice = document.getElementById("spanobject2");
         
  var hostnamestr = sldtld;
console.log ("hostname string:"+hostnamestr); 


                
                
          $(document).ready(function(){
              
              
            var oneform = $('#formcounter'); 
            var oneformbutton = $('#formcounterbutton'); 
            var formhelp = $('#formhelp'); 
            var formhelpbutton = $('#formhelpbutton'); 
            var formcontact = $('#formcontact'); 
            var formcontactbutton = $('#formcontactbutton'); 
                        
            
            
            
            
            oneform.on('submit',function (e) {
                
                
                e.preventDefault(); 
                                
                
         
              
              
               $.ajax({
      url: 'universalcontactform.php', // form action url
      type: 'POST', // form submit method get/post
      dataType: 'html', // request type html/json/xml
      data: oneform.serialize(), // serialize form data 
      beforeSend: function() {
        
        oneformbutton.html('Sending....'); // change submit button text
      },
      success: function(data) {
        console.log("response received");
        
        oneform.trigger('reset'); // reset form
        oneformbutton.html('Message sent!'); // reset submit button text
        
        swal({
  position: 'top-left',
  type: 'success',
  title: 'Thanks for your message, we will reply shortly.',
  showConfirmButton: true
  
})
        
        
        
        
        
        
        
      },
      error: function(e) {
        console.log(e)
      }
    });
  });
              
              
         /////////////
         
              formhelp.on('submit',function (e) {
                
                
                e.preventDefault(); 
                                
                
         
              
              
               $.ajax({
      url: 'universalcontactform.php', // form action url
      type: 'POST', // form submit method get/post
      dataType: 'html', // request type html/json/xml
      data: formhelp.serialize(), // serialize form data 
      beforeSend: function() {
        
        formhelpbutton.html('Sending....'); // change submit button text
      },
      success: function(data) {
        console.log("response received");
        
        formhelp.trigger('reset'); // reset form
        formhelpbutton.html('Message sent!'); // reset submit button text
        
        swal({
  position: 'top-left',
  type: 'success',
  title: 'Thanks for your message, we will reply shortly.',
  showConfirmButton: true
  
})
        
    
        
      },
      error: function(e) {
        console.log(e)
      }
    });
  });
              
                   
              
              
             ////////////////////// //////////  
              
              
              
              
              
                 formcontact.on('submit',function (e) {
                
                
                e.preventDefault(); 
                                
                
         
              
              
               $.ajax({
      url: 'universalcontactform.php', // form action url
      type: 'POST', // form submit method get/post
      dataType: 'html', // request type html/json/xml
      data: formcontact.serialize(), // serialize form data 
      beforeSend: function() {
        
        formcontactbutton.html('Sending....'); // change submit button text
      },
      success: function(data) {
        console.log("response received");
        
        formcontact.trigger('reset'); // reset form
        formcontactbutton.html('Message sent!'); // reset submit button text
        
        swal({
  position: 'top-left',
  type: 'success',
  title: 'Thanks for your message, we will reply shortly.',
  showConfirmButton: true
  
})
        
    
        
      },
      error: function(e) {
        console.log(e)
      }
    });
  });
              
                   
              
                        
              
              
              
              
              
              
              
              
              
             $('#paymentsection').toggle(); 
             $('#pagamento').toggle();
             
           //  document.getElementsByClassName("titleobject").innerHTML = ":".sldtld;
             console.log("local before send:sldtld:"+sldtld);
            
             SendThisData("local:callitself:sldtld="+sldtld); 
              
 {       
    //var parser = document.createElement('a');
    // var tobesent=""; 
    // parser.href = sldtld;
     tobesent = sldtld;
     
     
     /*
parser.protocol; // => "http:"
parser.hostname; // => "example.com"
parser.port;     // => "3000"
parser.pathname; // => "/pathname/"
parser.search;   // => "?search=test"
parser.hash;     // => "#hash"
parser.host;     // => "example.com:3000"
     */
     
    $.ajax(
        {
            url: 'https://e.ventures/pos/requestprice.php?sldtld='+tobesent,
            //dataType: 'json',
          //  data:  senddata, 
            beforeSend: function(xhr)
            {               
                xhr.setRequestHeader("Content-Type", "application/json");
//xhr.setRequestHeader('X-user-token',senddata);
          /*
                 var protocols="tbd"; 
             protocols = occurrences (sldtld, "http:");
            if (protocols>0) {    //http
              hostname = sldtld.replace("http://",""); 
            }
             var sslprotocols="tbd";
             sslprotocols = occurrences(sldtld,"https:");
            if (sslprotocols>0)  { //https override 
            
              hostname = sldtld.replace('https://',''); 
                
                
            } 
            
            if ((protocols==0) && (sslprotocols==0)) {
                
                hostname = sldtld;
                
                
            }
            
            var slashout = "tbd"; 
            slashout = occurrences(hostname,"/");
            if (slashout>0) { hostname=hostname.replace('/','');}
            
            console.log ("hostname:"+hostname); 
            
             sldtld=hostname;
                 */

       
            },
            success: function(data, status)
            {
                price=data;
                var fields = price.split(',');

 price = fields[1];
var domainrequestedpos = fields[0];
                console.log("domain is:"+domainrequestedpos);
                console.log("price is:"+price ) ; 
                globalprice=fields[1];
                globalprice = globalprice.trim();
                
                UpdateTemplate();
                 
             /*   <a href='https://e.ventures/goodnews' target='_blank'>Good News! ".$sldtld.": is available! Please click here for details.</a>
                
                var span2 = document.getElementById("spanobject2");
                span2.textContent = tobesent+" is USD:"+price;       
                    var span3 = document.getElementById("spanobject");
                //span3.textContent = hostnamestr;
                span3.textContent = "";             
                //spanprice.textContent = "USD"+price;                
                
                console.log("price:received:"+price); console.log(":status:"+status);
                
                $('#domainprice').val(price); 
                $('#itemname').val(sldtld);
              
               */ 
                
               
            },
            error: function(error)
            {
                console.log("error:data:"+error);   priceavailable="no"     
            }
        });
    
                    
      }     

      

      
   
      
function RequestPrice (p) {
    
    var data = new FormData();
data.append("data" , JSON.stringify(p));
var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
xhr.open( 'post', 'requestprice.php', true );
xhr.send(data);
    
    
    
    
    
}
         
       /** Function that count occurrences of a substring in a string;
 * @param {String} string               The string
 * @param {String} subString            The sub string to search for
 * @param {Boolean} [allowOverlapping]  Optional. (Default:false)
 *
 * @author Vitim.us https://gist.github.com/victornpb/7736865
 * @see Unit Test https://jsfiddle.net/Victornpb/5axuh96u/
 * @see http://stackoverflow.com/questions/4009756/how-to-count-string-occurrence-in-string/7924240#7924240
 */
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
        } else break;
    }
    return n;
}


function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

 

 function SendAnyData(anydata = "anydata") {


var counteroffer1=anydata;
counteroffer1 = counteroffer1 + "["+ sldtld +"]";


            var dataObject = {
                counteroffer: counteroffer1


            };

            jQuery.ajaxSetup({
                async: false
            });



          //  $.post("postoffice.php", JSON.stringify({data:globalclientlocation}), function(data, status){
            $.post("postoffice-checkout.php", {data: JSON.stringify(dataObject),
            }, function(data, status) {

                console.log("Data: " + data + "\nStatus: " + status);



            });







            jQuery.ajaxSetup({
                async: true
            });





        }
         
         function RequestHelp2() {
             
             swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function () {
  swal(
    'Deleted!',
    'Your file has been deleted.',
    'success'
  )
})
             
             
             
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
                cancelButtonColor: '#E6c7a89',
                useRejections: false,
                confirmButtonText: 'Send it'
            }).then(function(text) {
                 SendAnyDataTicket(text); 
                swal(
                    'Sent!',
                    'You will receive an email with a ticket number, followed by updates until resolution.',
                    'success'
                )
            })



        }

        
           function SendAnyDataTicket(anydata = "anydata") {





            var dataObject = {
                requestssl: anydata


            };

            jQuery.ajaxSetup({
                async: false
            });



            //$.post("postoffice.php", JSON.stringify({data:globalclientlocation}), function(data, status){
            $.post("postoffice-ticket.php", {
                data: dataObject
            }, function(data, status) {

                console.log("Data: " + data + "\nStatus: " + status);



            });







            jQuery.ajaxSetup({
                async: true
            });





        }



             
             
             
             
             
             
             
         });      
                
                
                
                
                
      function SendThisData (senddata) 
 {       
    var parser = document.createElement('a');
     var tobesent=""; 
     parser.href = sldtld;
     tobesent = parser.hostname;
     
     
     /*
parser.protocol; // => "http:"
parser.hostname; // => "example.com"
parser.port;     // => "3000"
parser.pathname; // => "/pathname/"
parser.search;   // => "?search=test"
parser.hash;     // => "#hash"
parser.host;     // => "example.com:3000"
     */
     
    $.ajax(
        {
            url: 'https://e.ventures/pos/requestprice.php?sldtld='+tobesent,
            //dataType: 'json',
          //  data:  senddata, 
            beforeSend: function(xhr)
            {               
                xhr.setRequestHeader("Content-Type", "application/json");
//xhr.setRequestHeader('X-user-token',senddata);
          /*
                 var protocols="tbd"; 
             protocols = occurrences (sldtld, "http:");
            if (protocols>0) {    //http
              hostname = sldtld.replace("http://",""); 
            }
             var sslprotocols="tbd";
             sslprotocols = occurrences(sldtld,"https:");
            if (sslprotocols>0)  { //https override 
            
              hostname = sldtld.replace('https://',''); 
                
                
            } 
            
            if ((protocols==0) && (sslprotocols==0)) {
                
                hostname = sldtld;
                
                
            }
            
            var slashout = "tbd"; 
            slashout = occurrences(hostname,"/");
            if (slashout>0) { hostname=hostname.replace('/','');}
            
            console.log ("hostname:"+hostname); 
            
             sldtld=hostname;
                 */

       
            },
            success: function(data, status)
            {
                price=data;
                var fields = price.split(',');
                
  globalprice =  price.substring(0, price.indexOf('\n'));
    globalprice = globalprice.trim();
 price = fields[1];
var domainrequestedpos = fields[0];
                console.log("domain is:"+domainrequestedpos);
                console.log("price is:"+globalprice ) ; 
                 
             /*   <a href='https://e.ventures/goodnews' target='_blank'>Good News! ".$sldtld.": is available! Please click here for details.</a>
                
                var span2 = document.getElementById("spanobject2");
                span2.textContent = tobesent+" is USD:"+price;       
                    var span3 = document.getElementById("spanobject");
                //span3.textContent = hostnamestr;
                span3.textContent = "";             
                //spanprice.textContent = "USD"+price;                
                
                console.log("price:received:"+price); console.log(":status:"+status);
                
                $('#domainprice').val(price); 
                $('#itemname').val(sldtld);
              
               */ 
                
               
            },
            error: function(error)
            {
                console.log("error:data:"+error);   priceavailable="no"     
            }
        });
    
                    
      }     

      
            
                
                
      
function UpdateTemplate () {
     var delimiter = "|";
console.log("Updating Template...."+sldtld);

    
    var domainelement = document.querySelector("#domainname");
    var poselement = document.querySelector("#pos");
    var logo1element = document.querySelector("#logo1");
    var logo2element = document.querySelector("#logo2");
    var titleelement = document.querySelector("#title");
    var promo1element = document.querySelector("#promo1");
    var promo2element = document.querySelector("#promo2");
    var buynowlabelelement = document.querySelector("#buynowlabel");
    var buynowelement = document.querySelector("#buynow");
    var buynowbuttonelement = document.querySelector("#buynowbutton");
    var counterbuttonelement = document.querySelector("#counterbutton");
    var counterelement = document.querySelector("#counter");
    var supportelement = document.querySelector("#support");

    var navbarelement = document.querySelector("#navbar");   
    
   // document.getElementById("buynow").appendChild("<pre><h1>Buy Now<br></h1><h2>Domain:"+sldtld+"</h2><h3>Asking price:ASK</h3></pre>");
    
      globalprice =  price.substring(0, price.indexOf('\n'));
    globalprice = globalprice.trim();
 
    
    
    
   
    var minbid="";
    if (globalprice=="0") {minbid="Not specified";}
  
    if (globalprice=="0") {globalprice="Ask"; }
    
       paypalstring = paypalstring.replace("loadingprice", globalprice);
paypalstring = paypalstring.replace("loadingsldtld",sldtld);
   
 
   
  // $('#itemname').val(sldtld);
  
  
  
    //   $('#domainprice').val(globalprice); 
          //  $('#paypalbutton').toggle();   
 
  // $('#itemname').val(sldtld);
    
    
    
    
 
    buynowbuttonelement.innerHTML = "<pre><h1>Buy Now<br></h1><h2>Domain:"+sldtld+"<br></h2><h3>Asking price:"+globalprice+"</h3><br|></pre>"+paypalstring;
      
    counterbuttonelement.innerHTML = "<pre><h1>Counter Offer<br></h1><h2>Domain:"+sldtld+"<br></h2><h3>Minimum bid:"+minbid+"</h3><br></pre>";
  

      //$('#paypalbutton').toggle();   
    
   // buynowelement.style.color="#062802";
   // buynowelement.style.fontSize="15px";
   // buynowelement.innerHTML = "<pre><h1>Buy Now<br></h1><h2>Domain:"+sldtld+"</h2><h3>Asking price:ASK</h3></pre>";
  //  counterelement.style.color="#000066";
   // counterelement.innerHTML ="<h1>Make an offer<br></h1><br>";
   // navbarelement.innerHTML = sldtld; 
    domainelement.innerHTML = sldtld;
    domainelement.style.backgroundColor="#6c7a89";
    domainelement.style.fontSize="30px";
    domainelement.style.color="white";
     
    titleelement.innerHTML = "<h1>Domain Purchase Checkout</h3>"; 
    titleelement.style.backgroundColor="#6c7a89"; 
    titleelement.style.color="white";
  
    
  
      if (globalprice!="Ask")  {
          
          console.log("price is NOT ask");
      
          poselement.style.fontSize="35px";
          poselement.innerHTML="<b>"+sldtld+" is USD"+globalprice+"</b>";
                
        buynowlabelelement.innerHTML="";
          
      
      
      
      
      
      }
      
      
      
      if (globalprice=="Ask")  {console.log("price is ask");}
  
  
  
  
        // domainimageelement.innerHTML = domainimage;
   /*
    var additionalslot1element = document.querySelector("#additional-slot"); 
    

   
  // domainimageelement.style.backgroundImage =  "url('"+domainimage+"')";
 //  document.body.style.backgroundImage = "url('img_tree.png')";
    domainelement.innerHTML = sldtld;
    additionalslot1element.innerHTML = sldtld; 
    message1element.innerHTML = message1;
    //////// CONFIG .JSON OVERRIDE !!!
    //message2element.innerHTML = message2;
    message2element.innerHTML = sldtld;
    //////////////////////////////////////////
    
     
      poselement.innerHTML = poslink; 
    uppertitleelement.innerHTML = uppertitle; 
    //document.getElementById('domain-media').style.src= "+domainimage+";
    document.getElementById("domain-media").src=domainimage;
    
    
    //   domainimageelement.style.backgroundColor="black"; 
             //   document.getElementById('imageslot').style.backgroundRepeat= "no-repeat"; 
                         //   document.getElementById('imageslot').style.backgroundSize ="100%"; 

    //   document.getElementById('domain-image').style.backgroundSize="auto";
      //         document.getElementById('domain-image').style.height="100%"; 
     //    document.getElementById('domain-image').style.width="100%"; 
    //  document.getElementById('domain-image').style.backgroundRepeat= "no-repeat"; 
    //   document.getElementById('domain-image').style.backgroundPosition = "center"; 
       
       
 /*   
 ''
    background-repeat: no-repeat; 
  width=100%; height=100%; 
  background-position: center ; 
  background-size: auto;
  
      
  

         
    // background-image: url('/ximages/websiteheader1.png');
   //background-repeat:no-repeat;
  // background-size:contain;
  /// height:200px;width:1200px;*/
    
}               
        
        
        
    function CallDotBoss () {
        
        
        
  window.location.href = "https://backengine.dotboss.digital/users/sign_up";
//       openInNewTab('htpps://backengine.dotboss.digital/users/sign_up');  
  // one cant override the user's preference. even if it is possible.      
        
        
        
    }
        
        
        
        
        function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                
                
</script>
</body>
</html>



