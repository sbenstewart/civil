(function(){
    var express = require('express');
    var app = express();
    var cors = require('cors');
    var logger = require('morgan');
    var bodyParser = require('body-parser');
    var config = require('./server/configs/config.json');
    var connection = require('./server/configs/dbConfig');
    var mailer = require('./server/configs/mailConfig');
    var port = config.port;
    var moment = require('moment');
    var dbHandler = require('./server/middlewares/dbHandler');
    var sessionHandler = require('./server/helpers/sessionHandler');
    var authHandler = require('./server/middlewares/authHandler');

    //------------------------------middlewares-----------------------------------------------//

    app.use(cors());
    app.use(logger('dev'));
    app.use(bodyParser.json({limit: '50mb'}));
    app.use(bodyParser.urlencoded({limit: '50mb', extended: true }));
    app.use(dbHandler(connection));
    app.use('/api/web/*',authHandler());
    app.use('/api/web/!*',authHandler());

    var routes = require('./server/index')(app);
    
    function ex() {
        var query = "DELETE from sessionStore where status=1";
        connection.query(query,function (err, data) {
            if(err){
                console.log('Attempt to clear cache failed');
            }
            else{
                console.log('Cleared store');
            }
        });
    }

    function clearResets() {
        var now = moment(moment.now())*1;
        var query = "DELETE from resets where expiry>"+now;
        connection.query(query,function (err, data) {
            if(err){
                console.log('Error cleaning');
            }
            else{
                console.log('Cleared');
            }
        });
    }

    setInterval(clearResets,3600000);

    setInterval(ex,86400000);
    
    app.listen(port);
    process.on('SIGINT',function () {
        connection.end(function(){
            console.log('App ended and DB connection Closed');
            mailer.close();
            process.exit(0);
        });
    });
    console.log("Server running on port "+port);
    module.exports = app;

})();