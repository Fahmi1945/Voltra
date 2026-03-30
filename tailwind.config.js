/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'voltra-blue': '#000000', // Contoh warna brand Voltra
      }
    },
  },
  plugins: [],
}