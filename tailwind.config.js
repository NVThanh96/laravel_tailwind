/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      // colors: {
      //   darkBg: '#0f1c2d', // Replace with your dark background color
      //   lightBg: '#ffffff', // Replace with your light background color
      // },
    },
  },
  plugins: [],
}