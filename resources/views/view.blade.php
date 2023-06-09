<!DOCTYPE HTML>
<html lang="en">
<html>
	<head>
		<meta charset="utf-8" />
  		<link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}"/>
		<title>Nike PH</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}"/>
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css')}}" /></noscript>
	</head>
	<body class="landing is-preload">
			<div id="page-wrapper">
					<header id="header" class="alt">
					</header>
					<section id="banner">
						<div class="inner">
							<h2>Nike</h2>
							<p style="font-weight: bolder; font-size: 30px">Welcome!<br />
							Greatness is not born,<br />
							It is made.</p>
							<ul class="actions special">
								<li><a href="{{ asset('signin/sign-in.php') }}" class="button primary">Shop Now</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Learn More</a>
					</section>
					<section id="one">
					</section>

					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div>
								<video height="400" width="1000" autoplay loop controls muted>
								<source src="images/new.mp4" type="video/mp4"></video></div><div class="content">
								<h2>What is Nike known for?<br /></h2>
								<p>The world's largest athletic apparel company, Nike is best known for its footwear, apparel, and equipment.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
								<h2>What is Nike also known as?<br /></h2>
								<p>Nike, Inc., formerly (1964–78) Blue Ribbon Sports, American sportswear company headquartered in Beaverton, Oregon.
								It was founded in 1964 as Blue Ribbon Sports by Bill Bowerman, a track-and-field coach at the University of Oregon, and his former student Phil Knight.</p>
							</div>
						</section>
					</section>


					<section id="three" class="wrapper style4">
						<div class="inner">
					</section>


					<section id="cta" class="wrapper style4">
						<div class="inner">

						</div>
					</section>


					<footer id="footer">
						<ul class="icons">
							<li><a href="https://www.facebook.com/hexzy1925" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://psu.palawan.edu.ph/" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Hexzy Corp</li><li>Design: <a href="https://github.com/Hexzanity">Hexzy</a></li>
						</ul>
					</footer>

			</div>


			<script src= "{{ asset('assets/js/jquery.min.js')}}"></script>
			<script src= "{{ asset('assets/js/jquery.scrollex.min.js')}}"></script>
			<script src= "{{ asset('assets/js/jquery.scrolly.min.js')}}"></script>
			<script src= "{{ asset('assets/js/browser.min.js')}}"></script>
			<script src= "{{ asset('assets/js/breakpoints.min.js')}}"></script>
			<script src= "{{ asset('assets/js/util.js')}}"></script>
			<script src= "{{ asset('assets/js/main.js')}}"></script>

	</body>
</html>
