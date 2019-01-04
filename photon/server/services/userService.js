(function () {
    var userDao = require('../dao/userDao');

    module.exports.register = function (userDetails, callback) {
        userDao.register(userDetails,callback);
    };

    module.exports.login = function (userDetails, callback) {
        userDao.login(userDetails,callback);
    };

    module.exports.logout = function (userDetails, callback) {
        userDao.logout(userDetails,callback);
    };

    module.exports.updateLogin = function (userDetails, callback) {
        userDao.updateLogin(userDetails,callback);
    };

    module.exports.checkLogin = function (userDetails, callback) {
        userDao.checkLogin(userDetails,callback);
    };

    module.exports.gencid = function (callback) {
        userDao.gencid(callback);
    };

    module.exports.checkLink=function(secret,email,callback){
        userDao.checkLink(secret,email,callback);
    };

    module.exports.updatePassword = function (email, password, callback) {
        userDao.updatePassword(email,password,callback);
    };

    module.exports.clearMap = function (email, callback) {
        userDao.clearMap(email,callback);
    };

})();