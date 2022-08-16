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
	<title>Website - Blog</title>
	<link rel="stylesheet" href="./css/includes.css" />
	<link rel="stylesheet" href="./css/output.css" />
	<script src="https://kit.fontawesome.com/f6e3b67683.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php include_once "includes/header.inc.php" ?>
	<?php include_once "includes/menu.inc.php" ?>
	<main id="blog">
		<section id="hero" class="w-full h-auto md:pb-[20px] md:h-auto">
			<article class="hero-container md:flex justify-between items-center">
				<div class="hero_text md:w-[100%] mx-auto">
					<h1 class="text-4xl text-black flex justify-center items-center w-full bg-[#D2C3E6] font-ubuntu font-black h-[80px]">
						MarketAcross's Blog
					</h1>
				</div>
			</article>

			<section id="blogs" class="px-[25px] pt-[40px]">
				<div class="current w-full md:flex md:max-w-[1124px] md:mx-auto justify-between items-center">
					<div class="blog_image w-full order-2 h-[400px] md:w-[40%]">
						<img src="./images/group.jpg" alt="" class="w-full h-full" />
					</div>
					<div class="blog_content order-1 md:w-[55%]">
						<div class="info text-[16px] text-[#151E3E] font-black md:text-[14px]">
							August 8, 2022 by Itai Elizur
						</div>
						<h1 class="title mt-[20px] mb-[40px]">
							<a href="" class="text-[24px] font-ubuntu font-black md:text-[46px]">Blockchain Marketing Strategy: The Ultimate Guide</a>
						</h1>

						<div class="desc">
							<p class="text-[#151E3E] text-[18px]">
								Learn about structuring your blockchain marketing
								strategy, straight from the experts. You’re a startup
								founder looking to make a splash with your original
								idea. Or maybe you’re a marketing expert from a more
								traditional background, and suddenly you need to
								navigate the bizarre crypto world of apes, degens and
								“wen token”. Or maybe you’re just…
							</p>
						</div>
					</div>
				</div>

				<section id="available_blogs" class="mt-[40px] w-full h-auto md:grid grid-cols-2 gap-[30px] md:max-w-[1124px] md:mx-auto">
					<article class="blog p-[10px] mb-[40px]">
						<div class="blog_heading flex justify-between items-center mb-[40px]">
							<div class="heading w-[67%]">
								<h3>
									<a href="" class="text-[20px] font-black">A Wonderful Time at the 2022 Paris Blockchain
										Week Summit</a>
								</h3>
								<div class="author font-georgia text-[16px] text-bold">
									By MarketAcross
								</div>
							</div>
							<div class="image w-[30%]">
								<img src="./images/people.png" alt="" class="w-full h-full" />
							</div>
						</div>
						<div class="blog_description">
							Over 3,000 attendees and 250 speakers attended Paris
							Blockchain Week Summit this year. It was a fantastic event
							filled with passionate speakers and knowledgeable experts
							across several areas of the blockchain industry. The
							summit was wonderful, filled with exciting conversations
							and an international community turnout. We thank everyone
							who came…
						</div>
					</article>

					<article class="blog p-[10px] mb-[40px]">
						<div class="blog_heading flex justify-between items-center mb-[40px]">
							<div class="heading w-[67%]">
								<h3>
									<a href="" class="text-[20px] font-black">Why Your Crypto Brand Identity Matters from
										Day One</a>
								</h3>
								<div class="author font-georgia text-[16px] text-bold">
									By Yonah Hochhauser
								</div>
							</div>
							<div class="image w-[30%]">
								<img src="./images/people.png" alt="" class="w-full h-full" />
							</div>
						</div>
						<div class="blog_description">
							First impressions when people encounter your crypto brand
							are everything. Your brand dictates whether you’re a sleek
							and knowledgeable company or one that’s approachable and
							down to earth. That’s why it’s so important to nail these
							messages, and values, down from the beginning. First
							impressions can radically change the success…
						</div>
					</article>

					<article class="blog p-[10px] mb-[40px]">
						<div class="blog_heading flex justify-between items-center mb-[40px]">
							<div class="heading w-[67%]">
								<h3>
									<a href="" class="text-[20px] font-black">People Are Rushing To Get Jobs In Blockchain
										— Should You?</a>
								</h3>
								<div class="author font-georgia text-[14px] text-bold">
									By Daniel Porat
								</div>
							</div>
							<div class="image w-[30%]">
								<img src="./images/people.png" alt="" class="w-full h-full" />
							</div>
						</div>
						<div class="blog_description">
							Believe it or not, blockchain jobs are like regular jobs,
							except in an exceedingly more technology-oriented field.
							Like traditional companies and projects, blockchain
							ventures need a workforce to bring their vision to life.
							Assembling the right team of contributors, coders,
							investors, advisors, marketing members, etc. is essential.
							These are the…
						</div>
					</article>

					<article class="blog p-[10px] mb-[40px]">
						<div class="blog_heading flex justify-between items-center mb-[40px]">
							<div class="heading w-[67%]">
								<h3>
									<a href="" class="text-[20px] font-black">Why It Is Better to Focus on Product
										Marketing Over Token Marketing</a>
								</h3>
								<div class="author font-georgia text-[16px] text-bold">
									By Nadav Dakner
								</div>
							</div>
							<div class="image w-[30%]">
								<img src="./images/people.png" alt="" class="w-full h-full" />
							</div>
						</div>
						<div class="blog_description">
							In many respects, blockchain and crypto projects are just
							like any other startup. They all need to raise funds. They
							also need to assemble the right teams of developers,
							product managers, finance, marketing, and more. And they
							all have to promote their project and seek out their tribe
							– the…
						</div>
					</article>
				</section>
			</section>
		</section>
	</main>

	<?php include_once "includes/footer.inc.php" ?>
	<script src="./js/jquery.min.js"></script>
	<script src="./js/app.js" defer type="module"></script>
</body>

</html>