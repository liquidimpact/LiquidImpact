
/**
 * @fileoverview The CoffeeScript plugin.
 */

define('plugin-coffee', ['plugin-base'], function(require) {

  var plugin = require('plugin-base');
  var CoffeeScript = window.CoffeeScript;


  plugin.add({
    name: 'coffee',

    ext: ['.coffee', '#coffee'],

    load: function(url, callback) {
      return CoffeeScript.load(url, callback);
    }
  });

});
