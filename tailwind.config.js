import forms from '@tailwindcss/forms'
import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './node_modules/flowbite/**/*.js',
  ],

  theme: {
    extend: {
      fontFamily: {
        'ibm-plex-sans': ['IBM Plex Sans', defaultTheme.fontFamily.sans],
      },
      colors: {
        hellfire: '#FF2020', //vermelho
        radiation: '#2f9e41', //verde
        afterlife: '#FFFFFF', //branco
        purgatory: '#111311', //preto
      },
    },
  },

  plugins: [forms],
}