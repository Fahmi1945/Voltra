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
        // Daftarkan palet warna baru di sini
        'voltra-linen': '#FAF3E1',   // Sustainable Linen (Latar belakang utama)
        'voltra-cotton': '#F5E7C6',  // Recycled Cotton
        'voltra-tangerine': '#FF6D1F', // Electric Tangerine (Aksen/Footer)
        'voltra-black': '#222222',    // Black Hole (Teks utama)
      }
    },
  },
  plugins: [],
}