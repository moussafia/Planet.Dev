/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.{html, php, js}','./page/*.{html, php, js}'],
  theme: {
    extend: {
      colors: {
        primary: "#090979",
        secondary: {
          100: "#E2E2D5",
          200: "#888883",
        },
        mycolor:{
          100: "#0D4C92",
          200: "090979",
        },
        footer: "#3F3D3D",
      },
    },
  },
  plugins: [],
}
