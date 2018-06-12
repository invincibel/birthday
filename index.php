<!DOCTYPE html>
<html>
    <head>
        <title>Hello</title>
        <link rel="stylesheet" href="css/balloon.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body onload = "typeWriter();">
   
    <img src="ankit.jpg" id="image" width="300" height="300" align="left" onclick="window.open('ankit.jpg');">
        <div id="maker">
            <button class="btn success" id="btun" onclick="hide();">Wish ankit happy birthday</button>
            <font color="white" size="30" id="name">Ankit Kumar</font>
            <p id="demo"><?php
/* @$html = file_get_contents('https://www.topbirthdayquotes.com/happy-birthday-wishes-for-best-friend-quotes/');// for getting the htmlusing @ on starting to avoid warnings 

 $pokemon_doc= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not
              $pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//p');

	if($pokemon_row->length > 0){
		foreach($pokemon_row as $row){
            if($row->nodeValue=="TopBirthdayQuotes")
                continue;
            if($row->nodeValue=="Contents" || $row->nodeValue=="Happy Birthday to Best female Friend")
                continue;
			echo $row->nodeValue . "<br/>";
		}
	}    
        }
    
*/
?></p>
        </div>
        <div id="second">
            
        </div>
    <div class="container">
        <div class="balloon"></div>
        <div class="balloon"></div>
        <div class="balloon"></div>
        <div class="balloon"></div>
        <div class="balloon"></div>
        <div class="balloon"></div>
        <div class="balloon"></div>
        <div class="balloon"></div>
    </div>
   <!-- <embed src="http://asmaa.site/Eid.mp3" width="180" height="90" loop="false" autostart="false" hidden="true" /> -->
<script>
    function hide(){
       // document.getElementById("maker").style.visibility="hidden";
    }    
</script>
    </body>
</html>