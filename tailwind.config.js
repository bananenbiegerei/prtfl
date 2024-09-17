module.exports = {
	content: ['./**/*.php'],
	safelist: [
		{
			pattern: /text-neutral-(50|100|200|300|400|500|600|700|800|900)/,
		},
	],
	theme: {
		// Helper pixel to rem calc: https://nekocalc.com/de/px-zu-rem-umrechner
		fontSize: {
			xs: '0.75rem',  // 12px
			sm: '0.75rem',  // 12px
			base: '1rem',   // 16px
			lg: '1.375rem',   // 22px
			xl: '2.25rem',  // 36px
			'2xl': '6.25rem', // 100px
			'3xl': '6.25rem', // 100px
			'4xl': '6.25rem', // 100px
			'7xl': '6.25rem', // 100px
		},

		fontFamily: {
			sans: ['untitled', 'sans-serif'],
			mono: ['IBM Plex Mono', 'monospace'],
			logotype: ['dalfitra', 'monospace'],
			icon: ['Zycon', 'sans-serif'],
		},
		fontWeight: {
			light: 200,
			normal: 400,
			medium: 400,
			bold: 500,
		},
		extend: {
			animation: {
				wiggle: 'wiggle 0.3s ease-in-out infinite',
			},
			keyframes: {
				wiggle: {
					'0%, 100%': {
						transform: 'rotate(-3deg)',
					},
					'50%': {
						transform: 'rotate(3deg)',
					},
				},
			},
			boxShadow: {
				'custom-accent-ring': '0 0 10px 2px rgba(237, 137, 54, 1), 0 0 0 2px rgba(237, 137, 54, 1)',
				'text-stroke': '0 0 1px black, 0 0 1px black, 0 0 1px black, 0 0 1px black',
				'bb-custom': '0px 0px 15px 0px rgba(0, 0, 0, 0.14)',
			},
			height: {
				'single-full-header': 'calc(100vh - 5rem)',
				'desktop-header': '222px',
				'desktop-header-collapsed': '70px',
				'mobile-header': '152px',
				'mobile-header-collapsed': '45px',
			},
			borderRadius: {
				abcd: '32px',
			},
			lineHeight: {
				'abcd': '1.15',
			}
		},
	},
	corePlugins: {
		aspectRatio: false,
	},
	plugins: [
		require('@tailwindcss/aspect-ratio'),
		require('@tailwindcss/forms'),
		require('tailwindcss-themer')({
			defaultTheme: {
				extend: {
					colors: {
						primary: {
							50: '#f5ffe4',
							100: '#e8ffc4',
							200: '#d1ff90',
							300: '#b0ff50',
							400: '#94ff23',
							DEFAULT: '#94ff23',
							500: '#70e600',
							600: '#55b800',
							700: '#408b00',
							800: '#356d07',
							900: '#2e5c0b',
							950: '#143400',
						},
						secondary: {
							50: '#f7f7f7',
							DEFAULT: '#f7f7f7',
							100: '#e3e3e3',
							200: '#c8c8c8',
							300: '#a4a4a4',
							400: '#818181',
							500: '#666666',
							600: '#515151',
							700: '#434343',
							800: '#383838',
							900: '#000000',
						},
						focus: {
							50: '#f9f7f1',
							100: '#ede9d8',
							200: '#d3c9a1',
							300: '#c5b684',
							400: '#b8a167',
							DEFAULT: 'rgba(237, 137, 54, 1)',
							600: '#977248',
							700: '#7f5a3e',
							800: '#694a37',
							900: '#573e30',
							950: '#302018',
						},
						black: {
							DEFAULT: 'black',
						},
						error: {
							50: '#fff0f2',
							100: '#ffe2e6',
							200: '#ffc9d4',
							300: '#ff9db1',
							400: '#ff6688',
							DEFAULT: '#ff3164',
							600: '#f21b5a',
							650: '#f21b5a',
							700: '#cb0544',
							800: '#B0003E',
							900: '#910a3d',
						},
						neutral: {
							50: '#F2F2F7',
							100: '#DCDCDC',
							200: '#c8c8c8',
							300: '#a4a4a4',
							400: '#797979',
							DEFAULT: '#F6F6F6',
							500: '#666666',
							600: '#515151',
							700: '#434343',
							800: '#383838',
							900: '#313131',
						},
						success: {
							50: '#edfcf4',
							100: '#d2f9e2',
							200: '#a9f1cb',
							300: '#72e3ae',
							400: '#39ce8e',
							500: '#15b474',
							600: '#0a915e',
							DEFAULT: '#087951',
							800: '#095c3f',
							900: '#084c35',
						},
						accent: {
							50: '#fcffe5',
							100: '#f5ffc8',
							200: '#ebff9a',
							DEFAULT: '#ebff9a',
							300: '#d8fb5b',
							400: '#c4f229',
							500: '#a5d80a',
							600: '#80ad03',
							700: '#608308',
							800: '#4d670d',
							900: '#415710',
						},
						warning: {
							50: '#fffaec',
							100: '#fff3d3',
							200: '#ffe4a5',
							300: '#ffce6d',
							400: '#ffae32',
							500: '#ff930a',
							DEFAULT: '#ff7b00',
							700: '#cc5902',
							800: '#a1450b',
							900: '#823b0c',
							950: '#461b04',
						},
					},
				},
			},
			themes: [
				{
					name: 'yellow-theme',
					extend: {
						colors: {
							primary: {
								50: '#EBEAE6',
								100: '#f5ffc1',
								200: '#efff86',
								300: '#efff41',
								400: '#f6ff0d',
								500: '#fffb00',
								DEFAULT: '#fffb00',
								600: '#d1bc00',
								700: '#a68802',
								800: '#896a0a',
								900: '#74560f',
								950: '#442f04',
							},
						},
					},
				},
			],
		}),
	],
};
