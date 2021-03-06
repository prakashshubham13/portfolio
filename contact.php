<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	

<style>
		*{
			margin: 0;
			padding: 0;

		}
		.container{
			position: relative;
			padding: 0 100px;
			min-height: 100vh;
			overflow: hidden;
		}
		.container:before{
			content: '';
			position: absolute;
			top: 0;
			right: 0;
			width: 350px;
			height: 100%;
			background: #333;
			z-index: -2;
		}
		.container:after{
			content: 'heLLO';
			position: absolute;
			bottom: 0;
			left: 0;
		font-size: 18vw;
		font-weight: 700;
			color: #000;
			z-index: -2;
			opacity: 0.04;
		}
		.header{
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 30px 0;
		}
		.header .logo{
			text-transform: uppercase;
			font-weight: 700;
			color: #333;
			font-size: 30px;
			text-decoration: none;
		}
		.logo span{
			
			color:#78ff00;
		}
		.header ul{
			position: relative;
			display: flex;
		}
		.header ul li{
			list-style: none;
			margin: 0 20px;
		}
		.header ul li a{
			position: relative;
			text-decoration: none;
			font-size: 18px;
			text-transform: uppercase;
			color: #333;
			padding: 4px 5px;
		}
		.header ul li:nth-child(3) a{
			color: white;
	
		}
		.header ul li:nth-child(4) a{
			color: white;
		}
		.header ul li a:before{
			content: '';
			position: absolute;
			top:0;
			left:0;
			width: 0;
			height: 100%;
			background-color: #78ff00;
			z-index: -1;
			transition: 0.5s ease-in-out;
		}
		.header ul li a:hover:before{
width: 40px;

		}
		.header ul li a.activee:before{
width: 40px;

		}
		.content{
display: flex;
justify-content: space-between;
align-items: center;
		}
		.bannerimg{
			position: relative;
			width:440px;
			height: 440px;
			
	border-bottom: 3px solid rgb(181, 255, 62);
	border-left: 3px solid rgb(181, 255, 62);
	
padding: 9px;
transition: 0.5s;	}
.bannerimg img{
	width: 100%;
	height: 100%;
	
}

		.bannertext{
			position: relative;
			max-width: 500px;
			margin-right: 50px;
		
		}
		.content h1{
			color: #78ff00;
			position: absolute;
			transform: translate(-50px,-70px);
		}
		.content h1::before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			border-left: 1px solid black;
			border-bottom: 1px solid black;
			width:80%;
			height: 100%;
		}






		#Paris h1{
			color: #78ff00;
			position: relative;
			
		}
		#Paris h1::before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			border-left: 1px solid black;
			border-bottom: 1px solid black;
			width:25%;
			height: 100%;
        
		}



		.content h2{
			font-size: 30px;
			line-height: 40px;

		}
		.content p{
	
			line-height: 20px;
		}
.content a{
	position: relative;
	text-decoration: none;
	font-size: 15px;
	color: #000;
	line-height: 60px;
	padding: 10px;
}
		.content a:before{
			content: '';
			position: absolute;
			top:0;
			left:0;
			width: 60%;
			height: 100%;
			background-color: #78ff00;
		
			z-index: -1;
			transition: 0.5s ease-in-out;
		}

		.content a:hover:before{
			content: '';
			position: absolute;
			top:0;
			left:0;
			width: 100%;
			height: 100%;
			background-color: #78ff00;
		
			z-index: -1;
			transition: 0.5s ease-in-out;

		}

		
.element1
{
	opacity: 0.4;
	position: absolute;
	bottom: -150px;
	right: 40%;
	width: 250px;
	height: 250px;
	
	border: 40px solid  #78ff00;
}
.element2
{
	opacity: 0.3;
	position: absolute;
	left: -10px;
	top: 40%;
	width: 50px;
	height: 50px;
	border: 2px solid rgb(0, 0, 0);
}

.open
{
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	pointer-events: none;
	z-index: 10000;
}
.open .layer
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	transform-origin: top;
	animation: open 1s ease-in-out forwards;
}
.open .layer:nth-child(1)
{
	background: #ffffff;
	z-index: 2;
}
.open .layer:nth-child(2)
{
	background: #000000;
	animation-delay: 1s;
	z-index: 1;
}
@keyframes open
{
	0%
	{
		transform: scaleY(1);
	}
	100%
	{
		transform: scaleX(0);
	}
}
.social{
	position: fixed;
bottom: 5%;
margin-top: 50px;
	display: flex;
	
	
}
.social i{
	font-size: 30px;
	margin: 10px;
	color: #444443;
	position: relative;
	

}
.social i:hover{
	transform: translate(0px,-5px);
	color: #78ff00;
}














.menu{
	display:none;
}


@media(max-width:992px)
{
	.container{
		
		padding: 20px 50px ;
	}
	.container:before{
		display: none;
	}
	.header{
		padding: 0;
	}
	.bannertext h2{
		font-size: 20px;
	}
	.content{
		margin-top: 20px;
		flex-direction: column-reverse;
	}
	.bannertext h1{
		z-index: 5;
		color: #000;
		transform: translate(20px,-60px);
		background-color: white;
	}
	.content .bannerimg{
		width: 100%;
		height: 40%;
		margin: 20px 0;
	}
	.bannertext{
		max-width: 100%;
	}
	.social{
		position: fixed;
		display: flex;
	
		bottom: 0%;
		right: 0%;
		float: right;
		margin-top: 0px;
		z-index: 111;
	}
	.myDIV{
		display: none;


	}

.header ul{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100vh;
	background: #fff;
	display: block;
	
	display: none;
	z-index: 10000;
	padding: 100px 0;
	}
.header ul li{
	padding: 20px;
	text-align: center;

}
.header ul li a{
	color: #333  !important;
	font-size: 36px;
}
.header ul li a:hover:before{
width: 100%;

		}
		.header ul li a.active:before{
width: 100%;

		}
	


.menu{
	display: initial;
	
	position: fixed;
	right: 50px;
	cursor: pointer;padding: 8px;
	z-index: 111;
	background: transparent;
	background-repeat: no-repeat;
	width: 30px;
	height: 30px;
	font-size: 40px;
	background-position: 8px;
	
}


.fade{
    position: relative;
    margin-top: 70px;
    display: flex;
    flex-direction: column;
}



.mySlides {display: none}
img {vertical-align: auto;}

/* Slideshow container */
.slideshow-container {
  max-width: 300px;
  max-height: 300px;
  position: relative;
  
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: rgb(140, 255, 87);
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: rgba(138, 136, 136, 0.8);
}
.prev{
	color: #000;

}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(80, 80, 80, 0.8);
}

/* Caption text */
.text {
  color: #ffffff;
  font-size: 35px;
  padding: 8px 12px;
  position: absolute;
  
  font-weight: 900;
  background-color: #000000;
  transform: translate(0px,0px);
  text-align: center;
  box-shadow: 0px 10px 10px black;
}




#Paris h1{
			color: #202020;
			position: relative;
            font-size: 25px;
			
		}
		#Paris h1::before{
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			border-left: 1px solid black;
			border-bottom: 1px solid black;
			width:0%;
			height: 0%;
        
		}









}









/* Center website */
.main {
  width: 100opx;
  margin: auto;
}

.main h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 40.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.conten {
    position: relative;
  background-color: rgb(75, 73, 73);
  box-shadow: 15px 15px 15px black;
  padding-bottom: 5px;
  color: #78ff00;
  text-align: center;
  transform: translate(-2px,7px);
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
.conten:hover{
    
    filter: grayscale(0);
    transform: translate(0px,0px);
box-shadow: 0px 0px 0px black;
    transition: 1s;
		
            
}












form{
	position:relative;
	display:block;
text-align:center;
align-items:center;
font-size:17px;
padding:2%;

}
form:before{
	content:'';
	position:absolute;
	bottom:0;
	right:0;
	height:100%;
	width:100%;
	background:black;
	z-index:-1;
	clip-path: polygon(100% 0, 0% 100%, 100% 100%);
	opacity:1;
	
	
}
form:after{
	content:'';
	position:absolute;
	top:0;
	left:0;
	height:100%;
	width:100%;
	background:#78ff00;z-index:-1;
	clip-path: polygon(100% 0, 0% 100%, 0 0);
}
input{
	display:block;
	text-align:center;
align-items:center;
margin:auto;
border:1px solid  #78ff00;
font-size:15px;
padding:5px;
border-radius:10px 0px 10px 0px;
}
label{
	display:block;
	text-align:center;
align-items:center;
}
textarea{
	display:block;
	text-align:center;
align-items:center;
margin:auto;
resize:none;
border:1px solid  #78ff00;font-size:15px;padding:5px;
border-radius:10px 0px 10px 0px;
}
button{
	padding:3px;
	display:block;
	margin:auto;
	background:transparent;
	color:#000;
	outline:none;
	border:2px solid #78ff00;
	background:#78ff00;
	z-index:3;
}

input:focus{
	outline:none; 
}
textarea:focus{
	outline:none; 
}

	</style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<script src="https://kit.fontawesome.com/8893b709f5.js" crossorigin="anonymous"></script>
		
</head>
<body>
	
    <script src="https://kit.fontawesome.com/8893b709f5.js" crossorigin="anonymous"></script>
	<div class="open">
		<div class="layer"></div>
		<div class="layer"></div>
	</div>
	<div class="menu menuu" onclick="my()">
		<i class="fas fa-bars" style="color:#78ff00;" ></i>
	</div>
	<div class="container">
		
		<div class="header">
			<a href="#" class="logo">my<span>  portfolio</span></a>


		
			<ul id="myDIV">
				
				<li ><a href="index.html"   class="tablinks"  id="defaultOpen">ABOUT</a></li>
				<li><a href="skill.html"  class="tablinks" onclick="openCity(event, 'Paris')">SKILLS</a></li>
				<li><a href="project.html"  class="tablinks" onclick="openCity(event, 'Tokyo')">PROJECTS</a></li>
			<li><a href="#"  class="activee" class="tablinks" onclick="openCity(event, 'Japan')">CONTACT</a></li>
			<div class="menu" onclick="my()">
				<i class="fas fa-times" style="color:#78ff00;" ></i>
			</div>	
		</ul>
			
			
		</div>
		
		<br>
        

	
	<div id="Pars" class="tabcontent">
	  <h1>CONTACT ME</h1>

    
      

<br> 


<form action="" method="POST">
	<label for="">NAME</label>
	<input type="text" name="name">
	<label for="">PHONE NUMBER</label>
	<input type="tel" name="tel">
	<label for="">MESSAGE</label>
	<textarea name="" name="msg" cols="30" rows="10"></textarea>
	<br>
	<button value="submit">SUBMIT</button>
</form>





	  
	</div>


<br><br>
<br><br>
	<div class="social">
		<a href="https://www.facebook.com/shubham.prakash.7503" class="facebook"><i class="fab fa-facebook"></i></a>
		<a href="https://www.instagram.com/xm_shubham/"><i class="fab fa-instagram"></i></a>
		<a href="https://wa.me/08658034359" class="twitter"><i class="fab fa-whatsapp"></i></a>
		<a href="https://github.com/prakashshubham13" class="twitter"><i class="fab fa-github"></i></a>
	 </div>



</div>


	
<script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }
    
    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
    }
    
    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
      }
      element.className = arr1.join(" ");
    }
    
    
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
    </script>
    <script>
        function my() {
            var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
    </script>
</body>
</html>


<?php
    if(isset($_POST['submit']))
    {
$a =$_POST['name'];
$b =$_POST['tel'];
$c =$name['mes'];
$mssg = $b.$c;
mail("1806346@kiit.ac.in",$a,$mssg);
	}
?>