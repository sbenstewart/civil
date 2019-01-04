(function () {
    var mysql = require('mysql');
    var config = require('./config.json');
    var db = config.prod;

    var connection = mysql.createConnection({
        host : db.host,
        port : db.port,
        user : db.username,
        password : db.password,
        database : db.database,
        multipleStatements : true
    });

    try{
        connection.connect(function (err) {
            if(err){
                console.log("DB connection exception:"+err.message);
            }
            else{
                console.log('DB connection established');
            }
        });
    }
    catch (err){
        console.log("DB connection exception:"+err.message);
    }

    module.exports = connection;

})();