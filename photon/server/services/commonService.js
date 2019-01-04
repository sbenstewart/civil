(function () {
    var connection = require('../configs/dbConfig');
    var tokenGenerator = require('voucher-code-generator');
    var saltRounds = 10;
    var commonDao = require('../dao/commonDao');
    var bcrypt = require('bcrypt');
    var transformer = require('../helpers/transformer');


    module.exports.beginTransaction = function (callback) {
        try{
            connection.beginTransaction(function(err){
                callback(err);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.rollback = function(callback){
        try{
            connection.rollback(function(err){
                callback(err);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.commit = function(callback){
        try{
            connection.commit(function(err){
                callback(err);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.generateToken = function (length, prefix, callback) {
        try{
            var token = tokenGenerator.generate({
                length : length,
                count : 1,
                charset : tokenGenerator.charset("alphanumeric"),
                prefix : prefix
            }).toString().toUpperCase();
            if(token){
                callback(null,token);
            }
            else{
                callback({message:"Error generating token"});
            }
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.generateHash = function (password,callback) {
        try{
            bcrypt.hash(password,saltRounds,function (err, hash) {
                if(err){
                    callback(err);
                }
                else{
                    callback(null,hash);
                }
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.generateSession = function (user,userDetails, callback) {
        try{
            var sessionToken = tokenGenerator.generate({
                length : 20,
                count : 1,
                charset : tokenGenerator.charset("alphanumeric")
            }).toString();
            var sessionId = tokenGenerator.generate({
                length : 10,
                count : 1,
                charset : tokenGenerator.charset("alphanumeric")
            }).toString();
            transformer.genSessionDetails(user,sessionId,sessionToken,userDetails,function (err, session) {
                if(err){
                    callback(err);
                }
                else{
                    console.log('Session: '+session);
                    commonDao.enterSession(session,function (err, token) {
                        callback(err,token);
                    });
                }
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.checkHash = function (pass,password, callback) {
        try{
            bcrypt.compare(pass,password,function (err, result) {
                if(err){
                    callback({message:"Something went wrong"});
                }
                else{
                    if(result === true){
                        callback(null,result);
                    }
                    else{
                        callback({message:"Invalid Password",statusCode:420});
                    }
                }
            })
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.deleteSession = function (sessionId, callback) {
        try{
            commonDao.deleteSession(sessionId,callback);
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.clearStore = function (callback) {
        commonDao.clearStore(callback);
    };

    module.exports.getWorkshops = function (callback) {
        commonDao.getWorkshops(callback);
    };

    module.exports.deleteSessionAnyway = function (email, callback) {
        commonDao.deleteSessionAnyway(email,callback);
    };

    module.exports.getEvents = function (callback) {
        commonDao.getEvents(callback);
    };

    module.exports.checkUser = function (email, callback) {
        commonDao.checkUser(email,callback);
    };

    module.exports.mapSecret = function (email, secret, password, callback) {
        commonDao.mapSecret(email,secret,password,callback);
    };

    module.exports.getUsername = function (email, callback) {
        commonDao.getUsername(email,callback);
    };

    module.exports.updatePayment = function (email,wid, callback) {
        commonDao.updatePayment(email,wid,callback);
    };

    module.exports.getWorkshopId = function (eventName, callback) {
        commonDao.getWorkshopId(eventName,callback);
    };

    module.exports.enterOrder = function (param, callback) {
        commonDao.enterOrder(param,callback);
    };

    module.exports.getcid = function (email, callback) {
        commonDao.getcid(email,callback);
    };

    module.exports.insertDump = function (email, uniqueOrderId, eventName, callback) {
        commonDao.insertDump(email,uniqueOrderId,eventName,callback);
    };

    module.exports.getAccId = function (ename,eventName, callback) {
        commonDao.getAccId(ename,eventName,callback);
    };

    module.exports.updateAccomodation = function (acc, cid, callback) {
        commonDao.updateAccomodation(acc,cid,callback);
    };

    module.exports.enterAccOrder = function (param, callback) {
        commonDao.enterAccOrder(param,callback);
    };

    module.exports.dumpAcc = function (param, callback) {
        commonDao.dumpAcc(param,callback);
    };

    module.exports.getAmbassadors = function (callback) {
        commonDao.getAmbassadors(callback);
    };

    module.exports.getCount = function (referral, callback) {
        commonDao.getCount(referral,callback);
    };

})();