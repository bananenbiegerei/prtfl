module.exports = {
	content: ['./**/*.php'],
	theme: {
		// Helper pixel to rem calc: https://nekocalc.com/de/px-zu-rem-umrechner
		fontSize: {
			xs: '0.625rem',
			sm: '0.875rem',
			base: '1rem',
			lg: '1.25rem',
			xl: '2rem',
			'2xl': '3rem',
			'3xl': '3rem',
			'4xl': '3rem',
		},

		fontFamily: {
			sans: ['untitled', 'sans-serif'],
			mono: ['IBM Plex Mono', 'monospace'],
			logotype: ['dalfitra', 'monospace'],
			icon: ['Zycon', 'sans-serif'],
		},
		fontWeight: {
			light: 200,
			normal: 300,
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
				'custom-focus-ring': '0 0 10px 2px rgba(237, 137, 54, 1), 0 0 0 2px rgba(237, 137, 54, 1)',
				'text-stroke': '0 0 1px black, 0 0 1px black, 0 0 1px black, 0 0 1px black',
			},
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
							50: '#f9f7f3',
							100: '#f0ece4',
							200: '#e0d7c7',
							DEFAULT: '#e0d7c7',
							300: '#cdbda4',
							400: '#b89f7f',
							500: '#a98866',
							600: '#9c785a',
							700: '#82624c',
							800: '#6a5042',
							900: '#574237',
							950: '#2e221c',
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
						red: {
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
						gray: {
							50: '#f7f7f7',
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
						green: {
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
						neon: {
							50: '#fcffe5',
							100: '#f5ffc8',
							DEFAULT: '#ebff9a',
							300: '#d8fb5b',
							400: '#c4f229',
							500: '#a5d80a',
							600: '#80ad03',
							700: '#608308',
							800: '#4d670d',
							900: '#415710',
						},
						orange: {
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
					name: 'team-members-scheme',
					extend: {
						colors: {
							palerose: {
								DEFAULT: '#FBC5B4',
							},
							palepurple: {
								DEFAULT: '#E0D3FF',
							},
							palepeach: {
								DEFAULT: '#FADAB6',
							},
							palecyan: {
								DEFAULT: '#D4E9DE',
							},
							palepink: {
								DEFAULT: '#F7DAEF',
							},
							paleblue: {
								DEFAULT: '#C0D8F4',
							},
							palegreen: {
								DEFAULT: '#E3F9D6',
							},
							default: {
								DEFAULT: '#d5d2d7',
							},
						},
					},
				},
				{
					name: 'orga-scheme',
					extend: {
						colors: {
							red: {
								DEFAULT: '#D04425',
							},
							cyan: {
								DEFAULT: '#00B9FF',
							},
							blue: {
								DEFAULT: '#3A25FF',
								200: '#EEEAFF',
							},
							black: {
								DEFAULT: '#000',
							},
						},
					},
				},
				{
					name: 'white-scheme',
					extend: {
						colors: {
							primary: {
								DEFAULT: '#fff',
							},
							black: {
								DEFAULT: '#fff',
							},
						},
					},
				},
				{
					name: 'default-scheme',
					extend: {
						colors: {
							primary: {
								DEFAULT: '#000068',
							},
							black: {
								DEFAULT: 'black',
							},
						},
					},
				},
			],
		}),
	],
};
