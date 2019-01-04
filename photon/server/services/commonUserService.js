(function () {

    var commonUserDao = require('../dao/commonUserDao');
    var transformer = require('../helpers/transformer');

    module.exports.getUser = function (sessionId, callback) {
        commonUserDao.getUser(sessionId,callback);
    };

    module.exports.regEvents = function (userId, callback) {
        commonUserDao.regEvents(userId,callback);
    };

    module.exports.addRefScore = function (mail,referral, callback) {
        commonUserDao.addRefScore(mail,referral,callback);
    };

    module.exports.regAmbassador = function (param, callback) {
        commonUserDao.regAmbassador(param,callback);
    };

    module.exports.updateSA = function (email, callback) {
        commonUserDao.updateSA(email,callback);
    };

    module.exports.subsEvent = function (param, callback) {
        commonUserDao.subsEvent(param,callback);
    };

    module.exports.checkRegistration = function (user, workshop, callback) {
        commonUserDao.checkRegistration(user,workshop,callback);
    };

    module.exports.getWorkshopDetails = function (workshop, callback) {
        commonUserDao.getWorkshopDetails(workshop,callback);
    };

    module.exports.regWorkshop = function (param, callback) {
        commonUserDao.regWorkshop(param,callback);
    };

    module.exports.getUserDetails = function (email, callback) {
        commonUserDao.getUserDetails(email,callback);
    };

    module.exports.updateRegistration = function (referral, email, workshop, callback) {
        commonUserDao.updateRegistration(referral,email,workshop,callback);
    };
    
    module.exports.checkAccomodation = function (cid,callback) {
        commonUserDao.checkAccomodation(cid,callback);
    };

    module.exports.getAccDetails = function (acc, callback) {
        commonUserDao.getAccDetails(acc,callback);
    };

    module.exports.getUsers = function(cid,callback) {
        commonUserDao.getUsers(cid,callback);
    };

    module.exports.updateRecord = function (email, wid, callback) {
        commonUserDao.updateRecord(email,wid,callback);
    };

    module.exports.getDetails = function (user, param,day, callback) {
        var sex = user.sex;
        commonUserDao.getTicketForDay(day,sex,function (err, data) {
            if(err){
                callback(err);
            }
            else{
                if(data.length>0){
                    var ticketDetails = data[0];
                    callback(null,ticketDetails);
                }
                else{
                    callback({message:"Something went wrong"});
                }
            }
        });
    };

    module.exports.regAccomodation = function (param, id, callback) {
        commonUserDao.regAccomodation(param,id,callback);
    };

    module.exports.clearPending = function (cid, callback) {
        commonUserDao.clearPending(cid,callback);
    }

})();