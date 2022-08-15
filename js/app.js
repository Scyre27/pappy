import { menuOpen } from "./imports/header.js";
import { menuClose, windowResize } from "./imports/menu.js";
$(window).ready(() => {
	menuOpen();
	menuClose();
	windowResize();

	// Hero image swap
	(function () {
		let hero_section = $("#home #hero");
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
				hero_section.css({ backgroundImage: `url(${image_link})` }).animate(
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
