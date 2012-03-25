
/**
 * @fileoverview The LESS plugin.
 */

define('plugin-less', ['plugin-base'], function(require) {

  var plugin = require('plugin-base');
  var less = window.less;


  plugin.add({
    name: 'less',

    ext: ['.less', '#less'],

    load: function(url, callback) {
      return less.Parser.importer(url, [], function(tree) {
        createCSS(tree.toCSS(), url.replace(/[^\w]/g, '_'));
        callback();
      }, {});
    }
  });


  function createCSS(cssText, id) {
    var elem = document.getElementById(id);
    if (elem) return;

    elem = document.createElement('style');
    elem.id = id;
    document.getElementsByTagName('head')[0].appendChild(elem);

    if (elem.styleSheet) { // IE
      elem.styleSheet.cssText = cssText;
    } else { // W3C
      elem.appendChild(document.createTextNode(cssText));
    }
  }

});
