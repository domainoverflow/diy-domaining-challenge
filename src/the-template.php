<?php
  
?>

<html>


<header>

  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>


</header>

    
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
  grid-template-columns: [col1start] 400px [col2start] 
    1fr [col3start] 200px [col3end];
  grid-template-rows: 
    [row1start] 55px
    [row2start] 280px
    [row3start] 300px
    [row4start] 80px [row4end];  
    grid-gap:2px;
  grid-template-areas:
  "domainNameArea titleArea AdditionalSlotArea"
  "domainMediaArea extendedContentArea navigationlArea"
  "mainContentArea mainContentArea navigationlArea"
  "message1Area posLinkArea message2Area";

}

.domainName, .title, .additionalSlot,
.message1, .message2, .navigation , .mainContent,
.extendedContent, .posLink 
{color:white;font-size:150%;
border-radius: 5px;padding:2px;
border: 1px solid #171717;
   box-shadow: 1px 1px #888888; 
}



.domainMedia {grid-area:domainMediaArea;background-color:red;
   border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
  max-width: 100%;

  }

.message1 {grid-area: message1Area;background-color:#e93418;}
.message2 {grid-area: message2Area;background-color:#e93418;}
.posLink {grid-area: posLinkArea;background-color:green;}

.mainContent {grid-area: mainContentArea; background-color:blue;}
.domainName {grid-area: domainNameArea;background-color:orange;}
.title {grid-area: titleArea;background-color:magenta;}
.additionalSlot {grid-area: AdditionalSlotArea;background-color:white;color:black;}
   .extendedContent{grid-area: extendedContentArea;background-color:blue; }
  
 /* .extendedContent{grid-column:2; grid-row:2 / span 2;background-color:blue; }   */
    /* the remarked above would be useful if you wish to meld areas */ 
    
    
    
.navigation {grid-area: navigationlArea; background-color:black;}

    
    
</style>    

    
    
    
    
    
<body>
    
  <div id="grid" class="grid">

  <div id="domain-name" class="domainName">.domainName</div>
  <img id="domain-media" class="domainMedia" src="https://e.ventures/partV/forsale5.jpg">
  <div id="title" class="title">.title</div>
  <div id="maincontent" class="mainContent">.Main Content <br>Article/
    Game/Ads/Portal/Iframe/Widget/Applets/Forms</div>
  <div id="extended-content" class="extendedContent">.extendedContent</div>
  <div id="navigational" class="navigation">.navigation</div>
  <div id="message1" class="message1">.message1</div>
  <div id="message2" class="message2">.message2</div>
  <div id="checkoutpage-link" class="posLink">.posLink</div>
  <div id="additional-slot" class="additionalSlot">.additionalSlot</div>
  
  
  
  
  
</div>
    
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
    console.log(domainarray); 
          
       
       
  });
       

       
       
  function GetDomains () {
    


    
    var http = new XMLHttpRequest();
var url = "router.php";
var params="request=domain-inventory";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

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
        
                
      
        //console.log(http.responseText);
       
    }
}
http.send(params);
   
    
    
    
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
   
   

   
  // domainimageelement.style.backgroundImage =  "url('"+domainimage+"')";
 //  document.body.style.backgroundImage = "url('img_tree.png')";
    domainelement.innerHTML = sldtld;
    message1element.innerHTML = message1;
    message2element.innerHTML = message2; 
      poselement.innerHTML = poslink; 
    uppertitleelement.innerHTML = uppertitle; 
   //  document.getElementById('imageslot').style.backgroundImage = "url('"+domainimage+"')";
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
       
       
       
       
       
       
       
       
       
       
       
       
       
    
</script> 
    
    
    
<footer></footer>
    

    </html>
    
    
    

