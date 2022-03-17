module.exports = {
  content: [
    './**/*.php',
  ],
  theme: {
    colors: {
      'primary': '#2F2F89',
      'primary-light': '#CECBE0',
      'primary-medium': '#A49FC5',
      'primary-dark': '#21214E',
      'secondary': '#006492',
      'secondary-light': '#C7E5F5',
      'secondary-medium': '#5BC6F4',
      'secondary-dark': '#014463',
      'black': '#231F20',
      'white': '#fff',
      'transparent': 'rgba(0,0,0,0)',
      'gray-dark': '#273444',
      'gray': '#8492a6',
      'gray-light': '#d3dce6',
      'alert': 'red',
      'success': 'green',
    },
    // Helper pixel to rem calc: https://nekocalc.com/de/px-zu-rem-umrechner
    fontSize: {
      'xs': '0.75rem',
      'sm': '0.75rem',
      'tiny': '0.95rem', //small, h6
      'base': '1.125rem', //p, h5
      'lg': '1.125rem', //h4
      'xl': '1.125rem', //h3
      '2xl': '1.375rem', //h2
      '3xl': '2.125rem', //h1
      '4xl': '2.25rem',
    },
    fontFamily: {
      sans: ['Roboto', 'sans-serif'],
      mono: ['Roboto Mono', 'serif'],
    },
    fontWeight: {
      normal: 400,
      bold: 900,
    },
    extend: {
      // spacing: {
      //   '8xl': '96rem',
      //   '9xl': '128rem',
      // },
      // borderRadius: {
      //   '4xl': '2rem',
      // }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}