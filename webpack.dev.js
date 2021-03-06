const merge = require('webpack-merge');
const path = require('path');
const common = require('./webpack.common.js');

module.exports = merge(common, {
  mode: 'development',
  devtool: 'inline-source-map',
  devServer: {
    contentBase: path.join(__dirname, 'dist'),
    // allowedHosts: ['datos.test']
    disableHostCheck: true
  },
  watchOptions: {
    ignored: ['/node_modules/']
  }
});
