<?php
  
?>
<?php
  
?>

<html>


<head>



  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
 
 <script type="text/javascript" src="https://e.ventures/content/more-balloons/moveobj.js"></script>  
 
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">

</head>

    
<style>
    
    
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
display:grid; align-items:stretch; 

grid-template-columns: [col1start] 1fr [col2start] 1fr [col3start] 1fr [column4start] 1fr [column4end];
grid-template-rows: [row1start] auto [row2start] auto [row3start] auto [row4start] auto [row5start] auto [row5end];
grid-gap:2px;

grid-template-areas:
"titleArea titleArea titleArea logo1Area"
"buynowArea invoiceArea invoiceArea posArea"
"counterArea domainnameArea priceArea posArea"
"supportArea promo1Area slot2Area promo2Area"
"logo2Area navbarArea navbarArea slot1Area";}



.box {color:white;font-size:22px;
border-radius: 5px;padding:2px;
border: 1px solid #171717;
   box-shadow: 1px 1px #888888; 
   display:flex;
   align-items:center; 
   justify-content:center; // look at .grid
   
   }
   
   
   
.domainname {grid-area:domainnameArea;background-color:blue;}
.title {grid-area:titleArea;background-color:#41f4eb;}
.logo1 {grid-area:logo1Area;background-color:magenta;}
.logo2 {grid-area:logo2Area;background-color:magenta;}
.slot1 {grid-area:slot1Area;background-color:orange;}
.slot2 {grid-area:slot2Area;background-color:orange;}
.support {grid-area:supportArea;background-color:#42f477;}
.invoice {grid-area:invoiceArea;background-color:yellow;color:black;}
.buynow {grid-area:buynowArea;background-color:blue;}
.counter {grid-area:counterArea;background-color:#42f477;}
.navbar {grid-area:navbarArea;background-color:#E93418;min-height:80px;}
.promo1 {grid-area:promo1Area;background-color:#FF512F;}
.promo2 {grid-area:promo2Area;background-color:#FF512F;}
.pos {grid-area:posArea;background-color:blue;min-height:300px;}
.price {grid-area:priceArea;background-color:blue;}

 </style>


<div id="grid" class="grid">


<div id="domainname" class="box domainName">.domainName</div>
<div id="title" class="box title"   >.title (domainname)  </div>
<img id="logo1" alt=".logo1" class="logo1">
<img id="logo2" src="" alt=".logo2" class="pic logo2">
<div id="buynow" class="box buyNow">.buyNow link (ex:paypal/escrow/custom/marketplace pos) driven by .pos</div>
<div id="invoice" class="box invoice">.invoice</div>
<div id="counter" class="box counter">.counter</div>
<div id="support" class="box support">.support</div>
<div id="slot1" class="box slot1">.slot1 (contact form)</div>
<div id="slot2" class="box slot2">.slot2</div>
<div id="navbar" class="box navBar">.navBar</div>
<div id="promo1" class="box promo1 (Discounts/Affiliates)">.promo1</div>
<div id="promo2" class="box promo2">.promo2(Phrase, Statements ex:Buy today and get 5 years renewal included)</div>
<div id="pos" class="box pos">.pos (choices, drives .buyNow)</div>
<div id="price" class="box price">.price (domains.json)</div>




</div>



















<body>






</body>



<script>


</script>



</html>



