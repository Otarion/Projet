import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans], 
                judson: ['"Judson"', ...defaultTheme.fontFamily.sans],      
            },
            width:{
                '38':'9.5rem',
                '46':'11.5rem',
                '42':'10.5rem',
            },
            spacing:{
                '84':'21rem',
                '88':'22rem',
                '92':'23rem',
                '94':'23.5rem',
                '94.5':'23.85rem',
            },
        },
        color:{
            'marron': 'rgb(62, 38, 16)',
            'gris':'rgb(165, 165,165)',
        }
    },

    plugins: [
        require('@tailwindcss/forms')({
            strategy: 'class',
        }),
    ],
};
