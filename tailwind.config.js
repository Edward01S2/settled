const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: [
    './resources/**/**/*.php',
    './resources/**/*.php',
    './resources/**/**/*.js',
    './resources/**/*.js',
    ],
    options: {
      whitelist: ['italic', 'text-c-blue-300'],
    }
  },
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      transparent: colors.transparent,
      current: colors.current,
    },
    extend: {
      colors: {
        'c-blue': {
          50 : '#f3faff',
          100 : '#7CA5B9',
          200 : '#719FB6',
          300 : '#739Fb6',
          350: '#1a64d9',
          400 : '#03045e',
          500: '#373B41',
        },
        'c-gray' : {
          100: '#cccccc',
          200: '#c4c4c4',
          300: '#f4f4f4',
          400: '#333333',
          500: '#555555',
          600: '#8E8888',
          700: '#8D8989',
          800: '#74777C',
          900: '#f7f7f7',
          1000: '#8e8e8e',
        },
        'c-black' : {
          100: '#2F343B',
          200: '#282E33',
          300: '#303339',
        },
        'c-teal' : {
          100: '#719FB6',
          200: '#98a39a',
          300: '#608598'
        },
        'c-tan' : {
          100: '#F7EDE5',
          200: '#E0D3C3'
        },
        'c-purple' : {
          100: '#7209B7',
        },
        'c-pink' : {
          100 : '#FF4181',
        }
      },
      fontFamily: {
        'space' : ['Space Mono', 'monospace'],
        'roboto' : ['Roboto', 'roboto', 'sans-serif'],
        'chronicle' :  ['Chronicle Display', 'serif'],
        'chron-text' : ['Chronicle Text G1', 'serif'],
        'brandon' : ['Brandon Text', 'serif'],
      },
      borderWidth: {
        '3': '3px'
      },
      fontSize: {
        '6.5xl': '5rem',
        '7xl': '6rem',
        '8xl': '7rem',
        '9xl': '10rem',
      },
      maxWidth: {
        '384': '384px',
        '426': '426.667px',
        '512': '512px',
        '533': '533.333px',
        '640': '640px',
        '720': '720px',
      },
      spacing: {
        '2px': '2px',
        '3px': '3px',
        '18': '4.5rem',
        '44' : '11rem',
        '80' : '22rem',
        '84': '26rem',
        '100': '28rem',
        '104': '30rem',
        '108' : '32rem',
        '112' : '36rem',
        '116' : '38rem',
        '120' : '42rem',
      },
      opacity: {
        '31': '0.31',
        '90': '0.9',
      },
      screens: {
      },
      boxShadow: {
      },
      transformOrigin: {
        '100' : '100% 0',
      }
    },
  },
  variants: {
    scale: ['responsive', 'hover', 'focus', 'group-hover'],
    display: ['responsive', 'hover', 'group-hover'],
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/typography'),
  ],
  applyComplexClasses: true,
}
