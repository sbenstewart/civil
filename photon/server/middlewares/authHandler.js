(function () {

    var responseHandler = require('../helpers/responseHandler');
    var connection = require('../configs/dbConfig');
    var moment = require('moment');
    var sessionHandler = require('../helpers/sessionHandler');

    module.exports = function (options) {
        var authHandler = function (req, res, next) {
            console.log('Called');
            var sessionid = req.headers['sessionid'];
            var token = req.headers['token'];
            if(sessionid && token){
                var query = 'SELECT * from sessionStore where sessionid='+'"'+sessionid+'"'+' and status='+0;
                connection.query(query,function (err, data) {
                    if(err){
                        return authHandler.authFailed('Auth failed',res);
                    }
                    else{
                        if(data.length === 0){
                            return authHandler.authFailed('Auth failed',res);
                        }
                        else{
                            var tokens = data[0].token;
                            var expiry = data[0].expiry;
                            console.log('Expiry:'+expiry);
                            if(tokens === token){
                                var exp = expiry*1;
                                console.log('Now:'+moment.now());
                                if(expiry > moment.now()){
                                    next();
                                }
                                else{
                                    sessionHandler.deleteSession(sessionid,function (err, data) {
                                        if(err){
                                            return authHandler.authFailed('Something went wrong',res);
                                        }
                                        else{
                                            return authHandler.authFailed('Token Expired',res);
                                        }
                                    });
                                }
                            }
                            else{
                                return authHandler.authFailed('Invalid Token',res);
                            }
                        }
                    }
                });
            }
            else{
                return authHandler.authFailed('Auth failed',res);
            }
        };
        authHandler.authFailed = function(msg, res){
            var error = new Error(msg);
            error.statusCode = 401;
            responseHandler.error(res, error);
        };
        return authHandler;
    };

})();