module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './src/**/*.{html,js}',
    './node_modules/tw-elements/dist/js/**/*.js'
  ],
  theme: {
    // colors: {
    //   'white': '#f8f8f8',
    //   'red': '#ff0000ab',
    //   'black': '#000000',
    //   'blue': '#0066cc',
    //   'gray': '#808080',
    //   'option-color-1': '#392713',
    //   'option-color-2': '#392713',
    //   'option-color-3': '#392713',
    //   'option-color-4': '#392713',
    //   'option-color-5': '#392713',
    //   'option-color-6': '#392713',
    //   'option-color-7': '#392713',
    // },
    extend: {},
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}
