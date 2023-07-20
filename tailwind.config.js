const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        container: {
            center: true,
            padding: '1rem',
            screens: {
                lg: '1234px'
            }
        },
        extend: {
            fontFamily: {
                'inter': ['Inter', 'sans-serif'],
                'sans': ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                /* black color shades */
                'ruby-900': '#101828',
                'ruby-800': '#1D2939',
                'ruby-700': '#344054',
                'ruby-600': '#475467',
                'ruby-500': '#667085',
                'ruby-400': '#98A2B3',
                'ruby-300': '#D0D5DD',
                'ruby-200': '#EAECF0',
                'ruby-100': '#F5F5F5',
                'ruby-50': '#F9FAFB',
                'ruby-25': '#FCFCFD',

                /* blue color shades */
                'pearl-900': '#42307D',
                'pearl-800': '#53389E',
                'pearl-700': '#6941C6',
                'pearl-600': '#7F56D9',
                'pearl-500': '#9E77ED',
                'pearl-400': '#B692F6',
                'pearl-300': '#D6BBFB',
                'pearl-200': '#E9D7FE',
                'pearl-100': '#F4EBFF',
                'pearl-50': '#F9F5FF',


                /* yellow color shades */
                'opal-alpha': '#F6B704',
                'opal-beta': '#FFE496',
            },
            height:{
                '9.5': '2.375rem',
            },
            lineHeight: {
                '30': '30px',
                '44': '44px',
                '48': '48px',
            },
            fontSize: {
                vs: '0.5rem',
                10: '0.625rem',
                11: '0.688rem',
                13: '0.8125rem',
                15: '0.938rem',
                20: '1.25rem',
                21: '1.313rem',
                22: '1.375rem',
                23: '1.5rem',
                26: '1.625rem',
                30: '1.875rem',
                xxs: '0.625rem',
                xxxs: '0.688rem',
                xsm: '0.813rem',
                'x-base': '0.938rem',
                'xl-base': '1.063rem',
                xxl: '1.375rem',
                'xxl-base': '1.188rem',
                '2.5xl': '1.75rem',
                '3.5xl': '2rem',
                '3.6xl': '2.125rem',
                '4.5xl': '2.5rem',
                42: '2.625rem',
                '5.5xl': '3.5rem'
            },
            spacing: {
                4.5: '1.125rem',
                4.75: '1.188rem',
                5.5: '1.375rem',
                6.5: '1.625rem',
                7.5: '1.875rem',
                8.75: '2.188rem',
                9.5: '2.375rem',
                10.5: '2.625rem',
                11.5: '2.875rem',
                13: '3.25rem',
                15: '3.75rem',
                18: '4.5rem',
                21: '5.25rem',
                21.25: '5.313rem'
            },
            boxShadow: {
                light: '0px 1px 2px rgba(16, 24, 40, 0.05)',
                medium:'0px 2px 4px rgba(0, 0, 0, 0.12)',
                xll: '0 0 8px rgba(0, 0, 0, 0.2)',
                xss: '0px 4px 4px rgba(0, 0, 0, 0.25)',
                xsss: '0px 4px 4px rgba(0, 0, 0, 0.12)',
                smm: '0 6px 17px 0 rgb(0 0 0 / 5%)',
                lgg: '0px 4px 12px rgba(0, 0, 0, 0.12)',
                mdd: '0px -2px 20px rgba(0, 0, 0, 0.12);',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
