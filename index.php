<!doctype html>
<html>
	<head>
		<?php include("inc_head.php");?>
		<title>FEVA | Home</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	</head>

	<body>
		<?php include("inc_header.php");?>
		<main>
			<section id="banner" style="background-image: url(images/banner1.jpg);">
				<h1>Delighting feva fans</h1>
			</section>
			<section id="news">
				<div class="container">
					<div class="item">
						<h1>Lesson1</h1>
						<img src="images/1.jpg">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
					</div>
					<div class="item">
						<h1>Lesson2</h1>
						<img src="images/2.jpg">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
					</div>
					<div class="item">
						<h1>Lesson3</h1>
						<img src="images/3.jpg">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
					</div>
					<div class="item">
						<h1>Lesson4</h1>
						<img src="images/4.jpg">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
					</div>
					<div class="item">
						<h1>Lesson5</h1>
						<img src="images/5.jpg">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
					</div>
					<div class="item">
						<h1>Lesson6</h1>
						<img src="images/6.jpg">
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
					</div>
				</div>
			</section>
			<section id="faq">
				<div class="container">
					<h1>FAQs</h1>
					<ul>
						<li>
							<div class="q">What is Lorem Ipsum?</div>
							<div class="a">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
						</li>
						<li>
							<div class="q">Why do we use it?</div>
							<div class="a">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</div>
						</li>
						<li>
							<div class="q">Where does it come from?</div>
							<div class="a">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</div>
						</li>
						<li>
							<div class="q">Where can I get some?</div>
							<div class="a">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
						</li>
					</ul>
				</div>
			</section>
			<section id="gallery">
				<div class="container">
					<div class="slider">
						<div><img src="images/b1.jpg"></div>
						<div><img src="images/b2.jpg"></div>
						<div><img src="images/b3.jpg"></div>
					</div>
				</div>
			</section>
		</main>
		
		<?php include("inc_footer.php");?>
		
		<script>
			$(document).ready(function(){
				$('.slider').bxSlider({mode:"vertical",speed:200,auto:true});
				
				$("#faq .a").hide();
				
				$("#faq .q").on("click",function(){
					$(this).siblings().slideToggle();
					$(this).parent().siblings().children(".a").slideUp();
					$(this).parent().toggleClass("open").siblings().removeClass("open");
				});
								
				$("#banner").on("click",function(){
					alert("yeah!");
				});
			});
		</script>
	</body>
</html>




















