/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                'sans': ['Inter', 'sans-serif'],
                'cursive': ['Lobster', 'cursive'],
                'mono': ['Fira Code', 'monospace'],
            },
            colors: {
                'dark': '#061A23',
                'darker': '#06373A',
                'primary': '#CCD6F6',
                'secondary': '#8892AF',
                'accent': '#159947',
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography")
    ],
};