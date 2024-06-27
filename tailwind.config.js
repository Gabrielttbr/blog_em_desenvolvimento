/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'],
        'bebasNeue': ['Bebas Neue', 'sans-serif'],
        'icones': ['Icones']
      },
      colors: {
          'custom-dark-gray': '#9D9D9D',
          'custom-icon-gray': '#A7A7A7',
          'custom-gray':'#D1D0D0',
          'custom-black': '#020202'
      },
      spacing: {
          '464': '464px'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],

}

