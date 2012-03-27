port = process.env.PORT || 8000

connect = require('connect')
connect().listen(port).use('/', connect.static(__dirname + '/'))

console.log("service run on " + port)

