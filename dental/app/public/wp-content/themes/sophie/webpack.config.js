const TerserPlugin = require('terser-webpack-plugin');

module.exports = {
  mode: 'production', // 本番用（開発ならdevelopment（圧縮されない））
  entry: './js/src/main.js', // バンドル前のエントリポイント
  output: {
    // バンドル先
    filename: 'main.bundle.js',
  },
  optimization: {
    minimizer: [
      // js圧縮
      new TerserPlugin({
        extractComments: 'all', // コメント削除
        terserOptions: {
          compress: {
            drop_console: true, // console.log削除
          },
        },
      }),
    ],
  },
};
