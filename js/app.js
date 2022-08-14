$(window).ready(() => {
	function closeMenu(element1, element2) {
		element1.animate(
			{
				left: "-200%",
			},
			300
		);
		setTimeout(() => {
			element2.animate(
				{
					left: "-200%",
				},
				200
			);
			element1.css("display", "none");
			element2.css("display", "none");
		}, 400);
	}

	// Menu slide
	(function () {
		let menu_open_btn = $("#menuBtn");
		let menu_aside = $("aside#phone_menu");
		let menu_close_btn = $("aside#phone_menu .menu_close");
		let cover_section = $(".cover");
		if (menu_open_btn) {
			menu_open_btn.click(() => {
				cover_section.css("display", "block");
				menu_aside.css("display", "block");
				cover_section.animate(
					{
						left: "0",
					},
					200
				);
				setTimeout(() => {
					menu_aside.animate(
						{
							left: "0",
						},
						300
					);
				}, 300);
			});
		}

		if (menu_close_btn) {
			menu_close_btn.click(() => {
				closeMenu(menu_aside, cover_section);
			});
		}
	})();

	// Window resize
	(function () {
		let menu_aside = $("aside#phone_menu");
		let cover_section = $(".cover");
		$(window).resize(() => {
			let window_width = $(window).innerWidth();
			if (window_width > 1024) {
				let menu_left = menu_aside.css("left");
				menu_left = parseInt(menu_left);
				if (menu_left === 0) {
					closeMenu(menu_aside, cover_section);
				}
			}
		});
	})();

	// Hero image swap
	(function () {
		let hero_section = $("#hero");
		let images = [
			"image-scaled.jpg",
			"peo.png",
			"rand.jpg",
			"women.png",
			"HeroBgMobile-1.jpg",
			"HeroBgMobile-2.jpg",
			"HeroBgMobile-3.jpg",
		];
		let max = images.length - 1;
		let i = 0;
		setInterval(() => {
			let image_link = `images/${images[i]}`;
			hero_section.stop().animate({ opacity: 0 }, 1000, function () {
				hero_section
					.css({ backgroundImage: `url(${image_link})` })
					.animate(
						{
							opacity: 1,
						},
						{ duration: 1000 }
					);
			});
			if (i == max) {
				i = 0;
			} else {
				i++;
			}
		}, 10000);
	})();
});
