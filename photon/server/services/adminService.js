(function () {

    var adminDao = require('../dao/adminDao');

    module.exports.getUsers = function (callback) {
        adminDao.getUsers(callback);
    };

    module.exports.getWorkshop1 = function (callback) {
        adminDao.getWorkshop1(callback);
    };

    module.exports.getWorkshop2 = function (callback) {
        adminDao.getWorkshop2(callback);
    };

    module.exports.getWorkshop3 = function (callback) {
        adminDao.getWorkshop3(callback);
    };

    module.exports.getAccomodation = function (callback) {
        adminDao.getAccomodation(callback);
    };

    module.exports.getDump1 = function (callback) {
        adminDao.getDump1(callback);
    };

    module.exports.getDump2 = function (callback) {
        adminDao.getDump2(callback);
    };

    module.exports.getDump = function (callback) {
        adminDao.getDump(callback);
    }

})();