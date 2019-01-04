(function () {

    var connection = require('../configs/dbConfig');

    module.exports.getUsers = function (callback) {
        var query = "SELECT * from users";
        connection.query(query,function (err, data) {
            callback(err,data);
        });
    };

    module.exports.getWorkshop1 = function (callback) {
        var query = "SELECT * from orders o join users u where o.cid = u.cid and eventName="+'"Construction Project Management"';
        connection.query(query,function (err, data) {
            callback(err,data);
        });
    };

    module.exports.getWorkshop2 = function (callback) {
        var query = "SELECT * from orders o join users u where o.cid = u.cid and eventName="+'"Cable stayed bridges"';
        connection.query(query,function (err, data) {
            callback(err,data);
        });
    };

    module.exports.getWorkshop3 = function (callback) {
        var query = "SELECT * from orders o join users u where o.cid = u.cid and eventName="+'"Workshop on measurement"';
        connection.query(query,function (err, data) {
            callback(err,data);
        });
    };

    module.exports.getAccomodation = function (callback) {
        var query = 'SELECT * from accorders o join users u where o.cid = u.cid';
        connection.query(query,function (err, data) {
            callback(err,data);
        });
    };

    module.exports.getDump1 = function (callback) {
        var query = "SELECT * from dumporders where eventName="+'"Construction Project Management"';
        connection.query(query,function (err, data) {
            callback(err,data);
        });
    };

    module.exports.getDump2 = function (callback) {
        var query = "SELECT * from dumporders where eventName="+'"Cable Stayed Bridges"';
        connection.query(query,function (err, data) {
            callback(err,data);
        });
    };

    module.exports.getDump = function (callback) {
        var query = "SELECT * from accdump";
        connection.query(query,function (err, data) {
            callback(err,data);
        });
    }

})();