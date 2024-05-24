const { defineConfig } = require('@vue/cli-service');

module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    // Removed disableHostCheck: true
    allowedHosts: [
      'enfant.innova.ma',
      'www.enfant.innova.ma',
      'localhost'  // Optionally add localhost if you access it locally
    ]
  }
});
