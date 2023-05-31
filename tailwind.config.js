/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        black: '#0D2119',
        dark: '#204B38',
        mid: '#3E8B65',
        light: '#BCDEC9'
      },
      fontFamily: {
          sans: ['Poppins', 'sans-serif'],
      },
      fontSize: {
        title: '1.875rem',
        heading: '1.3125rem',
        subheading: '1.125rem',
        name: '1rem',
        subname: '0.875rem',
      },
      borderRadius: {
        'default': '5px',
      },
      keyframes: {
        right: {
          '0%': { transform: 'translateX(-100%)' },
          '100%': { transform: 'translateX(0)' },
        },
        left: {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(0)' },
        },
      },
      animation: {
        right: 'right 0.8s ease-in-out',
        left: 'left 0.8s ease-in-out',
      }
    },
  },
  plugins: [],
}

