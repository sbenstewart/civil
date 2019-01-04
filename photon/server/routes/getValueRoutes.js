(function () {

    var express = require('express');
    var router = express.Router();
    var commonController = require('../controllers/commonController');

    router.get('/events',function (req, res) {
        commonController.getEvents(req,res);
    });

    module.exports = router;

})();