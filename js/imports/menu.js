function closeElements(element1, element2) {
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
			300
		);
		// element1.css("display", "none");
		// element2.css("display", "none");
	}, 400);
}

export function menuClose() {
	// Menu slide
	(function () {
		let menu_aside = $("aside#phone_menu");
		let menu_close_btn = $("aside#phone_menu .menu_close");
		let cover_section = $(".cover");

		if (menu_close_btn) {
			menu_close_btn.click(() => {
				closeElements(menu_aside, cover_section);
			});
		}
	})();
}

export function windowResize() {
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
					closeElements(menu_aside, cover_section);
				}
			}
		});
	})();
}
