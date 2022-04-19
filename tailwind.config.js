const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/layouts/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primarycolor: '#E1B2B1',
                navcolor: '#EEE8D8',
                titlecolor: '#E8E6E6',
                buttoncolor: '#E0CCD2',
                buttonhover: '#F7E9EA',
            },
            fontFamily: {
                display: ["Nunito", "sans-serif"],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
