(function () {
    var connection = require('../configs/dbConfig');
    var tokenGenerator = require('voucher-code-generator');

    module.exports.register = function (userDetails, callback) {
        try{
            var query = "INSERT into users set ?";
            connection.query(query,userDetails,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.login = function (userDetails, callback) {
        try{
            var email = userDetails.email;
            var query = "SELECT * from users where email=?";
            connection.query(query,email,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.logout = function (userDetails, callback) {
        try{
            var query = 'UPDATE users set lf='+0+' where email='+'"'+userDetails.email+'"';
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.updateLogin = function (userDetails, callback) {
        try{
            var query = 'UPDATE users set lf='+1+' where email='+'"'+userDetails.email+'"';
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.checkLogin = function (userDetails, callback) {
        try{
            var query = 'SELECT lf from users where email='+'"'+userDetails.email+'"';
            connection.query(query,function (err, data) {
                if(err){
                    callback(err);
                }
                else{
                    if(data.length>0){
                        if(data[0].lf === 1){
                            callback({message:"User already logged in",statusCode:440});
                        }
                        else{
                            callback(null,null);
                        }
                    }
                    else{
                        callback({message:"User does not exist",statusCode:420});
                    }
                }
            })
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.gencid = function (callback) {
        var token = tokenGenerator.generate({
            length : 6,
            count : 1,
            charset : tokenGenerator.charset("alphanumeric")
        }).toString().toUpperCase();
        callback(null,token);
    };

    module.exports.checkLink = function (secret, email, callback) {
        try{
            var query = "SELECT password,expiry from resets where secret=? and email=?";
            connection.query(query,[secret,email],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.updatePassword = function (email, password,callback) {
        try{
            var query = "UPDATE users set password=? where email = ?";
            connection.query(query,[password,email],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.clearMap = function (email, callback) {
        try{
            var query = "DELETE from resets where email=?";
            connection.query(query,[email],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    }

})();