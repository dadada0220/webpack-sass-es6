const webpack = require('webpack');
const path = require('path');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
const TerserPlugin = require('terser-webpack-plugin');

/**
 * 出力元と出力先のディレクトリを定義
 */
const dir = {
  src: path.join(__dirname, '_src'),
  public: {
    base: path.join(__dirname, 'public/assets'),
    css: 'css/',
    js: 'js/',
  }
};

module.exports = [
  {
    /**
     * 出力先ファイル名: 出力元ファイル名（エントリーポイント）
     */
    entry: {
      application: path.resolve(dir.src, 'js/_index.js'),
      'style.css': path.resolve(dir.src, 'sass/_index.sass'),
    },
    output: {
      filename: dir.public.js + '[name].js',
      path: dir.public.base,
    },
    plugins: [
      new RemoveEmptyScriptsPlugin(),
      new MiniCssExtractPlugin({
        filename: dir.public.css + '[name]',
      }),
    ],
    resolve: {
      modules: ['node_modules'],
      extensions: ['.js', '.css'],
    },
    devtool: 'source-map',
    optimization: {
      minimizer: [
        new CssMinimizerPlugin(),
        new TerserPlugin({
          terserOptions: {
            ecma: 6,
            compress: {
              drop_console: true, // build時にconsole.logを出力しない
            },
            output: {
              comments: false,
              beautify: false,
            },
          },
        }),
      ],
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: [
            {
              loader: 'babel-loader',
              options: {
                presets: [
                  '@babel/preset-env'
                ],
                plugins: [
                  '@babel/plugin-transform-runtime'
                ],
              },
            },
          ],
        },
        {
          test: /\.(sass|scss|css)$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader,
            },
            {
              loader: 'css-loader',
              options: {
                url: false,
                sourceMap: true,
                importLoaders: 2,
              },
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true,
              },
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMap: true,
              },
            },
          ],
        },
      ],
    }
  }
];
