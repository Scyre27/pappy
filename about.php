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
	<title>Website - About</title>
	<link rel="stylesheet" href="./css/includes.css" />
	<link rel="stylesheet" href="./css/output.css" />
	<script src="https://kit.fontawesome.com/f6e3b67683.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php include_once "includes/header.inc.php" ?>
	<?php include_once "includes/menu.inc.php" ?>
	<main id="about">
		<article class="hero w-full h-[250px] md:h-[90vh] md:mb-[100px]">
			<img src="./images/group.jpg" alt="hero" class="w-full h-full" />
		</article>
		<section id="about_us" class="w-full h-auto mt-[20px] pt-[30px] pb-[40px] md:max-w-[1120px] md:mx-auto">
			<h1 class="text-5xl lg:text-5xl text-black text-center mb-[52px] font-martel font-black">
				About Us
			</h1>

			<div class="content px-[25px]">
				<p class="highlight text-[19px] font-black font-martel md:text-[20px]">
					MarketAcross is a premium content marketing solution for startups
					and cryptocurrencies. We work with established blockchain
					solutions since 2014. From Content creation, to content placement
					& content amplification - we are a one stop shop for content
					marketing.
				</p>
				<p class="description text-[16px] font-ubuntu mt-[20px] font-light md:font-regular md:text-[18px]">
					We specialize in PR, content marketing, brand reputation, social
					promotions, influencer outreach (KoL), SEO, community growth and
					more. We work both with Journalists from top tier publications,
					influential bloggers, webmasters and editors of small blogs. We
					help our clients to rise above the noise and get their name out
					there in the spotlights through pitching, ghostwriting, Op-Eds,
					videos, content amplification platforms, press releases and
					interviews. We only work per success with guaranteed deliverables,
					we don't charge retainer fees and we only charge for what we are
					able to deliver.
				</p>
			</div>
		</section>

		<section id="team" class="w-full h-auto mt-[20px] pt-[30px] md:max-w-[1120px] md:mx-auto">
			<h1 class="text-5xl lg:text-5xl text-black text-center mb-[52px] font-martel font-black">
				The Team
			</h1>

			<section class="team_members grid grid-cols-2 px-[25px] md:grid-cols-3 gap-8 pb-[20px] md:px-[120px] md:gap-x-[128px] md:gap-y-[50px] md:h-auto">
				<?php $team_members = fetchTeamMembers();
				foreach ($team_members as $team_member) { ?>

					<article class="member w-full h-[300px] md:h-[320px] ">
						<div class="profile" data-type="member's picture overflow-hidden">
							<img src="./images/<?php echo $team_member['profile'] ?>" alt="profile_img" class="w-[200px] h-[200px]" />
						</div>
						<div class="name text-center font-ubuntu font-bold mt-[10px] text-[18px]">
							<?php echo $team_member['name'] ?>
						</div>
						<div class="position text-center font-ubuntu font-light">
							<?php echo $team_member['position'] ?>
						</div>
					</article>

				<?php } ?>
			</section>
		</section>
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