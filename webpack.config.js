/*
    npm i node-sass postcss-loader@3.0.0 postcss-preset-env sass-loader css-loader cssnano mini-css-extract-plugin cross-env file-loader npm-watch webpack webpack-cli copy-webpack-plugin -D
*/

const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const postcssPresetEnv = require("postcss-preset-env");

const devMode = false;

module.exports = {
    mode: devMode ? "development" : "production",
    entry: [
        "./resources/css/app.css",
        "./resources/js/app.js",
        "./resources/scss/app.scss",
    ],

    output: {
        filename: "app.min.js",
        path: path.resolve(__dirname, "public/dist"),
        library: "mylib",
        libraryTarget: "var",
    },

    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                    },
                    {
                        loader: "css-loader",
                        options: {
                            importLoaders: 2,
                        },
                    },
                ],
            },
            {
                test: /\.(sa|sc)ss$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                    },
                    {
                        loader: "css-loader",
                        options: {
                            importLoaders: 2,
                        },
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            ident: "postcss",
                            plugins: devMode
                                ? () => []
                                : () => [
                                      postcssPresetEnv({
                                          browsers: [">1%"],
                                      }),
                                      require("cssnano")(),
                                  ],
                        },
                    },
                    {
                        loader: "sass-loader",
                    },
                ],
            },
        ],
    },

    plugins: [
        new MiniCssExtractPlugin({
            filename: devMode ? "css/app.css" : "css/app.min.css",
        }),
    ],
};
