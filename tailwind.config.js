module.exports = {
	content: ['./**/*.php'],
	theme: {
		// Helper pixel to rem calc: https://nekocalc.com/de/px-zu-rem-umrechner
		// fontSize: {
		// 	xs: '0.5rem',
		// 	sm: '0.85rem', //small,
		// 	tiny: '1rem', // h6
		// 	base: '1.125rem', //p, h5
		// 	lg: '1.125rem', //h4
		// 	xl: '1.5rem', //h3
		// 	'2xl': '1.75rem', //h2
		// 	'3xl': '2.375rem', //h1
		// 	'4xl': '2.25rem',
		// },
		fontFamily: {
			sans: ['Arial', 'sans-serif'],
			//mono: ['Roboto Mono', 'serif'],
			//serif: ['Roboto Serif', 'serif'],
		},
		fontWeight: {
			light: 200,
			normal: 300,
			medium: 400,
			bold: 500,
		},
	},
	corePlugins: {
		aspectRatio: false,
	},
	plugins: [
		require('@tailwindcss/aspect-ratio'),
		require('@tailwindcss/forms'),
		require('@tailwindcss/typography'),
		require('tailwindcss-themer')({
		  defaultTheme: {
			// put the default values of any config you want themed
			// just as if you were to extend tailwind's theme like normal https://tailwindcss.com/docs/theme#extending-the-default-theme
			extend: {
			  // colors is used here for demonstration purposes
			  colors: {
				primary: {
					'50': '#f7f7f7',
					'100': '#e3e3e3',
					'200': '#c8c8c8',
					'300': '#a4a4a4',
					'400': '#818181',
					'500': '#666666',
					'600': '#515151',
					'700': '#434343',
					'800': '#383838',
					DEFAULT: '#000000',
				},
				secondary: {
					DEFAULT: '#f7f7f7',
					'100': '#e3e3e3',
					'200': '#c8c8c8',
					'300': '#a4a4a4',
					'400': '#818181',
					'500': '#666666',
					'600': '#515151',
					'700': '#434343',
					'800': '#383838',
					'900': '#000000',	
				},
				focus: {
					DEFAULT: '#1614ff',
				}
			  }
			}
		  },
		  // if needed add custom themes here…
		  // themes: [
			// {
			//   name: 'my-theme',
			//   extend: {
			// 	colors: {
			// 	  primary: 'blue'
			// 	}
			//   }
			// }
		  // ]
		})
	],
};
