(function(){

    var connection = require('../configs/dbConfig');
    var commonService = require('../services/commonService');

    module.exports.createSession = function (user,userDetails, callback) {
        try{
            commonService.generateSession(user,userDetails,function (err, token) {
                callback(err,token);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.deleteSession = function (sessionId, callback) {
        try{
            commonService.deleteSession(sessionId,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.clearStore = function (callback) {
        try{
            commonService.clearStore(callback);
        }
        catch(err){
            callback(err);
        }
    }

})();