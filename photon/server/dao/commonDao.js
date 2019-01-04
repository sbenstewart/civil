(function(){
    var connection = require('../configs/dbConfig');
    var moment = require('moment');

    module.exports.enterSession = function (sessionDetails, callback) {
        try{
            console.log('param:');
            console.log(sessionDetails);
            var sa = sessionDetails.sa;
            var param = sessionDetails;
            delete param.name;
            delete param.ev;
            delete param.sa;
            var query = "INSERT into sessionStore set ?";
            connection.query(query,param,function (err, data) {
                var secret = {};
                secret.sessionid = param.sessionid;
                secret.token = param.token;
                var q = 'SELECT name from users where email='+'"'+param.email+'"';
                connection.query(q,function (err, data) {
                    if(err){
                        callback(err);
                    }
                    else{
                        if(data.length>0){
                            secret.sa = sa;
                            secret.name = data[0].name;
                            callback(err,secret);
                        }
                        else{
                            callback({message:"Something went wrong"});
                        }
                    }
                });
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.deleteSession = function (sessionId, callback) {
        try{
            var query = "UPDATE sessionStore set status="+1+" where sessionId="+'"'+sessionId+'"';
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.clearStore = function (callback) {
        try{
            var query = "DELETE from sessionStore where status=1";
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getWorkshops = function (callback) {
        try{
            var query = "SELECT * from workshops";
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.deleteSessionAnyway = function (email, callback) {
        try{
            var query = 'UPDATE sessionStore set status=1 where email='+'"'+email+'"';
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getEvents = function (callback) {
        try{
            var query = "SELECT * from events";
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.checkUser = function (email, callback) {
        try{
            var query = 'SELECT * from users where email='+'"'+email+'"';
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.mapSecret = function (email, secret, password, callback) {
        try{
            var param = {};
            param.email = email;
            param.secret = secret;
            param.password = password;
            param.expiry = (moment(moment.now()).add(1,'hours'))*1;
            console.log('param:');
            console.log(param);
            var query = "INSERT into resets set ?";
            connection.query(query,param,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getUsername = function (email, callback) {
        try{
            console.log(email);
            var query = "SELECT name,cid from users where email=?";
            connection.query(query,[email.email],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getcid = function (email,callback) {
        try{
            console.log(email);
            var query = "SELECT cid from users where email = ?";
            connection.query(query,[email],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.updatePayment = function (email,wid, callback) {
        try{
            var query = 'UPDATE workshopregistration set status='+'"Paid"'+' where email='+'"'+email+'"'+' and workshop='+wid;
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getWorkshopId = function (eventName, callback) {
        try{
            var query = "SELECT id from workshops where name=?";
            connection.query(query,[eventName],function (err, data) {
                if(err){
                    callback(err);
                }
                else{
                    if(data.length>0){
                        callback(null,data[0].id);
                    }
                    else{
                        callback({message:"Invalid workshop"});
                    }
                }
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.insertDump = function (email, uniqueOrderId, eventName, callback) {
        try{
            var query = "INSERT into dumporders set ?";
            var param = {};
            param.email = email;
            param.uniqueOrderId = uniqueOrderId;
            param.eventName = eventName;
            connection.query(query,param,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.enterOrder = function (param, callback) {
        try{
            console.log(param);
            var query = "INSERT into orders set ?";
            connection.query(query,param,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getAccId = function (ename,eventName, callback) {
        try{
            var query = "SELECT * from acc where ticket=? and name=?";
            connection.query(query,[eventName,ename],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.updateAccomodation = function (acc, cid, callback) {
        try{
            console.log(acc);
            console.log(cid);
            var query = 'UPDATE accomodation set status='+'"Paid"'+' where cid=? and acc=?';
            connection.query(query,[cid,acc],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.enterAccOrder = function (param, callback) {
        try{
            var query = "INSERT into accorders set ?";
            connection.query(query,param,function (err, data) {
                callback(err,data);
            });
        }
        catch (err){
            callback(err);
        }
    };

    module.exports.dumpAcc = function (param, callback) {
        try{
            var query = "INSERT into accdump set ?";
            connection.query(query,param,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getAmbassadors = function (callback) {
        try{
            var query = "select * from ambassadors a join users u on a.user=u.email";
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getCount = function (referral, callback) {
        try{
            var query = "SELECT * from workshopregistration where referral=? and status='Paid'";
            connection.query(query,[referral],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    }


})();