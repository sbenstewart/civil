(function () {

    var express = require('express');
    var router = express.Router();
    var commonController = require('../controllers/commonController');

    router.get('/test',function (req, res) {
       res.send('Helo');
    });

    router.get('/regWorkshop',function (req, res) {
        commonController.regWorkshop(req,res);
    });

    router.get('/get/workshops',function (req, res) {
        commonController.getWorkshops(req,res);
    });

    router.post('/regEvents',function (req, res) {
        commonController.regEvents(req,res);
    });

    router.post('/ambassador',function (req, res) {
        commonController.regAmbassador(req,res);
    });

    router.post('/subsevent',function (req, res) {
        commonController.subsEvent(req,res);
    });

    router.post('/workhoppay',function (req, res) {
        commonController.worksopPay(req,res);
    });
    router.post('/workshoppay',function (req, res) {
        commonController.payWorks(req,res);
    });
    router.post('/accomodation',function (req, res) {
        commonController.regAccomodation(req,res);
    });

    module.exports = router;

})();