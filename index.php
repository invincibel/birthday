<!DOCTYPE html>
<html>
    <head>
        <title>Hello</title>
        <link rel="stylesheet" href="css/balloon.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body onload = "typeWriter();">
   
    <img src="ankit.jpg" id="image" width="300" height="300" align="left">
        <div id="maker">
            <font color="white" size="30" id="name">Ankit Kumar</font>
            <p id="demo"></p>
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
var i = 0;
var txt = 'It’s your day! Go, Fly, swim, life beyond the expectations, make unconventional happen, wish you a very happy birthday.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>
    </body>
</html>