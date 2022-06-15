module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
      fontFamily: {
          sans: ['Monserrat', 'sans-serif']
      },
    extend: {

    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
