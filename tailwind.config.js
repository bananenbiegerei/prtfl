module.exports = {
	content: ['./**/*.php'],
	theme: {
		// Helper pixel to rem calc: https://nekocalc.com/de/px-zu-rem-umrechner
		fontSize: {
			xs: '0.5rem',
			sm: '0.85rem', //small,
			tiny: '1rem', // h6
			base: '1.125rem', //p, h5
			lg: '1.125rem', //h4
			xl: '1.5rem', //h3
			'2xl': '1.75rem', //h2
			'3xl': '2.375rem', //h1
			'4xl': '2.25rem',
		},
		fontFamily: {
			sans: ['Sora', 'sans-serif'],
			//mono: ['Roboto Mono', 'serif'],
			//serif: ['Roboto Serif', 'serif'],
		},
		fontWeight: {
			light: 200,
			normal: 300,
			bold: 500,
		},
		letterSpacing: {
			tight: '-.25em',
			normal: '0',
			wide: '.0125em',
			wider: '.25em',
		},
		extend: {
			spacing: {
				'page-header': '50rem',
			},
			boxShadow: {
				inner: 'inset 0px 0px 5px rgba(0, 0, 0, 0.25)',
			},
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
				extend: {
					colors: {
						// generated with: https://uicolors.app/ ATTENTION: need to get rid of '50' quote signs…
						primary: {
							50: '#f9f6f3',
							100: '#f0eae4',
							200: '#e0d3c7',
							300: '#cdb7a4',
							400: '#b8967f',
							500: '#a97d66',
							600: '#9c6d5a',
							700: '#82594c',
							800: '#6a4a42',
							900: '#573d37',
						},
						secondary: { DEFAULT: '#fff' },
					},
				},
			},
			themes: [
				{
					name: 'blue-scheme',
					extend: {
						colors: {
							primary: {
								50: '#e5eeff',
								100: '#cfe0ff',
								200: '#a9c3ff',
								300: '#7599ff',
								400: '#3f5dff',
								500: '#1423ff',
								600: '#0008ff',
								700: '#0009ff',
								800: '#0008e3',
								DEFAULT: '#000068',
								light: '#FCDDEC',
							},
						},
					},
				},
			],
		}),
	],
};
