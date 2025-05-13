import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                CreatoDisplayBold: ['CreatoDisplay-Bold', 'sans-serif'],
                CreatoDisplayExtraBold: ['CreatoDisplay-ExtraBold', 'sans-serif'],
                CreatoDisplayMedium: ['CreatoDisplay-Medium', 'sans-serif'],
                CreatoDisplayRegular: ['CreatoDisplay-Regular', 'sans-serif'],
            },
            colors: {
                'jf-white' : '#ffffff',
                'jf-white2' : '#E2E2E2',
                'jf-white3' : '#C1C1C1',
                'jf-black' : '#000000',
                'jf-yellow' : '#FFC300',
                'jf-red' : '#ff4949',
                'jf-gray' : '#737373',
                'jf-gray-transparent' : '#262626B3',
            }
        },
    },

    plugins: [forms, typography,
        plugin(function({ addBase, theme }) {
            addBase({
                'h1': { fontSize: theme('fontSize.2xl') }
            })
        })
      ],
};
