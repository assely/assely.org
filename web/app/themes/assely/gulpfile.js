var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Assets Management
 |--------------------------------------------------------------------------
 |
 | Laravel Elixir provides a clean, fluent API for defining
 | basic Gulp tasks for your application. Elixir supports
 | several common CSS and JavaScript pre-processors.
 |
 */

elixir(function(mix) {
	// Mix application stylesheet.
    mix.sass('app.scss');

    mix // Mix application vendors scripts.
    	.scripts(['./node_modules/parsleyjs/dist/parsley.js'], 'public/js/parsley.js')
    	.scripts([
    		'./node_modules/prismjs/prism.js',
    		'./node_modules/prismjs/components/prism-php.js',
    	], 'public/js/prism.js')
    	.scripts([
    		'./node_modules/bootstrap/js/dist/util.js',
    		'./node_modules/bootstrap/js/dist/dropdown.js',
    	], 'public/js/bootstrap.js');

    mix // Mix application scripts grouped by loading placement.
    	.scriptsIn('resources/assets/js/home', 'public/js/home.js')
    	.scriptsIn('resources/assets/js/docs', 'public/js/docs.js')
        .scriptsIn('resources/assets/js/common', 'public/js/common.js');
});