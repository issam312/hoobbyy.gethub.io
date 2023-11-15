<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ur iptv</title>
    <style>


  @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,600&family=Inclusive+Sans&family=Rubik:ital,wght@1,500&display=swap');





        * {
            padding: 0;
            margin: 0;

            font-family: 'Fira Sans', sans-serif;
font-family: 'Inclusive Sans', sans-serif;
font-family: 'Rubik', sans-serif;


        }

        body {
            margin: 0; /* Remove default margin to ensure full page display */
            overflow-x:hidden;
        }

        #header_image {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: -1;
            filter: blur(3px);
        }

        nav {
            position: relative; /* Relative positioning for navigation */
            z-index: 1; /* Higher z-index to appear on top of the background image */
            text-align: center; /* Center the navigation items horizontally */
            background-color: rgba(0, 0, 0, 0.7); /* Add a semi-transparent background color to the navigation */
            padding: 20px 0;
            

        }

        nav ul {
            list-style: none; /* Remove default list styles */
        }

        nav ul li {
            display: inline; /* Display navigation items horizontally */
            margin-right: 90px; /* Add margin between navigation items */
        }

nav ul li a {
text-decoration: none;
color: white; /* Set text color for navigation links */
font-weight: bold;
font-size:30px;
padding:9px;
border-radius:20px;
letter-spacing:2px;
       
}

nav ul li a:hover{
background-color:rgb(255, 137, 41);
border-bottom:9px solid black;
}

#free{
background-color:rgb(255, 137, 41);
border-bottom:9px solid black;
} 
#logo-div{
    /* background-color:red; */
    display: flex; /* Use flexbox */
    justify-content: center; /* Center horizontally */
    align-items: center; 
}

#logo{
    width: 320px;
    height: 250px;
    position: absolute;
    top:60px;
    z-index: 12;
    animation: rotateLogo 4s linear infinite;
}

@keyframes rotateLogo {
    0%, 100% {
        transform: rotate(0deg); /* Start and end with no rotation */
    }
    30% {
        transform: rotate(30deg); /* Rotate 30 degrees at 30% */
    }
    70% {
        transform: rotate(-30deg); /* Rotate -30 degrees at 70% */
    }
}

#font{
 width: 70%;
 height: 500px;
  text-align:center;
 position: relative;
 left:200px;
 top:150px;
 border-radius:20px;
 background: rgba( 255, 161, 81, 0.5 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
}
#png{
    height: 240px;
    width: 230px;
    top: -120px;
    position: relative;
    left:600px;
    transform:Rotate(20deg);

}
#png1{
    position: relative;
    top:280px;
    left:-510px;
    height: 200px;
    width:250px ;
}
#h1-1{
    font-size:55px;
    left:50px;
    position: relative;
    top:-120px;
    width: 900px;
    color:white;
    -webkit-text-stroke: 1px black;
}
#bg2{
    position: relative;
    width: 100%;
    height: 780px;
    top:240px;
    border-top:9px solid black;
    border-radius:40px;
    filter: blur(2px);
    z-index: ;

}
#things{
    height: 50px;
    height: 70px;
    position: relative;
    top:-105px;
    left:70px;
    background-color:rgba(255, 87, 41, 0.719);;
}
#messi{
    z-index: 222;
    height: 520px;
    width: 690px;
    position: relative;
    top:-320px;
    left:-50px;
}
#h1-2{
position: relative;
color:white;
top:-1020px;
left:400px;
font-size:70px;
width:70%;
-webkit-text-stroke: 1px black;

}
#parag{
position: relative;
color:white;
top:-920px;
left:650px;
padding:20px;
font-size:30px;
width: 600px;
-webkit-text-stroke: 1px black;  
margin-top:10px;
background: rgba( 255, 255, 255, 0 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
#ball {
    position: relative;
    width: 100px;
    height: 100px;
    top:-1220px;
    left:1200px;
    animation: bounce 2s ease infinite;
    transform-origin: center bottom;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-100px); /* Adjust the bounce height as needed */
    }
}
#bg3{
    position: relative;
    width: 100%;
    height: 1280px;
    top:-930px;
    z-index: -1;
    margin:0    ;

}
#png3{
    z-index: 222;
    height: 420px;
    width: 590px;
    position: relative;
    top:-2220px;
    left:810px;
    margin:0;
}
#titl1{
    margin:0;
    position: relative;
    top:-2590px;
    left:120px;
    color:white;
    font-weight: bold;
    font-size:110px;
    width: 700px;
    -webkit-text-stroke: 2px black;

}





/* ========================================     style       ========================================================================== */
@media (min-width: 900px) and (max-width: 1236px) {
    nav ul li a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        font-size: 23px;
        padding: 9px;
        border-radius: 20px;
        letter-spacing: 2px;
    }

nav ul li {

margin-right: 90px;
margin:25px 27px;
}
#h1-1{
    font-size:45px;
    left:50px;
    position: relative;
    top:-120px;
    width: 600px;
    color:white;
    -webkit-text-stroke: 1.5px black;
}
#png{
    height: 240px;
    width: 230px;
    top: -120px;
    position: relative;
    left:450px;
    transform:Rotate(20deg);

}
#logo{
    width: 290px;
    height: 230px;
    position: absolute;
    top:60px;
    z-index: 12;
    left:420px;
    animation: rotateLogo 4s linear infinite;
}
#things{

    height: 70px;
    position: relative;
    top:-65px;
    left:30px;
    background-color:rgba(255, 87, 41, 0.719);;
}
#h1-2{
position: relative;
color:white;
top:-940px;
left:33px;
font-size:50px;
width: 90%;
-webkit-text-stroke: 1px black;
}
#parag{
position: relative;
color:white;
top:-860px;
left:470px;
padding:20px;
font-size:30px;
width: 40%;
-webkit-text-stroke: 1px black;  
margin-top:10px;
background: rgba( 255, 255, 255, 0 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
#messi{
    z-index: 222;
    height: 450px;
    width: 620px;
    position: relative;
    top:-320px;
    left:-70px;
    
}
#ball {
    position: relative;
    width: 50px;
    height: 50px;
    top:-1260px;
    left:790px;
    animation: bounce 2s ease infinite;
    transform-origin: center bottom;
}
}


@media (max-width: 900px) {



    nav ul li a {
text-decoration: none;
color: white;
font-weight: bold;
font-size:20px;
padding:5px;
border-radius:10px;
margin:0;  
background-color:rgb(255, 137, 41);
border-bottom:6px solid black;
position: relative;
left:-120px;
}
nav ul li {
display: block; 
margin-right: 90px;
margin:25px 0;
}
#logo{
    width: 220px;
    height: 170px;
    position: relative;
    top:-200px;
    left:80px;
    z-index: 12;
    animation: rotateLogo 4s linear infinite;
}
#font{
 width: 100%;
 height: 500px;
  text-align:center;
 position: relative;
 left:0px;
 top:-170px;
 border-radius:20px;
 background: rgba( 255, 161, 81, 0.5 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
}
#h1-1{
    font-size:37px;
    position: absolute;
    top:100px;
    height: 30px;
    width: 400px;
    color:white;
    -webkit-text-stroke: 1.5px black;
}
#png{
    height: 100px;
    width: 90px;
    top: -70px;
    position: relative;
    left:240px;
    z-index:999;
    transform:Rotate(20deg);

}
#png1{
    position: relative;
    top:340px;
    left:-190px;
    height: 150px;
    width:210px ;
}
#things{
    height: 50px;
    width: 90%;
   background-color:rgba(255, 87, 41, 0.719);
    position: relative;
    top:355px;
    left:1px;
    border:1px solid black;
}
#bg2{
    position: relative;
    width: 100%;
    height: 780px;
    top:-110px;
    border-top:9px solid black;
    border-radius:40px;
    filter: blur(2px);
    z-index: -1;

}
#h1-2{
position: relative;
color:white;
top:-1380px;
left:33px;
font-size:40px;
width: 90%;
-webkit-text-stroke: 1px black;
}
#parag{
position: relative;
color:white;
top:-1290px;
left:10px;
padding:20px;
font-size:30px;
width: 90%;
-webkit-text-stroke: 1px black;  
margin-top:10px;
background: rgba( 255, 255, 255, 0 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
#ball {
    position: relative;
    width: 50px;
    height: 50px;
    top:-1660px;
    left:400px;
    animation: bounce 2s ease infinite;
    transform-origin: center bottom;
}
#messi{
    z-index: 222;
    height: 520px;
    width: 690px;
    position: relative;
    top:-320px;
    left:-85px;
}
#titl1{
    margin:0;
    position: relative;
    top:-2440px;
    left:20px;
    color:white;
    font-weight: bold;
    font-size:70px;
    width: 90%;
    -webkit-text-stroke: 2px black;

}
}


    </style>
</head>
<body>

<img src="bg.jpeg" alt="image" id="header_image">

<nav>
    <ul>
        <li><a id="free" href="#">Free Try</a></li>
        <li><a href="#">Subscription</a></li>
        <li><a href="#">How To Use IPTV</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</nav>

<div id="logo-div">
    <img id="logo" src="logo1.png" alt="" srcset="">
</div>

<div id="font">
<img id="png" src="test1.png" alt="" srcset="">
<img id="png1" src="png.png" alt="" srcset="">
<h1 id="h1-1">Unleash a Universe of Channels with Our IPTV Subscription.<br>1 Of The Best IPTV Subscription Service Provider</h1>
<img id="things" src="things.png" alt="" srcset="">
</div>

<div id="section2">
<img id="bg2" src="bg2.jpg" alt="" srcset="">
<img id="messi" src="messi.png" alt="" srcset="">
<h1 id="h1-2">Watch Live Sports and TV Shows Anytime, Anywhere with Our IPTV Subscription.</h1>
<p id="parag">UR IPTV offers a more flexible video experience compared to traditional cable TV. Enjoy a wide selection of national and international channels in one convenient service, eliminating the need for multiple subscriptions.</p>
<img id="ball" src="ball.png" alt="" srcset="">
</div>

<div>
    <img id="bg3"src="bg3.jpeg" alt="" srcset="">
    <img id="png3" src="png1.png" alt="" srcset="">
    <h1 id="titl1">why should you choose us !? </h1>
</div>

</body>
</html>
