(function () {

    var express = require('express');
    var router = express.Router();
    var adminController = require('../controllers/adminController');

    router.get('/get/users',function (req, res) {
        adminController.getUsers(req,res);
    });

    router.get('/get/workshop1',function (req, res) {
        adminController.getWorkshop1(req,res);
    });

    router.get('/get/workshop2',function (req, res) {
        adminController.getWorkshop2(req,res);
    });

    router.get('/get/workshop3',function (req, res) {
        adminController.getWorkshop3(req,res);
    });

    router.get('/get/accomodation',function (req, res) {
        adminController.getAccomodation(req,res);
    });

    router.post('/post/miss',function (req, res) {
        adminController.postMissedData(req,res);
    });

    router.get('/get/ambassadors',function (req, res) {
        adminController.getAmbassadors(req,res);
    });

    module.exports = router;

})();