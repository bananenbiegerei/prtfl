module.exports = {
	content: ['./**/*.php'],
	safelist: [
		'hidden',
		'!hidden',
		// {
		//     pattern: /text-neutral-(50|100|200|300|400|500|600|700|800|900)/,
		// },
		// {
		//     pattern: /rotate-(15|30|45|60|75|90|105|120|135|150|165|180|195|210|225|240|255|270|285|300|315|330|345)/,
		// },
	],
	theme: {
		screens: {
			sm: '460px',
			md: '768px',
			lg: '1024px',
			xl: '1280px',
			'2xl': '1536px',
		},
		fontSize: {
			xs: '0.625rem', // 10px
			sm: '0.8125rem', // 13px
			base: '1rem', // 16px
			lg: '1.375rem', // 22px
			xl: '1.875rem', // 30px
			'2xl': '2.25rem', // 36px
			'3xl': '3.25rem', // 52px
			'4xl': '4.25rem', // 68px
			'5xl': '5.25rem', // 84px
			'6xl': '6.25rem', // 100px
		},

		fontFamily: {
			sans: ['untitled', 'sans-serif'],
			mono: ['IBM Plex Mono', 'monospace'],
			logotype: ['dalfitra', 'monospace'],
		},
		fontWeight: {
			light: 200,
			normal: 400,
			medium: 400,
			bold: 500,
		},
		extend: {
			width: {
				footer: 'calc(100vw - 3rem)',
			},
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
				abcd: '0px 0px 16px 10px rgba(0, 0, 0, 0.07)',
			},
			colors: {
				primary: {
					50: '#e6f0ff',
					100: '#cce0ff',
					200: '#99c2ff',
					300: '#66a3ff',
					400: '#3385ff',
					DEFAULT: '#0050D2',
					500: '#0050D2',
					600: '#0040a8',
					700: '#00307e',
					800: '#002054',
					900: '#00102a',
					950: '#000815',
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
					50: '#ffe6e6',
					100: '#ffcccc',
					200: '#ff9999',
					300: '#ff6666',
					400: '#ff3333',
					DEFAULT: '#EE0000',
					500: '#EE0000',
					600: '#be0000',
					700: '#8f0000',
					800: '#5f0000',
					900: '#300000',
					950: '#180000',
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
					50: '#ffe6f5',
					100: '#ffcceb',
					200: '#ff99d7',
					300: '#ff66c3',
					400: '#ff33af',
					DEFAULT: '#EC007E',
					500: '#EC007E',
					600: '#bd0065',
					700: '#8e004c',
					800: '#5e0032',
					900: '#2f0019',
					950: '#18000d',
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
				yellow: {
					50: '#fffef0',
					100: '#fffcd6',
					200: '#fff9ad',
					300: '#fff584',
					400: '#ffe75b',
					DEFAULT: '#FFD900',
					500: '#FFD900',
					600: '#ccae00',
					700: '#998200',
					800: '#665700',
					900: '#332b00',
					950: '#1a1600',
				},
			},
			spacing: {
				specialscreen: 'calc(100vh - 2rem)', // 2rem = height of footer
			},
			minHeight: {
				specialscreen: 'calc(100vh - 2rem)',
			},
		},
	},
	corePlugins: {
		aspectRatio: false,
	},
	plugins: [require('@tailwindcss/aspect-ratio'), require('@tailwindcss/forms')],
};
