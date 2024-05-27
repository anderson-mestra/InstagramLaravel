/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php', //Aqui se agregan los archivos en los que se usaran tailwind
    './resources**/*.js'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

