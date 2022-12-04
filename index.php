<!DOCTYPE html>
<html>
<head>
	<title>ARC || ACE REALM CARNIVAL</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<!-- Index Section Start -->
	<?php include('header.php');?>
<!-- Index Section Start -->

<section class="banner" id="home">
		<div class="slider-box">
			
			<div id="slider">
				<img src="img/s1.jpg">
				<img src="img/s2.jpg">
				<img src="img/s3.jpg">
			</div>
		</div>
		<div class="indicators">
			<span id="btn1" class="active"></span>
			<span id="btn2"></span>
			<span id="btn3"></span>
		</div>
	</section>

<!--First Section Start -->
<section class="sec1" id="media">
	<div class="info">
		<div class="col50">
			<h2 class="titleText">What Is Cinema ?</h2><br><br>
			<p class="text">
				Is it the same as a movie or film? Does it include digital video, broadcast content, streaming media? Is it a highbrow term reserved only for European and art house feature films? Or is it a catch-all for any time a series of still images run together to produce the illusion of movement, whether in a multi-plex theater or the 5-inch screen of a smart phone?<br><br>

				Technically, the word itself derives from the ancient Greek, kinema, meaning movement. Historically, it’s a shortened version of the French cinematographe, an invention of two brothers, Auguste and Louis Lumiere, that combined kinema with another Greek root, graphien, meaning to write or record.<br><br>

				The “recording of movement” seems as good a place as any to begin an exploration of the moving image. And cinema seems broad (or vague) enough to capture the essence of the form, whether we use it specifically in reference to that art house film, or to refer to the more commonplace production and consumption of movies, TV, streaming series, videos, interactive gaming, VR, AR or whatever new technology mediates our experience of the moving image. Because ultimately that’s what all of the above have in common: the moving image. Cinema, in that sense, stands at the intersection of art and technology like nothing else.As an art form it would not exist without the technology required to capture the moving image. But the mere ability to record a moving image would be meaningless without the art required to capture our imagination.
			</p>
		</div>
		<div class="col50">
			<div class="mediaimg">
				<img src="img/s7.jpg">
			</div>		
		</div>
	</div>
</section>
<!--First Section End -->

<!-- Second Section Start -->
<section class="sec2">	
	<h2 class="title"><span>All Time Best</span><a href="movie.php">Show All ></a></h2>
		<div class="small-container">
			<div class="col-5">
				<div class="img"><img src="poster/poster1.jpg"></div>
				<div class="content">
					<h4>300</h4>
					<p>In 480 B.C. a state of war exists between Persia, led by King Xerxes (Rodrigo Santoro), and Greece. At the Battle of Thermopylae, Leonidas (Gerard Butler), king of the Greek city state of Sparta.</p>
					<div class="rating"><p>5Star Rating</p></div></div>
				</div>
			<div class="col-5">
				<div class="img"><img src="poster/poster2.jpg"></div>
				<div class="content">
					<h4>Hacked</h4>
					<p>Sameera's boyfriend disappoints her on her birthday and she ends up sleeping with Vivek, her neighbour. However, when she rebuffs his love, Vivek hacks into everything and makes her life miserable.</p></div>
				</div>
			<div class="col-5">
				<div class="img"><img src="poster/poster3.jpg"></div>
				<div class="content">					
					<h4>Black widow</h4>
					<p>At birth the Black Widow (aka Natasha Romanova) is given to the KGB, which grooms her to become its ultimate operative. </p></div>			
				</div>
			<div class="col-5">
				<div class="img"><img src="poster/poster4.jpg"></div>
				<div class="content">
					<h4>Superman:Man of steel</h4>
					<p>With the imminent destruction of Krypton, their home planet, Jor-El (Russell Crowe) and his wife seek to preserve their race by sending their infant son to Earth. </p></div>			
				</div>
			<div class="col-5">
				<div class="img"><img src="poster/poster5.jpg"></div>
				<div class="content">
					<h4>Brave</h4>
					<p>Merida (Kelly Macdonald), the impetuous but courageous daughter of Scottish King Fergus (Billy Connolly) and Queen Elinor (Emma Thompson), is a skilled archer who wants to carve out her own path in life.</p></div>
				</div>
			<div class="col-5">
				<div class="img"><img src="poster/poster6.jpg"></div>
				<div class="content">
					<h4>Rocky</h4>
					<p>Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman. As a bond with her grows, he is drawn into a battle for the survival of her world.</p></div>	
				</div>
		</div>
</section>
<!-- Second Section Ends -->


<!-- Footer Section Start -->
	<?php include('footer.php');?>
<!-- Footer Section Ends -->


		
<script type="text/javascript">
	
	var slider = document.getElementById("slider");
		var btn1 = document.getElementById("btn1");
		var btn2 = document.getElementById("btn2");
		var btn3 = document.getElementById("btn3");

		btn1.onclick = function(){
			slider.style.transform = "translateX(0px)";
			btn1.classList.add("active");
			btn2.classList.remove("active");
			btn3.classList.remove("active");
		
		}
		btn2.onclick = function(){
			slider.style.transform = "translateX(-100%)";
			btn2.classList.add("active");
			btn1.classList.remove("active");
			btn3.classList.remove("active");
			
		}
		btn3.onclick = function(){
			slider.style.transform = "translateX(-200%)";
			btn3.classList.add("active");
			btn1.classList.remove("active");
			btn2.classList.remove("active");
			
		}

		function toggleMenu(){
			const navigation = document.querySelector('.navigation');
			navigation.classList.toggle('active');
		}
</script>

</body>
</html>