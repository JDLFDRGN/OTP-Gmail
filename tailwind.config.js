/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      animation: {
        'slow-spin': 'turn 2s linear infinite' 
      },
      keyframes: {
        turn: {
          '0%' : { transform: 'translateX(-50%) rotate(0)'},
          '100%' : { transform: 'translateX(-50%) rotate(360deg)'},
        }
      }
    }
  },
  plugins: [],
}
