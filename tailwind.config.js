module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    extend: {
      colors: {
        'ets-blue': '#007eb9',
        'ets-green': '#96c22f',
        'ets-darkblue': '#15325a'
      }
    },
  },
  plugins: [],
};
