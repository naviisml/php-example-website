// webpack.config.js
'use strict';

const path = require('path')

const VueLoaderPlugin = require('vue-loader/lib/plugin')

module.exports = [
    {
        mode: 'development',
        entry: [
            './resources/js/app.js',
            './resources/scss/app.scss',
        ],
        output: {
            path: path.resolve(__dirname, 'public/assets/'),
            filename: 'js/scripts.js',
            chunkFilename: 'js/[id].[hash].js',
        },
        resolve: {
            extensions: ['.js', '.json', '.vue'],
            alias: {
                '~': path.join(__dirname, '/src/resources/assets/js')
            }
        },
        module: {
            rules: [
                {
                    test: /\.vue$/,
                    loader: 'vue-loader'
                },
    			{
    				test: /\.scss$/,
    				use: [
    					{
    						loader: 'file-loader',
    						options: {
    							name: 'css/styles.css',
    						}
    					},
    					{
    						loader: 'extract-loader'
    					},
    					{
    						loader: 'css-loader?-url'
    					},
    					{
    						loader: 'sass-loader'
    					}
    				]
    			},
                {
                    test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                    use: [
                        {
                            loader: 'file-loader',
                            options: {
                                name: '[name].[ext]',
                                outputPath: 'assets/fonts/'
                            }
                        }
                    ]
                }
            ]
        },
        plugins: [
            new VueLoaderPlugin()
        ]
    }
]
