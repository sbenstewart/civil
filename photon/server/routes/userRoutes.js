(function () {

    var express = require('express');
    var router = express.Router();
    var moment = require('moment');
    var _ = require('underscore');
    var path = require('path');
    var userController = require('../controllers/userController');

    router.post('/test',function(req,res){
    });

    router.post('/register',function(req,res){
        userController.registerUser(req,res);
    });

    router.post('/login',function (req, res) {
        userController.login(req,res);
    });

    router.post('/logout',function (req, res) {
        userController.logout(req,res);
    });

    router.get('/resetpassword',function (req, res) {
        userController.resetPassword(req,res);
    });

    router.post('/forgotpassword',function (req, res) {
        userController.forgotPassword(req,res);
    });

    router.post('/payhook',function (req, res) {
        try{
            console.log(1);
            var l = req.body.data;
            console.log(l);
            userController.processPayment(req,res);
        }
        catch(err){
            res.send(err);
        }
    });

    router.post('/hook',function (req, res) {
        try{
            console.log(1);
            var l = req.body.data;
            console.log(l);
            userController.processPayment(req,res);
        }
        catch(err){
            res.send(err);
        }
    });

    router.post('/accomodationhook',function (req, res) {
        try{
            var l = req.body.data;
            console.log(l);
            userController.processAccomodation(req,res);
        }
        catch(err){
            res.send(err);
        }
    });

    module.exports = router;

})();