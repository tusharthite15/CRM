'use strict' // Enables strict mode in JavaScript

module.exports = () => ({
  map: {
    inline: false,
    annotation: true,
    sourcesContent: true
  },
  plugins: {
    autoprefixer: {
      cascade: false
    }
  }
})
