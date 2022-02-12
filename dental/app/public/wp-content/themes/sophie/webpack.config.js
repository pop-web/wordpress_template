const TerserPlugin = require("terser-webpack-plugin");

module.exports = {
  mode: "production",
  entry: "./js/src/main.js",
  output: {
    // バンドル後の名前
    filename: "bundle.js",
  },
  optimization: {
    minimizer: [
      new TerserPlugin({
        extractComments: "all",
        terserOptions: {
          compress: {
            drop_console: false,
          },
        },
      }),
    ],
  },
};
