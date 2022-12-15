module.exports = {
  content: [
    './**/*.php',
  ],
  theme: {
    // Helper pixel to rem calc: https://nekocalc.com/de/px-zu-rem-umrechner
    fontSize: {
      'xs': '0.5rem',
      'sm': '0.85rem', //small,
      'tiny': '1rem', // h6
      'base': '1.125rem', //p, h5
      'lg': '1.125rem', //h4
      'xl': '1.5rem', //h3
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
      wider: '.25em'
    },
    extend: {
      spacing: {
        'page-header': '50rem',
      },
      boxShadow: {
        'inner': 'inset 0px 0px 5px rgba(0, 0, 0, 0.25)',
      }
    }
  },
  daisyui: {
    themes: [{
      numero: {
        "primary": "blue",
        "primary-focus": "blue",
        "primary-content": "blue",
        "secondary": "orange",
        "secondary-focus": "orange",
        "secondary-content": "orange",
        "accent": "fuchsia",
        "accent-focus": "fuchsia",
        "accent-content": "fuchsia",
        "neutral": "black",
        "neutral-focus": "black",
        "neutral-content": "black",
        "base-100": "white",
        "base-200": "white",
        "base-300": "white",
        "base-content": "black",
        "info": "yellow",
        "info-content": "yellow",
        "success": "green",
        "success-content": "green",
        "warning": "orange",
        "warning-content": "orange",
        "error": "red",
        "error-content": "red",
        // More adjustements
        "--rounded-box": "1rem", // border radius rounded-box utility class, used in card and other large boxes
        "--rounded-btn": "0.33rem", // border radius rounded-btn utility class, used in buttons and similar element
        "--rounded-badge": "1.9rem", // border radius rounded-badge utility class, used in badges and similar
        "--animation-btn": "0.25s", // duration of animation when you click on button
        "--animation-input": "0.2s", // duration of animation for inputs like checkbox, toggle, radio, etc
        "--btn-text-case": "normal", // set default text transform for buttons
        "--btn-focus-scale": "0.95", // scale transform of button when you focus on it
        "--border-btn": "1px", // border width of buttons
        "--tab-border": "1px", // border width of tabs
        "--tab-radius": "0.5rem", // border radius of tabs
      },
    }, ],
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography')
  ],
}
