const BabelLoader = require("../Loaders/BabelLoader");

module.exports = {
    test: /\.(mjs|js)$/,
    exclude: /node_modules/,
    use: [
        BabelLoader
    ]
}