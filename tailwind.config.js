/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
  "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        customGray: '#D9DCD6',
        customBlue: '#81C3D7',
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        'condensed': ['Roboto Condensed', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

