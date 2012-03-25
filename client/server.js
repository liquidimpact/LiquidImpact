var connect = require('connect');

var port = process.env.PORT || 8000;
console.log("service run on " + port);


app = connect()
.use(connect.logger({ format: ':method :url :status' }))
.use(connect.bodyParser())
.use(connect.cookieParser())
.use(connect.session({ secret: 'superwolf' }))
.use(connect.errorHandler({ dumpExceptions: true, showStack: true }))
.use(connect.bodyParser())
.listen(port);

app
.use('/', connect.static(__dirname + '/'));