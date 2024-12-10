import { tailwindClamp } from 'tailwind-clamp';

export default {
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ], { dot: true }),
  theme: {
    fontFamily: {
      'sans': 'Readex Pro, Helvetica, Arial, sans-serif',
      'oswald': 'Oswald, sans-serif',
    },
    extend: {},
  },
  plugins: [tailwindClamp],
};
