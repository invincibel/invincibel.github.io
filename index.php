<!DOCTYPE html>
<html>
    <head>
        <title>Hey,There</title>
        <link rel="icon" href="path1500.png" sizes="32*32">
          
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lobster'>
        <style>
            body{
    margin: 0px;
    padding: 0px;
    background-color:black;
    overflow-x: hidden;
}

.icons-social i {
	font-size: 3em;
	padding: 10px;
}

header {
	text-shadow: 0 2px 0 rgba(0, 0, 0, 0.22);
	text-align: center;
}

html {
	font-size: 12px;
	font-family: 'Merriweather', serif;
}

h1 {
	font-size: 3em;
}

h2 {
	font-size: 2em;
}

h3 {
	font-size: 1.5em;
}

@media (min-width: 576px) {
	html {
		font-size: 14px;
	}
}

@media (min-width: 768px) {
	html {
		font-size: 16px;
	}
}

@media (min-width: 992px) {
	html {
		font-size: 18px;
	}
}

@media (min-width: 1200px) {
	html {
		font-size: 20px;
	}
}

h1, h2 {
	font-weight: 400;
}

h1 .heavier {
	font-weight: 700;
}

h3, html {
	font-weight: 300;
}




header {
	display: flex;
	flex-direction: column;
	min-height: 10vh;
	align-items: center;
	justify-content: center;

}

header > h1 {
	margin-bottom: -5px;
}



header {
	
	
	color: white;
}

.icons-social a {
	color: white;
}
            #bar{
                margin-top: 5px;
                width: 100%;
                height: 40px;
                background-color: darkgrey;
                margin-left: -10px;
                padding: 0px;
                border: none;
                display: inline-flex;
            }
            #right{
                margin-left: 93%;
                padding-top: 3px;
                position: absolute;
                width: 20px;
            }
            #hom{
                width: 50px;
                background-color: darkgrey;
            }
            #hom:hover{
                cursor: pointer;
                
            }
            #right:hover{
                cursor: pointer;
            }
           
            #wrong{
               margin-left: 93%;
                padding-top: 3px;
                cursor: pointer;
               position: absolute; 
                visibility: hidden;
            }
            #pro{
                border-radius: 50%;
            }
            #profile{
              left: 0%;
                margin-top: 3%;
                padding: 0px;
                width: 100%;
                display: inline-flex;
                background-color:white;
                height: 300px;
                position: absolute;
                visibility: hidden;
                z-index: 1;
            }
            
            #copy{
                display: inline-flex;
                right: 5%;
                bottom: 5%;
                position: absolute;
            }
            #abome{
                left: 30%;
                top: 40%;
                color: darkgrey;
                display: inline-flex;
                position: absolute;
            }
            .vl {
    border-left: 1px solid darkgrey;
                margin-left: 30px;
    height: 100px;
}
            #ans{
                margin-left: 30px;
            }
            #skil{
                color:grey;
                margin-top: 50px;
                margin-left: 400px;
            }
            #mainphoto{
                color: white;
                width: 100%;
            }
            #mystart{
                display: inline-flex;
            }
            .okay{
                height: 350px;
                width: 33%;
            }
            #videos{
                width: 100%;
                color: white;
            }
            #onevid{
                display: inline-flex;
            }
            #firv{
                margin-left: -10px;
            }
            #butv{
                width: 200px;
                height: 100px;
                background-color: bisque;
            }
            #insta{
                width: 50%;
                margin-left: 20%;
            }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.min.css">
    </head>
    <body>
   
        
            
        <div id="inner">
            <header>
                <h3><font size="15">Hritik "INVINCIBLE" Aggarwal</font></h3>
		<h3>Front end Developer, Security Enthusiast,Back End Developer , Explorer</h3>
                
		<div class="icons-social">
			<a target="_blank" href="https://github.com/invincibel"><i class="fa fa-github"></i></a>
			<a target="_blank" href="https://www.facebook.com/hritik.aggarwal.50"><i class="fa fa-facebook"></i></a>
			<a target="_blank" href="https://www.instagram.com/hritik.aggarwal31/"><i class="fa fa-instagram"></i></a>
			<a target="_blank" href="https://twitter.com/hritikaggarwa11"><i class="fa fa-twitter"></i></a>
			<a target="_blank" href="https://api.whatsapp.com/send?phone=919149045778&text=hi"><i class="fa fa-whatsapp"></i></a>
			<a target="_blank" href=""><i class="fa fa-snapchat"></i></a>
			
		</div>
               
	</header>
            </div>
            <div id="bar">
                <i class="fa fa-home" style="font-size:38px;color:white" id="hom"></i>
               
                    
                    <i class="fa fa-info" id="right" style="font-size:30px;color:white" onclick="makeVisible();"></i>
                    <i class="fa fa-server" id="wrong" style="font-size:36px;color:white" onclick="makeInvin();"></i>
            </div>
        <div id="profile">
            <img src="me.jpg" id="pro" height="300" width="200">
            <h2 style="color:grey">Hritik Aggarwal</h2>
            <div id="copy">
              <i class="fa fa-copyright" style="font-size:24px"></i>
                <p color="white">hritik aggarwal</p>
            </div>
            <div id="abome">
                <div id="que">Education<br>category<br>gender<br>college<br>current adreess</div><div class="vl"></div>
                <div id="ans">graduation ongoing<br>general<br>male<br>jiit<br>A-10 sector 62 noida,delhi</div>
            </div>
            <div id="skil">
                <h3>skills</h3>html,css,javascript,jquery,php,c programming.
            </div>
        </div>
        <div id="mainphoto">
            <h2 align="center">Photos</h2>
            <h3>My photos</h3>
            <div id="mystart">
            <img src="me.jpg" class="okay">
                <img src="1.jpg" class="okay">
                <img src="2.jpg" class="okay">
            </div>
            <h3>Photos with college friends</h3>
            <div id="secstart">
                <img src="1c.jpg" class="okay">
                <img src="2c.jpg" class="okay">
                <img src="3c.jpg" class="okay">
                <img src="4c.jpg" class="okay">
                <img src="5c.jpg" class="okay">
                <img src="7c.jpeg" class="okay">
            </div>
            <div id="videos">
                <h2 align="center">My some Projects</h2><br>
                <h3>1. Facemash</h3><br>
                <div id="onevid">
                <img id="firv" height="315" width="560" src="1.gif">
                   
                    <p>this is the voting site in which you can vote the person and it will tell you who will win you at last.</p><br><br>
                    <a href="1.txt" download><button id="butv">GET THE CODES HERE</button></a>
                </div>
                </div>
        </div>
        <div id="insta"><h2 style="color:white">Instafeed</h2>
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BgD4qIsgUvg/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BgD4qIsgUvg/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Hritik Aggarwal (@hritik.aggarwal31)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-03-08T11:33:40+00:00">Mar 8, 2018 at 3:33am PST</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
            <div class="fb-like" data-href="http://hritikagg.rf.gd" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        </div>
        <hr>
        <i class="fa fa-copyright" style="font-size:50px"></i>copyright reserved to invincible
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
    var vid = document.getElementById("firv");
  
    vid.load();
          
            function makeVisible()
            {
                var main=document.getElementById("right");
                var main2=document.getElementById("wrong");
                var main3=document.getElementById("profile");
                var make=document.getElementById("mainphoto");
                make.style.filter="blur(3px)";
                main.style.visibility="hidden";
                main2.style.visibility="visible";
                main3.style.visibility="visible";
            }
            function makeInvin()
            {
                var main=document.getElementById("right");
                var main2=document.getElementById("wrong");
                var main3=document.getElementById("profile");
                 var make=document.getElementById("mainphoto");
                make.style.filter="blur(0px)"
                main.style.visibility="visible";
                main2.style.visibility="hidden";
                main3.style.visibility="hidden";
            }
</script>
        
    </body>
</html>