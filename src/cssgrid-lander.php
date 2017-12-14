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

#grid { display:grid    ;
        grid-gap: 0.5rem; 
        justify-content: center;
        align-items: center;
        background-color: #white;
          

grid-template-columns: 
    /* 1  2 */  420px 1fr;
    
grid-template-rows: 
                 auto
                 auto
                 270px
                 270px
                 auto;}
                 
                 
#title {grid-column:1 / span 2;grid-row:1;background-color:purple;}
#domain-name {grid-column:1 ; grid-row:2;background-color:magenta;}
#message1 {grid-column:1 ; grid-row:3;background-color:blue;}
#checkoutpage-link {grid-column:1 ; grid-row:4;background-color:orange;     display: flex;
  justify-content: center;
  align-items: center;}



#message2 {grid-column:1 / span 2; grid-row:5;background-color:blue;}


#grid > div {color:white; text-align:center;font-size:2vw;  font-size: 2vw;
  border: 1px solid #171717; width:100%; height:100% ;display: flex;
  justify-content: center;
  align-items: center;}
  
  
  #domain-image {grid-column: 2 ; grid-row: 2 / span 3; color:white; background-color:white;
  /*background-image:url('andservices.png');
  background-repeat: no-repeat; 
  width=100%; height=100%; 
  background-position: center ; 
  background-size: auto; */
    }
  
  #imageslot {grid-column:2 ; grid-row:2 / span 3;background-color:white;
  
background-image: url('forsale5.jpg');
  background-repeat: no-repeat; 
  max-height: 100%;
    max-width: 100%;
  
  background-size: contain; 
  background-position: center; 
  object-fit: cover;
  


  
 
 

}
  
  
/*background-image: linear-gradient(130deg, #6C52D9 0%, #1EAAFC 85%, #3EDFD7 100%);} */

/*
#grid > div {
  font-size: 2vw;
  padding: .2em;
  background: #e93418;
  text-align: center;
}*/


</style>

<body>



<div id ="grid">
    <div id="title">.title</div>
    <div id="domain-name">.domain-name</div>
    <div id="domain-image"><img id="imageslot"    /> </div>
    <!-- <img id="imageslot" src = "andservices.png" alt="image"  />  !-->
    <div id="message1">.message1</div>
    <div id="checkoutpage-link">.POS-Link</div>
    <div id="message2">.message2</div>
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
    // load json 
   

$( document ).ready(function() {
    console.log( "ready!" );
      GetDomains() ; 
    console.log(domainarray); 
    
    
    
        
    
    // json format    
    
    // .domain-name
    
    // message1
    
    // message2
    
    //pos-link 
    
    //domain-name
    
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
     document.getElementById('imageslot').style.backgroundImage = "url('"+domainimage+"')";
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


</html>