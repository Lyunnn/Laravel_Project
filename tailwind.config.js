const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],

    theme: {
        extend: {
            colors: {
                primarycolor: '#E1B2B1',
                navcolor: '#EEE8D8',
                titlecolor: '#E8E6E6',
                buttoncolor: '#E0CCD2',
                buttonhover: '#F7E9EA',
                titletogradient: '#8b5cf6',
                titlefromgradient: '#ddd6fe',
            },
            fontFamily: {
                display: ["Nunito", "sans-serif"],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
