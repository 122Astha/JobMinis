const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    './views/app/*.php',
    './public/*.php',
    './views/layouts/*.php',
    // './views/landing/*.html',
    './views/**/*.php',
    './public/js/*.js',
    "./node_modules/flowbite/**/*.js"
],
  theme: {
    extend: {
    },
  },
 
  plugins: [
    require('flowbite/plugin')
]
}
