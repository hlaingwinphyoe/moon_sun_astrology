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
                    100: "#F8CCFF",
                    200: "#EB99FF",
                    300: "#D766FF",
                    400: "#C23FFF",
                    500: "#9F00FF",
                    600: "#7B00DB",
                    700: "#5C00B7",
                    800: "#410093",
                    900: "#2E007A",
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
