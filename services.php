<?php
include_once "functions/general.func.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Cache-Control" content="no-cache , no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<title>Website - Services</title>
	<link rel="stylesheet" href="./css/includes.css" />
	<link rel="stylesheet" href="./css/output.css" />
	<link rel="stylesheet" href="./css/services.css" />
	<script src="https://kit.fontawesome.com/f6e3b67683.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php include_once "includes/header.inc.php" ?>
	<?php include_once "includes/menu.inc.php" ?>
	<main id="services">
		<section id="hero" class="w-full h-auto bg-[#F1F3F3] pb-[60px] md:pb-[20px] md:h-[400px]">
			<article class="hero-container md:flex justify-between items-center md:max-w-[1124px] md:mx-auto">
				<div class="md:order-1 md:w-[30%] w-[100%] h-[100%] md:h-[80%]">
					<img src="./images/service_hero.jpg" alt="" class="h-[100%] bg-green-200 md:w-[100%]" />
				</div>

				<div class="hero_text px-[25px] md:w-[70%] self-end">
					<h1 class="text-5xl lg:text-5xl text-black text-center md:text-left mt-[40px] font-martel font-black">
						Our Services
					</h1>

					<p class="text-[21px] w-[95%] font-black font-ubuntu mt-[30px] md:mt-[45px] md:text-[21px] font-light">
						We'll custom tailor a complete holistic marketing service to
						your needs - from understanding your current positioning to
						developing a top notch content strategy, getting your story
						published on top tier sites, and boosting it in relevant
						platforms.
					</p>
				</div>
			</article>
		</section>

		<article id="consult" class="bg-[#E3E3E3] p-[25px] md:flex md:justify-center md:items-center w-full h-auto">
			<div class="wrapper">
				<h3 class="font-[19px] font-ubuntu font-light text-[21px] w-[80%] mx-auto text-center mb-[20px] md:w-auto md:mb-0 md:mr-[20px]">
					Find out what strategy we'll prescribe for your business
				</h3>
			</div>
			<div class="wrapper">
				<a href="#consult_form" class="w-[200px] bg-[#d3bdf2] text-black py-[12px] text-center px-[20px] mx-auto block text-[14px] text-light uppercase text-ubuntu font-bold">Consult for free</a>
			</div>
		</article>

		<section id="services" class="pt-[50px] w-full h-auto pb-[0] px-[20px] md:flex justify-between items-center md:max-w-[1124px] md:mx-auto md:h-[1400px] ">
			<article id="keys" class="hidden md:block  h-auto w-full md:w-[30%] ">
				<ul>
					<li class="md:w-full h-[40px] pr-[20px] mb-[30px] flex items-center justify-end"><a class='font-ubuntu text-[16px] hover:text-[18px]' href="#seo">SEO</a></li>
					<li class="md:w-full h-[40px] pr-[20px] mb-[30px] flex items-center justify-end"><a class='font-ubuntu text-[16px] hover:text-[18px]' href="#bpr">Blockchain Public Relations</a></li>
					<li class="md:w-full h-[40px] pr-[20px] mb-[30px] flex items-center justify-end"><a class='font-ubuntu text-[16px] hover:text-[18px]' href="#bcm">Blockchain Content Marketing</a></li>
					<li class="md:w-full h-[40px] pr-[20px] mb-[30px] flex items-center justify-end"><a class='font-ubuntu text-[16px] hover:text-[18px]' href="#orms">Online Reputation Management Services</a></li>
					<li class="md:w-full h-[40px] pr-[20px] mb-[30px] flex items-center justify-end"><a class='font-ubuntu text-[16px] hover:text-[18px]' href="#tl">Thought Leadership</a></li>
					<li class="md:w-full h-[40px] pr-[20px] mb-[30px] flex items-center justify-end"><a class='font-ubuntu text-[16px] hover:text-[18px]' href="#cd"> Content Distribution</a></li>
					<li class="md:w-full h-[40px] pr-[20px] mb-[30px] flex items-center justify-end"><a class='font-ubuntu text-[16px] hover:text-[18px] ' href="#ms">Messaging Strategy</a></li>
				</ul>
			</article>

			<article id="content" class="md:w-[65%]">
				<div class="service w-full h-auto mb-[50px] md:mb-[150px]" id="seo">
					<div class="heading text-[24px] font-martel font-black w-[80%] mb-[4px] pl-[8px]">
						Search Engine Optimization
					</div>
					<div class="content w-full h-auto border-l-[2px] border-[#E3E3E3] pl-[10px] text-light text-[16px]">
						<p class="font-ubuntu font-[400]">
							We’ll perform strategic keyword research, optimize your
							content, and strengthen your organic online footprint to
							generate inbound leads on auto-pilot. We use a combination
							of link building and off-page SEO to help you rank higher
							on all major search engines and ensure qualified leads are
							easily finding your business, reducing your ongoing
							advertising costs.
						</p>
					</div>
				</div>

				<div class="service w-full h-auto mb-[50px] md:mb-[150px]" id="bpr">
					<div class="heading text-[24px] font-martel font-black mb-[4px]">
						Blockchain Public Relations
					</div>
					<div class="content w-full h-auto border-l-[2px] border-[#E3E3E3] pl-[10px]">
						<p class="font-ubuntu font-[400]">
							What differentiates us from typical PR agencies, is that
							we never over-promise and under-deliver. Our blockchain PR
							strategies & tactics are built on personal relationships
							with some of the world’s leading editors, writers, and
							content producers. Allowing us to secure feature coverage
							in both top-tier publications and some of the most
							respected channels on YouTube.
						</p>
					</div>
				</div>

				<div class="service w-full h-auto mb-[50px] md:mb-[150px]" id="bcm">
					<div class="heading text-[24px] font-martel font-black mb-[4px]">
						Blockchain Content Marketing
					</div>
					<div class="content w-full h-auto border-l-[2px] border-[#E3E3E3] pl-[10px] text-light text-[16px]">
						<p class="font-ubuntu font-[400]">
							Our robust network of relationships with top-tier media
							outlets, influential bloggers, and website owners, is
							leveraged to boost your online presence. We don’t rely on
							breaking news to drive traffic and can obtain press even
							during industry downtime. When your company has exciting
							news or a compelling storyline, we’ll create a custom
							blockchain marketing strategy to get you real press
							coverage.
						</p>
					</div>
				</div>

				<div class="service w-full h-auto mb-[50px] md:mb-[150px]" id="orms">
					<div class="heading text-[24px] font-martel font-black mb-[4px]">
						Online Reputation Management Services
					</div>
					<div class="content w-full h-auto border-l-[2px] border-[#E3E3E3] pl-[10px] font-ubuntu">
						<p class="font-ubuntu font-[400]">
							Blockchain communities can be relentless—with our ORM
							services, rest assured that we’re authentically protecting
							your company’s image from any negative online feedback.
							We’ll audit current digital results and optimize
							accordingly. Our goal is to boost your positive footprint
							and we'll work tirelessly to ensure the conversation
							around your company is engaging and exciting.
						</p>
					</div>
				</div>

				<div class="service w-full h-auto mb-[50px] md:mb-[150px]" id="tl">
					<div class="heading text-[24px] font-martel font-black mb-[4px]">
						Thought Leadership
					</div>
					<div class="content w-full h-auto border-l-[2px] border-[#E3E3E3] pl-[10px] text-ubuntu">
						<p class="font-ubuntu font-[400]">
							We'll work with your c-level executives and turn them into
							thought leaders and content influencers. This means we'll
							ghostwrite great content on their behalf or refine the
							content they write. Then, outreach to editors and use our
							network of exclusive connections to post these articles
							under their names. We'll shoot for top-tier crypto and
							respected mainstream publications to feature them as
							contributors or a columnist.
						</p>
					</div>
				</div>

				<div class="service w-full h-auto mb-[50px] md:mb-[150px]" id="cd">
					<div class="heading text-[24px] font-martel font-black mb-[4px]">
						Content Distribution
					</div>
					<div class="content w-full h-auto border-l-[2px] border-[#E3E3E3] pl-[10px] text-ubuntu text-light text-[16px]">
						<p class="font-ubuntu font-[400]">
							We'll keep blasting our tech, crypto, finance, and
							business media pieces for weeks to hype everything as much
							as possible and get a lot of reputation for the project
							and excellent traction for our post. We'll secure
							one-on-one interviews and project reviews to expose
							everyone from the crypto community to your project. We use
							a combination of software, power users, and our vast
							network of Reddit and YouTube top influencers to create
							massive discussions and hype to get VIRAL DISCUSSIONS
						</p>
					</div>
				</div>

				<div class="service w-full h-auto mb-[50px] md:mb-[150px]" id="ms">
					<div class="heading text-[24px] font-martel font-black mb-[4px]">
						Messaging Strategy
					</div>
					<div class="content w-full h-auto border-l-[2px] border-[#E3E3E3] pl-[10px] text-ubuntu">
						<p class="font-ubuntu font-[400]">
							We'll take a deep dive into your solution and assemble a
							detailed brief on what angles we believe should be pushed
							to which media, and what's our positioning strategy.
						</p>
					</div>
				</div>
			</article>
		</section>

		<?php include "includes/contact.inc.php" ?>
	</main>

	<footer class="bg-black text-[14px] w-full h-[50px] flex justify-center items-center">
		<p class="text font-ubuntu text-white">MarketAcross 2022</p>
		<i class="fa-brands fa-facebook-f ml-[13px] text-white"></i>
		<i class="fa-brands fa-linkedin-in ml-[13px] text-white"></i>
		<i class="fa-brands fa-instagram ml-[13px] text-white"></i>
		<i class="fa-brands fa-twitter ml-[13px] text-white"></i>
	</footer>
	<script src="./js/jquery.min.js"></script>
	<script src="./js/app.js" defer type="module"></script>
</body>

</html>