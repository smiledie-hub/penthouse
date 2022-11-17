const path = require("path");
const MiniCssExtractPlugin = require("../Plugins/MiniCssExtractPlugin");
const CleanWebpackPlugin = require("../Plugins/CleanWebpackPlugin");
const Scripts = require("../Presets/Scripts");
const Style = require("../Presets/Style");
const { dirs } = require('../Settings/Constants');

module.exports = {
	context: dirs.src,
	target: "web",
	entry: {
		main: path.join(dirs.src, "index.js")
	},
	output: {
		crossOriginLoading: "anonymous",
		path: dirs.dist,
		filename: 'js/[name].bundle.js',
		publicPath: "/",
		assetModuleFilename: '[path][name][ext]'
	},
	resolve: {
		modules: ['node_modules'],
	},
	plugins: [
		new CleanWebpackPlugin(),
		new MiniCssExtractPlugin({
			filename: "css/[name].css",
			chunkFilename: 'css/chunk-[name].css',
		}),
	],
	module: {
		rules: [
			Scripts,
			Style,
		],
	}
}