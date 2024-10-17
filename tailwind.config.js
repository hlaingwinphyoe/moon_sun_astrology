import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import theme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./vendor/laravel/jetstream/**/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.vue",
  ],

  theme: {
    extend: {
      colors: {
        primary: {
          100: "#FEF8CE",
          200: "#FEEE9D",
          300: "#FEE36D",
          400: "#FED748",
          500: "#FEC40C",
          600: "#DAA208",
          700: "#B68306",
          800: "#936603",
          900: "#795102",
        },
      },
      fontFamily: {
        sans: ["Figtree", ...defaultTheme.fontFamily.sans],
      },
      typography: ({ theme }) => ({
        DEFAULT: {
          css: {
            "--tw-prose-bullets": theme("colors.gray.800"),
          },
        },
      }),
    },
  },

  plugins: [forms, typography],
};
