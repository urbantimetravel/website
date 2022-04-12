module.exports = {
    purge: [
        'source/**/*.blade.php',
        'source/**/*.md',
        'source/**/*.html',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', "Segoe UI", 'Roboto', "Helvetica Neue", 'Arial', "Noto Sans", 'sans-serif', "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"]
            },

            colors: {
                'dark': {
                    950: '#0e1012',
                    900: '#19181F',
                    800: '#1E1B24',
                    700: '#23202A',
                    600: '#333139',
                    500: '#4f4d55',
                    400: '#999cb4',
                    300: '#C2C6DD',
                    200: '#d3d2d4',
                    100: '#e9e9ea',
                },
                'green': {
                    DEFAULT: '#00BE88',
                    '50': '#77FFD8',
                    '100': '#62FFD2',
                    '200': '#39FFC7',
                    '300': '#11FFBB',
                    '400': '#00E7A5',
                    '500': '#00BE88',
                    '600': '#008660',
                    '700': '#004E38',
                    '800': '#001610',
                    '900': '#000000'
                },
                'orange': {
                    DEFAULT: '#FF7800',
                    '50': '#FFD9B8',
                    '100': '#FFCEA3',
                    '200': '#FFB97A',
                    '300': '#FFA352',
                    '400': '#FF8E29',
                    '500': '#FF7800',
                    '600': '#C75E00',
                    '700': '#8F4300',
                    '800': '#572900',
                    '900': '#1F0E00'
                },
            },

            width: {
                '18': '4.5rem',
                '9/10': '90%',
            },

            height: {
                '18': '4.5rem',
            },

            inset: {
                '-25': '-6.25rem',
            },

            padding: {
                '18': '4.5rem',
                '23/50': '46%',
                '11/12': '91.666667%',
                '3/2': '150%',
            },

            transitionDuration: {
                '250': '250ms',
            },
        },
    },
    variants: {
        width: ['responsive', 'hover', 'group-hover'],
    },
    plugins: [],
};