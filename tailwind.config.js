/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily:{
            inter :['Inter','ui-sans-serif', 'system-ui', 'sans-serif']
        },
        fontSize:{
            '3.5xl' : '2rem'
        },
    },
  },
  plugins: [],
}

