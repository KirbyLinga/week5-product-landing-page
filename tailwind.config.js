/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#982255',
                    dark: '#711A40',
                    light: '#B84A76',
                },
                secondary: {
                    DEFAULT: '#F6B73C',
                    dark: '#D89A22',
                },
                tertiary: {
                    DEFAULT: '#F8D7E3',
                    dark: '#F0BFD1',
                },
                neutral: {
                    DEFAULT: '#26161C',
                    muted: '#6B5A63',
                },
                cream: {
                    DEFAULT: '#FDF1F3',
                    dark: '#F7E3E8',
                },
            },
            fontFamily: {
                sans: ['Plus Jakarta Sans', 'ui-sans-serif', 'system-ui'],
                display: ['Epilogue', 'ui-sans-serif', 'system-ui'],
            },
            borderRadius: {
                xl2: '1.25rem',
            },
            boxShadow: {
                soft: '0 10px 30px -12px rgba(152, 34, 85, 0.25)',
                card: '0 4px 14px rgba(35, 22, 28, 0.08)',
            },
            keyframes: {
                'bounce-pulse': {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-4px)' },
                },
            },
            animation: {
                'bounce-pulse': 'bounce-pulse 0.4s ease-in-out',
            },
        },
    },
    plugins: [],
}