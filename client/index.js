seajs.config({
	base: './',
	debug:true,
  	preload: ['plugin-coffee', 'plugin-less']
});


define(function(require) {
	console.log('begin');
	$LAB
	.script('./lib/json2.js')
	.script('./lib/jquery-1.7.1.min.js')
	.script('./lib/jquery.tmpl.js')
	.script('./lib/underscore-1.3.1.js').wait()
	.script('./lib/backbone.js')
	.script('./bootstrap/js/bootstrap.js').wait(function(){
		require('index.coffee');	
		require('index.less');
	})
});
