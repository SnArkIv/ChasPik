/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php"],
  theme: {
      extend: {
          fontFamily: {
              source: ['"PT Mono"', "monospace"],
          },
      },
  },
  plugins: [require('@tailwindcss/forms')],
};