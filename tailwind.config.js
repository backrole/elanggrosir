module.exports = {
    theme: {
        minWidth: {
            '0': '0',
            '1/4': '25%',
            '1/2': '50%',
            '3/4': '75%',
            'full': '100%',
        },
        maxHeight: {
            '0': '0',
            '1/4': '25%',
            '1/2': '50%',
            '3/4': '75%',
            'full': '100%',
        },
        extend: {},
        fontFamily: {
            display: ['Gilroy', 'sans-serif'],
            body: ['Open Sans', 'sans-serif'],
        },
    },
    variants: {},
    plugins: [
        require('@tailwindcss/custom-forms'),
    ],
    // prefix: 'tw-',
}
