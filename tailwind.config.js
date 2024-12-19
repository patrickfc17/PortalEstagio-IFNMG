import forms from '@tailwindcss/forms'
import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/**/*.js',
    './node_modules/flowbite/**/*.js',
  ],

  theme: {
    extend: {
      fontFamily: {
        'ibm-plex-sans': ['IBM Plex Sans', defaultTheme.fontFamily.sans],
      },
      colors: {
        grade:  '#FF2020',
        leaf:   '#03D216',
        paper:  '#F5FFFD',
        ink:    '#111311',
      },
      fontStyle: {
        oblique: 'oblique',
      },
      fontSize: {
        sm:     '12px',
        md:     '14px',
        lg:     '16px',
        xl:     '20px',
        '2xl':  '24px',
        '3xl':  '32px',
      },
    },
  },

  plugins: [forms],
}
