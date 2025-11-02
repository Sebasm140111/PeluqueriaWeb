import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
content: [
'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
'./storage/framework/views/*.php',
'./resources/views/**/*.blade.php',
],

theme: {
extend: {
colors: {
brand: {
DEFAULT: '#D4AF37', // dorado elegante
600: '#B38F24',
700: '#8C6F1B',
},
},
fontFamily: {
sans: ['Figtree', ...defaultTheme.fontFamily.sans],
},
boxShadow: {
'elev': '0 8px 24px rgba(0,0,0,.08)',
},
},
},

plugins: [forms],
};
