<?php
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine 1 Web</title>
    <style>
     /*
    
           /* h1{
                color: rgb(74, 2, 87);
                text-decoration-line: overline;
                text-transform: none;
                text-decoration: underline;
            }
            h2{
                color: rgb(255, 255, 255);
            }
            h3{

            }*/
            @import url('https://fonts.googleapis.com/css?family=Roboto:700');
            body {
      font-family:'Roboto';
      background-color: hsl(0, 0%, 0%);  
    }

 p,h1 {
  text-shadow: 0 0 7px rgba(92, 2, 63, 0.3), 0 0 3px rgba(255, 3, 133, 0.3);
 text-align: center;
 font-size: 300%;
 font-style: italic, normal;
 font-weight: bold;
 color: rgb(255, 255, 255);
                text-decoration-line: overline;
                text-transform: none;
                text-decoration: underline;
               transform: rotateX('angle');

 font-family: 'Courier New', Courier, monospace;
} 
.container 
{
    text-align: center;
  color: #e5e5e5;
  font-size: 2.26rem;
  text-transform: uppercase;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.animation {
  height:70px;
  overflow:hidden;
  margin-left: 1rem;
}

.animation > div > div {
  padding: 0.25rem 0.75rem;
  height:2.81rem;
  margin-bottom: 2.81rem;
  display:inline-block;
}

.animation div:first-child {
  animation: text-animation 10s infinite;
}

.first div {
  background-color:#3705ff;
}
.second div {
  background-color:#0daf23;
}
.third div {
  background-color:#ff00bb;
}

@keyframes text-animation {
  0% {margin-top: 0;}
  10% {margin-top: 0;}
  20% {margin-top: -5.62rem;}
  30% {margin-top: -5.62rem;}
  40% {margin-top: -11.24rem;}
  60% {margin-top: -11.24rem;}
  70% {margin-top: -5.62rem;}
  80% {margin-top: -5.62rem;}
  90% {margin-top: 0;}
  100% {margin-top: 0;}
}

    
        </style>  
</head>
<body>
    <p><h1>welcome 👋 <br> to my project </h1></p>
    <main class="container">
    
        
        <section class="animation">
          <div class="first"><div>  Mini projet cloud Vagrant Machine web  </div></div>
          <div class="second"><div>ISET SFAX  Mastr DSIR </div></div>
          <div class="third"><div>Réalisée par : Gazala Rmida  </div></div>
        </section>
      </main>
      
    // Votre code PHP ici
    echo "<p>welcome 👋 <br> to my project.</p>";
    ?>
</body>
</html>