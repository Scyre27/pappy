/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./*.php", "./*.html"],
	theme: {
		extend: {
			fontFamily: {
				martel: ["Martel", "serif"],
				ubuntu: ["Ubuntu", "sans-serif"],
			},
		},
	},
	plugins: [],
};
