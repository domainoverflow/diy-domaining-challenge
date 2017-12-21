<?php
  
?>

<html>


<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-63552696-16"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-63552696-16');
</script>



  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
 
  <script type="text/javascript" src="https://e.ventures/content/more-balloons/moveobj.js"></script>  
 
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
      <link rel="stylesheet" href="https://e.ventures/lib/sweetalert2.min.css">
    <script src="https://e.ventures/lib/sweetalert2.min.js"></script>
 
 
</head>

    
<style>
    
    
    /*
// CSS Grid Domain for sale Lander 
// CSS Grid Template 1
// written by sergio@abrahao.ca
// knowledge from GridsByExample.com 
// by CSS Grid's author: Rachel Andrew
// 12-Dec-2017 
// All Rights Reserved DomainOverflow.com 
// License: MIT
*/





  

.grid {
  display:grid; align-items:stretch;
  grid-template-columns: [col1start] 1.2fr [col2start] 
    1.1fr [col3start] 0.3fr [col3end];
  grid-template-rows: 
    [row1start] auto
    [row2start] auto
    [row3start] 1.5fr
    [row4start] auto [row4end];  
    grid-gap:1px;
  grid-template-areas:
  "domainNameArea titleArea AdditionalSlotArea"
  "domainMediaArea extendedContentArea navigationlArea"
  "mainContentArea mainContentArea AdditionalSlotArea2"
  "message1Area posLinkArea message2Area";

}

.domainName, .title, .additionalSlot,
.message1, .message2, .navigation , .mainContent,
.extendedContent, .posLink , .additionalSlot2
{color:white;font-size:22px;
//border-radius: 5px;
padding:1px;
//border: 1px solid #171717;
 //  box-shadow: 1px 1px #888888; 

}



.domainMedia {grid-area:domainMediaArea;background-color:red;
//   border: 1px solid #ccc;
//  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  width: 100%; max-width:1.5fr; 
  height:auto; max-height:110%;
display: flex;
  align-items: center;
  justify-content: center;
  }

.message1 {grid-area: message1Area;background-color:#6c7a89;display: flex;
  align-items: center;color:white;
  justify-content: center;}
.message2 {grid-area: message2Area;background-color:#6c7a89;display: flex;
  align-items: center;color:white;
  justify-content: center;}
.posLink {grid-area: posLinkArea;display: flex;
  align-items: center;color:white;background-color:#6c7a89;
  justify-content: center;}

.mainContent {grid-area: mainContentArea; background-color:blue;display: flex;
align-items: center;color:white;
  justify-content: center;
   min-height:400px;

}
.domainName {grid-area: domainNameArea;background-color:#6c7a89;display: flex;
  align-items: center;color:white;
  justify-content: center;}
.title {grid-area: titleArea;background-color:#6c7a89;color:white;display: flex;
  align-items: center;
  justify-content: center;}
.additionalSlot {grid-area: AdditionalSlotArea;background-color:#6c7a89;color:white;display: flex;
  align-items: center;
  justify-content: center;}
  
  .AdditionalSlot2 {grid-area: AdditionalSlotArea2; background-color:#6c7a89;color:black;display:flex;
  align-items: center; justify-content:center;
  }
  
  
  
   .extendedContent{grid-area: extendedContentArea;background-color:blue;display: flex;
  align-items: center;
  justify-content: center;
   min-height:200px;
   }
  
 /* .extendedContent{grid-column:2; grid-row:2 / span 2;background-color:blue; }   */
    /* the remarked above would be useful if you wish to meld areas */ 
    
    
    
.navigation {grid-area: navigationlArea; background-color:#6c7a89;display: flex;
  align-items: start;
  justify-content: start;
   
  width: 100%; max-width:0.7fr; 
  height:auto; max-height:100%;
    // border: 1px solid #ccc;
  //box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);

  
}

    nav{

  margin: 6% 2%;
  clear: both;
  width: 94%; 
  color:#d2d7d3;
  background: #95a5a6;
  //box-shadow:2px 2px 2px;
  font-family: 'Shadows Into Light', cursive;
  font-size:21px;opacity:1;
}

 
  

      
    
.mainContent{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}    
    
    
    
    
    
    
    
    
    
    
    
.menuFontColour {
    
    color:white;
    
    
}
    
   .menuFontColour:hover {
       
    
    border-radius:20%; 
      opacity:0.8; 
    color:#FF512F;
   
    background:white;
       
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
   
   
    
    
   
   
      
  
  iframe{
border:0;
} 
    
    
</style>    

    
    
    
    
    
<body>
    
  <div id="grid" class="grid">

  <div id="domain-name" class="domainName">.domainName</div>
<!--  <img id="domain-media" class="domainMedia" src="https://e.ventures/partV/forsale5.jpg">
  
  -!-->
  <img id="domain-media" class="domainMedia" src="" alt="image not loaded";>
  
  <div id="title" class="title">.title</div>
  <div id="maincontent" class="mainContent">
  
<iframe width="100%" height="99%" src="https://e.ventures/games/balloons/"   scrolling="no" onload="resizeIframe(this)" >
</iframe>
  
  
    
   </div>
  <div id="extended-content" class="extendedContent">
 <!-- 
   <iframe width="100%" height="99%" src="https://www.youtube-nocookie.com/embed/zJ7hUvU-d2Q?rel=0&amp;controls=0&amp;showinfo=0&amp;start=22&amp;autoplay=1"  gesture="media" allow="encrypted-media" ></iframe>
  !-->
   
  <iframe width="100%" height="99%" src="https://www.youtube.com/embed/2MqGrF6JaOM?rel=0&amp;controls=0&amp;showinfo=0;start=2&amp;autoplay=1" frameborder="0" gesture="media" allow="encrypted-media"></iframe>
  
  
  </div>
  <div id="navigational" class="navigation">
  
  
 <!-- <iframe width="100%" height="100%" src="  http://e.ventures/pub/menu/" ></iframe> -!-->
  
  <nav>
  <ul >
    <li><a class="menuFontColour" href="https://dotboss.digital" target="_blank">Dotboss.Digital</a></li><br>
    <li><a class="menuFontColour" href="https://domainoverflow.com" target="_blank">DomainOverflow.com</a></li><br>
      <li><a class="menuFontColour" target="_blank" href="https://e.ventures/pos"><b>Buy this domain</b></a></li><br>
    
    
    <li><a href="" class="menuFontColour" id="poslinkadditional" target="_blank" style="background-color:#95a5a6;">Contact</a></li>
  </ul>
</nav>
  
  
  </div>
  <div id="message1" class="message1">.message1</div>
  <div id="message2" class="message2">.message2</div>
  <div id="checkoutpage-link" id="redlabel" class="posLink" style="background:#6c7a89;color:white;">.posLink</div>
  <div id="additional-slot" class="additionalSlot">
    
  
  
  </div>
   <div id="additional-slot2" class="additionalSlot2">
   
   
       <form class="myForm" id ="myform" action="https://e.ventures/pos/universalcontactform.php" method="post">

  <label for="customer_name">Name </label>
  <input type="text" name="customer_name" id="customer_name" required>

  <label for="email_address">Email </label>
  <input type="email" name="email_address" id="email_address">

  <label for="comments">Message</label>
  <textarea name="comments" required id="comments" maxlength="500">
  
  
  </textarea>

  <button id="myformbutton">Send</button>

</form>
   
   
   
   </div>
  
  
  
  
</div>
  
<DIV ID="flyimage1" STYLE="position:absolute; left: -500px; width:47; height:68;">
<A HREF="https://e.ventures/pos" target="_blank"><IMG SRC="b1.gif"  BORDER=0></a>
</DIV>

<DIV ID="flyimage2" STYLE="position:absolute; left: -500px; width:47; height:68;">
<A HREF="https://e.ventures/pos" target="_blank"><IMG SRC="b2.gif" BORDER=0></a>
</DIV>

<DIV ID="flyimage3" STYLE="position:absolute; left: -500px; width:47; height:68;">
<A HREF="https://e.ventures/pos" target="_blank"><IMG SRC="b3.gif" BORDER=0></a>
</DIV>

    </body>

   <script>
    
    
    
    
    
    
   var domainarray=[];

function Snippets() {
 /*   
// myElement = document.querySelector("#domain-name");
    
  // document.getElementById('id').style.width = value;  
    
  var myElements = document.querySelectorAll(".bar");

for (var i = 0; i < myElements.length; i++) {
    myElements[i].style.opacity = 0;
}  
    
 

 document.getElementById("p2").style.color="blue";
var element = document.createElement('select');
element.style.width = "100px";

 


    
   */
   
   
  
   
    
    
} 
    
   
 
 
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





  
  
  
  
  
  
  
  
  
  
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
       
       
   var domaininventory = 'https://e.ventures/public_html/partV/diy-domaining-challenge/src/domainsdb.json';
  var sldtld="tbd";  ;
  var  domainname="sld.tld"; 
  var message1=""; 
  var message2="";
  var poslink = "https://contato.link"; 
  var domainimage ="tbd"; 
  var uppertitle = "tbd"; 
       
       

       
 $( document ).ready(function() {
    console.log( "ready!" );
      GetDomains() ; 
      var myform = $('#myform'); 
      var myformbutton = $('#myformbutton'); 
                        
            
          
      myform.on('submit',function (e) {
                
                
                e.preventDefault(); 
                                
                
         
              
              
               $.ajax({
      url: 'https://e.ventures/pos/universalcontactform.php', // form action url
      type: 'POST', // form submit method get/post
      dataType: 'html', // request type html/json/xml
      data: myform.serialize(), // serialize form data 
      beforeSend: function() {
        
        myformbutton.html('Sending....'); // change submit button text
      },
      success: function(data) {
        console.log("response received");
        
        myform.trigger('reset'); // reset form
        myformbutton.html('Message sent!'); // reset submit button text
        
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
              
                   
                  
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
  });
       

       
       
  function GetDomains () {
    
   

    
    var http = new XMLHttpRequest();
var url = "router.php";
var params="request=domain-inventory";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
http.send(params);
 
 

   
http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        
        domainarray = JSON.parse(http.responseText); 
        console.log(domainarray);
        if (domainarray["domain"]=="notfound"){console.log("domain not found. please check json file");}
        
        
        console.log(domainarray["domain"]); 
                 sldtld = domainarray["domain"]; 
     console.log(sldtld);
         
 
   
        
        
             domainname = sldtld;
       message1=domainarray["message1"]; 
    message2=domainarray["message2"]; 
    poslink = domainarray["pos-link"]; 
    domainimage = domainarray["domain-image"];
   uppertitle = domainarray["title"]; 
   
 var delimiter = "|";
    
    console.log("vars:"+message1+delimiter+message2+delimiter+poslink+
    delimiter+domainname+delimiter+domainimage + delimiter+uppertitle);
        
       //; if (domainarray[0]["domain"]="notfound") 
        UpdateTemplate() ; 
        
                
      
        console.log(http.responseText);
       
    }
}

    
    
    
}

function UpdateTemplate () {
     var delimiter = "|";

    
    var domainelement = document.querySelector("#domain-name");
    var poselement = document.querySelector("#checkoutpage-link");
    var domainimageelement = document.querySelector("#domain-image");
    var uppertitleelement = document.querySelector("#title");
    var domainelement = document.querySelector("#domain-name");
    var message1element = document.querySelector("#message1"); 
    var message2element = document.querySelector("#message2");
        // domainimageelement.innerHTML = domainimage;
   
    var additionalslot1element = document.querySelector("#additional-slot"); 
    var redlabelelement = document.querySelector("#redlabel");
    
   
  // domainimageelement.style.backgroundImage =  "url('"+domainimage+"')";
 //  document.body.style.backgroundImage = "url('img_tree.png')";
    domainelement.innerHTML = sldtld;
    additionalslot1element.innerHTML = sldtld; 
    message1element.innerHTML = message1;
    //////// CONFIG .JSON OVERRIDE !!!
    //message2element.innerHTML = message2;
    message2element.innerHTML = sldtld;
    //////////////////////////////////////////
    
        poselement.style.backgroundColor="#6c7a89"; 
        poselement.style.color="white";      
      poselement.innerHTML = "<a href='https://contato.link' target='_blank' style='color:#d2d7d3;'>Created with dotboss.digital</a>"; 
      uppertitleelement.style.backgroundColor="#6c7a89";
      uppertitleelement.style.color="white";
    uppertitleelement.innerHTML = uppertitle; 
    //document.getElementById('domain-media').style.src= "+domainimage+";
    document.getElementById("domain-media").src=domainimage;
    
    //redlabelelement.style.backgroundColor="#6c7a89";
    //   domainimageelement.style.backgroundColor="black"; 
             //   document.getElementById('imageslot').style.backgroundRepeat= "no-repeat"; 
                         //   document.getElementById('imageslot').style.backgroundSize ="100%"; 

    //   document.getElementById('domain-image').style.backgroundSize="auto";
      //         document.getElementById('domain-image').style.height="100%"; 
     //    document.getElementById('domain-image').style.width="100%"; 
    //  document.getElementById('domain-image').style.backgroundRepeat= "no-repeat"; 
    //   document.getElementById('domain-image').style.backgroundPosition = "center"; 
       
       
 /*   
 
    background-repeat: no-repeat; 
  width=100%; height=100%; 
  background-position: center ; 
  background-size: auto;
  
      
  

         
    // background-image: url('/ximages/websiteheader1.png');
   //background-repeat:no-repeat;
  // background-size:contain;
  /// height:200px;width:1200px;*/
    
}     
       
       
       
   /////////////////
   
     function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
   

       
       

       
       
    
 
    
  
var flyimage1, flyimage2, flyimage3

function pagestart(){
//Step 2: Using the same variable names as 1), add or delete more of the below lines (60=width, height=80 of image):
 flyimage1=new Chip("flyimage1",47,68);
 flyimage2=new Chip("flyimage2",47,68);
 flyimage3=new Chip("flyimage3",47,68);


//Step 3: Using the same variable names as 1), add or delete more of the below lines:
movechip("flyimage1");
movechip("flyimage2");
movechip("flyimage3");

}

if (window.addEventListener)
window.addEventListener("load", pagestart, false)
else if (window.attachEvent)
window.attachEvent("onload", pagestart)
else if (document.getElementById)
window.onload=pagestart

</script>
   
       
    
    
<footer></footer>
    

    </html>
    
    
    

