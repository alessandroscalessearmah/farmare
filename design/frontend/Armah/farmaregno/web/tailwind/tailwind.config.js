const {
  spacing
} = require('tailwindcss/defaultTheme');

const colors = require('tailwindcss/colors');

const hyvaModules = require('@hyva-themes/hyva-modules');

module.exports = hyvaModules.mergeTailwindConfig({
  theme: {
    extend: {
      screens: {
        'sm': '640px',
        // => @media (min-width: 640px) { ... }
        'md': '768px',
        // => @media (min-width: 768px) { ... }
        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }
        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }
        '2xl': '1536px' // => @media (min-width: 1536px) { ... }

      },
      fontFamily: {
        sans: ["Manrope", "sans-serif"]
      },
      colors: {
        primary: {
          '50': '#eefdfc',
          '100': '#d3f9fa',
          '200': '#acf1f5',
          '300': '#73e6ed',
          '400': '#32d0de',
          '500': '#17b3c3',
          '600': '#1691a4',
          '700': '#187486',
          lighter: '#1d5e6d',
          DEFAULT: '#18434f',
          darker: '#0d343f',
        },
        secondary: {
          '50': '#f8f7f4',
          lighter: '#efede5',
          DEFAULT: '#dcd7c9',
          darker: '#c7bfaa',
          '400': '#b0a187',
          '500': '#a08d6f',
          '600': '#937d63',
          '700': '#7b6753',
          '800': '#655547',
          '900': '#53463b',
          '950': '#2c241e',
        },
        giallo: {
          '50': '#ffffea',
          '100': '#fffcc5',
          '200': '#fffa85',
          '300': '#fff046',
          lighter: '#ffe21b',
          DEFAULT: '#ffc300',
          darker: '#e29700',
          '700': '#bb6b02',
          '800': '#985308',
          '900': '#7c430b',
          '950': '#482300',
        },
        verde: {

          '50': '#f4f9f8',
          '100': '#d9eee9',
          '200': '#b4dbd3',
          lighter: '#86c2b8',
          DEFAULT: '#5ca49a',
          darker: '#438980',
          '600': '#346d67',
          '700': '#2c5954',
          '800': '#274846',
          '900': '#243d3b',
          '950': '#102322',
        },
        background: {
          lighter: colors.blue['100'],
          "DEFAULT": colors.blue['200'],
          darker: colors.blue['300']
        },
        green: colors.emerald,
        yellow: colors.amber,
        purple: colors.violet
      },
      textColor: {
        orange: colors.orange,
        red: {
          ...colors.red,
          "DEFAULT": colors.red['500']
        },
        primary: {
          '50': '#eefdfc',
          '100': '#d3f9fa',
          '200': '#acf1f5',
          '300': '#73e6ed',
          '400': '#32d0de',
          '500': '#17b3c3',
          '600': '#1691a4',
          '700': '#187486',
          lighter: '#1d5e6d',
          DEFAULT: '#18434f',
          darker: '#0d343f',
        },
        secondary: {
          '50': '#f8f7f4',
          lighter: '#efede5',
          DEFAULT: '#dcd7c9',
          darker: '#c7bfaa',
          '400': '#b0a187',
          '500': '#a08d6f',
          '600': '#937d63',
          '700': '#7b6753',
          '800': '#655547',
          '900': '#53463b',
          '950': '#2c241e',
        },
        giallo: {
          '50': '#ffffea',
          '100': '#fffcc5',
          '200': '#fffa85',
          '300': '#fff046',
          lighter: '#ffe21b',
          DEFAULT: '#ffc300',
          darker: '#e29700',
          '700': '#bb6b02',
          '800': '#985308',
          '900': '#7c430b',
          '950': '#482300',
        },
        arancio: {
          '50': '#fff9ec',
          '100': '#fff1d3',
          '200': '#ffdfa5',
          '300': '#ffc66d',
          '400': '#ffa232',
          lighter: '#ff860a',
          DEFAULT: '#ff6d00',
          darker: '#cc4e02',
          '800': '#a13d0b',
          '900': '#82340c',
          '950': '#461804',
        },
        verde: {

          '50': '#f4f9f8',
          '100': '#d9eee9',
          '200': '#b4dbd3',
          lighter: '#86c2b8',
          DEFAULT: '#5ca49a',
          darker: '#438980',
          '600': '#346d67',
          '700': '#2c5954',
          '800': '#274846',
          '900': '#243d3b',
          '950': '#102322',
        }

      },
      backgroundColor: {
        primary: {
          '50': '#eefdfc',
          '100': '#d3f9fa',
          '200': '#acf1f5',
          '300': '#73e6ed',
          '400': '#32d0de',
          '500': '#17b3c3',
          '600': '#1691a4',
          '700': '#187486',
          lighter: '#1d5e6d',
          DEFAULT: '#18434f',
          darker: '#0d343f',
        },
        secondary: {
          '50': '#f8f7f4',
          lighter: '#efede5',
          DEFAULT: '#dcd7c9',
          darker: '#c7bfaa',
          '400': '#b0a187',
          '500': '#a08d6f',
          '600': '#937d63',
          '700': '#7b6753',
          '800': '#655547',
          '900': '#53463b',
          '950': '#2c241e',
        },
        giallo: {
          '50': '#ffffea',
          '100': '#fffcc5',
          '200': '#fffa85',
          '300': '#fff046',
          lighter: '#ffe21b',
          DEFAULT: '#ffc300',
          darker: '#e29700',
          '700': '#bb6b02',
          '800': '#985308',
          '900': '#7c430b',
          '950': '#482300',
        },
        arancio: {
          '50': '#fff9ec',
          '100': '#fff1d3',
          '200': '#ffdfa5',
          '300': '#ffc66d',
          '400': '#ffa232',
          lighter: '#ff860a',
          DEFAULT: '#ff6d00',
          darker: '#cc4e02',
          '800': '#a13d0b',
          '900': '#82340c',
          '950': '#461804',
        },
        verde: {

          '50': '#f4f9f8',
          '100': '#d9eee9',
          '200': '#b4dbd3',
          lighter: '#86c2b8',
          DEFAULT: '#5ca49a',
          darker: '#438980',
          '600': '#346d67',
          '700': '#2c5954',
          '800': '#274846',
          '900': '#243d3b',
          '950': '#102322',
        },
        container: {
          lighter: '#ffffff',
          "DEFAULT": '#fafafa',
          darker: '#f5f5f5'
        }
      },
      borderColor: {
        primary: {
          '50': '#eefdfc',
          '100': '#d3f9fa',
          '200': '#acf1f5',
          '300': '#73e6ed',
          '400': '#32d0de',
          '500': '#17b3c3',
          '600': '#1691a4',
          '700': '#187486',
          lighter: '#1d5e6d',
          DEFAULT: '#18434f',
          darker: '#0d343f',
        },
        secondary: {
          '50': '#f8f7f4',
          lighter: '#efede5',
          DEFAULT: '#dcd7c9',
          darker: '#c7bfaa',
          '400': '#b0a187',
          '500': '#a08d6f',
          '600': '#937d63',
          '700': '#7b6753',
          '800': '#655547',
          '900': '#53463b',
          '950': '#2c241e',
        },
        giallo: {
          '50': '#ffffea',
          '100': '#fffcc5',
          '200': '#fffa85',
          '300': '#fff046',
          lighter: '#ffe21b',
          DEFAULT: '#ffc300',
          darker: '#e29700',
          '700': '#bb6b02',
          '800': '#985308',
          '900': '#7c430b',
          '950': '#482300',
        },
        arancio: {
          '50': '#fff9ec',
          '100': '#fff1d3',
          '200': '#ffdfa5',
          '300': '#ffc66d',
          '400': '#ffa232',
          lighter: '#ff860a',
          DEFAULT: '#ff6d00',
          darker: '#cc4e02',
          '800': '#a13d0b',
          '900': '#82340c',
          '950': '#461804',
        },
        verde: {

          '50': '#f4f9f8',
          '100': '#d9eee9',
          '200': '#b4dbd3',
          lighter: '#86c2b8',
          DEFAULT: '#5ca49a',
          darker: '#438980',
          '600': '#346d67',
          '700': '#2c5954',
          '800': '#274846',
          '900': '#243d3b',
          '950': '#102322',
        },
        container: {
          lighter: '#f5f5f5',
          "DEFAULT": '#e7e7e7',
          darker: '#b6b6b6'
        }
      },
      minWidth: {
        8: spacing["8"],
        20: spacing["20"],
        40: spacing["40"],
        48: spacing["48"]
      },
      minHeight: {
        14: spacing["14"],
        'screen-25': '25vh',
        'screen-50': '50vh',
        'screen-75': '75vh'
      },
      maxHeight: {
        '0': '0',
        'screen-25': '25vh',
        'screen-50': '50vh',
        'screen-75': '75vh'
      },
      container: {
        center: true,
        padding: '1.5rem'
      }
    }
  },
  plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
  // Examples for excluding patterns from purge
  content: [
    // this theme's phtml and layout XML files
    '../../**/*.phtml',
    '../../*/layout/*.xml',
    // parent theme in Vendor (if this is a child-theme)
    '../../../../../../../vendor/hyva-themes/magento2-default-theme/**/*.phtml',
    // app/code phtml files (if need tailwind classes from app/code modules)
    //'../../../../../../../app/code/**/*.phtml',
  ]
});
