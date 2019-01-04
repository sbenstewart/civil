(function () {

    var connection = require('../configs/dbConfig');

    module.exports.getUser = function (sessionId, callback) {
        try{
            var query = 'SELECT email from sessionStore where sessionid='+'"'+sessionId+'"';
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getUserDetails = function (email, callback) {
        try{
            var query = "SELECT * from users where email=?";
            connection.query(query,[email],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.addRefScore = function (email,referral,callback) {
        try{
            fetchExistingCount(email,referral,function (err, count) {
                if(err){
                    callback(err);
                }
                else{
                    var updatedCount = count+1;
                    var query = 'UPDATE ambassadors set count='+updatedCount+' where referral='+'"'+referral+'"';
                    connection.query(query,function (err, data) {
                        callback(err,data);
                    });
                }
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.regEvents = function (email, callback) {
        try{
            var query = 'UPDATE users set eventFlag=1 where email='+'"'+email+'"';
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    function fetchExistingCount(email,referral,callback) {
        try{
            var query = 'SELECT count from ambassadors where referral='+'"'+referral+'"';
            connection.query(query,function (err, data) {
                if(err){
                    callback(err);
                }
                else{
                    if(data.length>0){
                        var count = data[0].count;
                        callback(null,count);
                    }
                    else{
                        callback({message:"Invalid referral code",statusCode:420});
                    }
                }
            })
        }
        catch(err){
            callback(err);
        }
    }

    module.exports.regAmbassador = function (param, callback) {
        try{
            param.count = 0;
            var query = "INSERT into ambassadors set ?";
            connection.query(query,param,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.updateSA = function (email, callback) {
        try{
            var query = 'UPDATE users set sa=1 where email='+'"'+email+'"';
            connection.query(query,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.subsEvent = function (param, callback) {
        try{
            var query = "INSERT into eventsubs set ?";
            connection.query(query,param,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.checkRegistration = function (email, workshop, callback) {
        try{
            var query = "SELECT * from workshopregistration where email=? and workshop=?";
            connection.query(query,[email,workshop],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getWorkshopDetails = function (workshop, callback) {
        try{
            var query = "SELECT * from workshops where id=?";
            connection.query(query,[workshop],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.regWorkshop = function (param, callback) {
        try{
            console.log(param);
            var query = "INSERT into workshopregistration set ?";
            connection.query(query,param,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.updateRegistration =function (referral,email,workshop,callback) {
        try{
            var query = "UPDATE workshopregistration set referral = ? where email=? and workshop=?";
            connection.query(query,[referral,email,workshop],function (err, data) {
                callback(err,data);
            });
        }
        catch (err){
            callback(err);
        }

    };

    module.exports.getUsers = function (cid, callback) {
        try{
            var query = "SELECT * from users where cid = ?";
            connection.query(query,[cid],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.checkAccomodation = function (cid, callback) {
        try{
            var query = "SELECT * from accomodation where cid = ?";
            connection.query(query,[cid],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getAccDetails = function (acc, callback) {
        try{
            var query = "SELECT * from acc where id=?";
            connection.query(query,[acc],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getTicketForDay = function (day, sex, callback) {
        try{
            var query = "SELECT * from acc where days=? and sex=?";
            connection.query(query,[day,sex],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.regAccomodation = function (param, id, callback) {
        try{
            param.acc = id;
            var query = "INSERT into accomodation set ?";
            connection.query(query,param,function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.clearPending = function (cid, callback) {
        try{
            var query = 'DELETE from accomodation where cid=? and status='+'"Pending"';
            connection.query(query,[cid],function (err, data) {
                callback(err,data);
            });
        }
        catch (err){
            callback(err);
        }
    };

    module.exports.updateRecord = function (email, wid, callback) {
        try{
            var query = 'UPDATE workshopregistration set status='+'"Paid"'+' where email=? and workshop = ?';
            connection.query(query,[email,wid],function (err, data) {
                callback(err,data);
            });
        }
        catch(err){
            callback(err);
        }
    }

})();