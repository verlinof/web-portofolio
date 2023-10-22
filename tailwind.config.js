/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            "primary-color": "#00A0D3",
            "secondary-color": "#0094C3",
        },
    },
    plugins: [require("flowbite/plugin")],
};
