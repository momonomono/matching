const path = require('path');

module.exports = {
    mode: "development",
    entry: "./resources/js/app.js",
    output: {
        filename: "app.js",
        path: path.join(__dirname, "/public/js")
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: "babel-loader",
                options: {
                    presets: [
                        "vue", "@babel/preset-env",
                    ],
                },
            }
        ]
    },
    resolve: {
        modules: [path.join(__dirname, '/resources/'), 'node_modules'],
        extensions: ['.js', '.jsx']
    }
}