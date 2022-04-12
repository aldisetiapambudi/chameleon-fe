module.exports = {
  mode: 'jit',
  purge: [                               //CONFIGURE CORRECTLY
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './src/**/*.{html,js}',
    './node_modules/tw-elements/dist/js/**/*.js'
  ],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    './src/**/*.{html,js}',
    './node_modules/tw-elements/dist/js/**/*.js'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}
