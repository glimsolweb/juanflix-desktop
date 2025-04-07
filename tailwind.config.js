import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
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
            },
            colors: {
                'jf-white' : '#ffffff',
                'jf-white2' : '#E2E2E2',
                'jf-black' : '#000000',
                'jf-yellow' : '#FFC300',
                'jf-gray' : '#737373',
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
