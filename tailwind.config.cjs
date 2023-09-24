import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const plugin = require('tailwindcss/plugin');


/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'sm': {'min': '640px'},
      
            'md': {'min': '768px'},
      
            'lg': {'min': '1024px'},
      
            'xl': {'min': '1280px'},
          },
          fontFamily: {
            sans: ['Ubuntu', ...defaultTheme.fontFamily.sans],
        },
        extend: {            
            colors: {
                "light" : "#9ca3af",
                "dark": "#042f2e",
                "panel-dark": "#115e59",
                "primary": "#1f4b8e",
                "primary-dark": "#102a52",
                "secondary": "#182430",
                "secondary-dark": "#060C11",
              }
        },
    },

    plugins: [
        forms,
        plugin(function({addUtilities, theme}){
            const newUtilities = {
                '.custom-scrollbar': {
                    '.custom-scrollbar::-webkit-scrollbar': { width: '6px' },
                    '.custom-scrollbar::-webkit-scrollbar-track': { background: theme('bg-secondary')},
                    '.custom-scrollbar::-webkit-scrollbar-thumb': { background: '#888' },
                    '.custom-scrollbar::-webkit-scrollbar-thumb:hover': {background: '#555'},
            }
        }
        addUtilities(newUtilities, ['responsive', 'hover'])
        })
    ],
};
