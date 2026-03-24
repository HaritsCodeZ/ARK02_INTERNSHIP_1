export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                // This makes 'font-montserrat' available
                'montserrat': ['Montserrat', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
