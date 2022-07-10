module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['AuthenticSans', 'sans-serif'],
                sansC: ['AuthenticSansCondensed', 'Arial Narrow', 'sans-serif'],
                heading: ['Embro', 'Impact', 'sans-serif']
            },
            colors: {
                cbackground: '#9FAEA1',
                cbase: '#fff',
                clink: '#AD4F41',
                chover: '#48714D'
            },
            screens: {
                '3xl': '1800px'
            },
            animation: {
                'spinB': 'spinB 3s linear infinite'
            },
            boxShadow: {
                'image': '1rem 1rem 0 0 #48714D',
            }
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/forms'),
    ],
}