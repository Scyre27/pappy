export function menuOpen() {
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
}

// Menu slide
// (function () {
// 	if (menu_close_btn) {
// 		menu_close_btn.click(() => {
// 			closeMenu(menu_aside, cover_section);
// 		});
// 	}
// })();
