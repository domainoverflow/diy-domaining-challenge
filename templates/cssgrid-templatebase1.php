<?php

  
?>

<html>


<header>
</header>

<style>

#grid { display:grid    ;
        grid-gap: 2rem; 
        justify-content: center;
        align-items: center;
        background-color: #white;

grid-template-columns: 
    /* 1  2 */  400px 1fr;
    
grid-template-rows: 
                 auto
                 auto
                 250px
                 250px
                 auto;}
                 
                 
#title {grid-column:1 / span 2;grid-row:1;background-color:pink;}
#domain-name {grid-column:1 ; grid-row:2;background-color:yellow;}
#message1 {grid-column:1 ; grid-row:3;background-color:blue;}
#message2 {grid-column:1 ; grid-row:4;background-color:blue;}

#domain-image {grid-column: 2 ; grid-row: 2 / span 3; color:white; background-color:red; }

#checkoutpage-link {grid-column:1 / span 2; grid-row:5;background-color:purple;}


#grid > div {color:white; text-align:center;font-size:2vw;  font-size: 2vw;
  border: 1px solid #171717; width:100%; height:100% }
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
    <div id="title">Title</div>
    <div id="domain-name">SLD.TLD</div>
    <div id="domain-image">domain-image</div>
    <div id="message1">message1</div>
    <div id="message2">message2</div>
    <div id="checkoutpage-link">POS Link</div>
</div>







</body>












</html>
