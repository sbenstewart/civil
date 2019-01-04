(function () {

    var adminService = require('../services/adminService');
    var responseHandler = require('../helpers/responseHandler');
    var commonService = require('../services/commonService');
    var transactionHandler = require('../helpers/transactionHandler');
    var commonUserService = require('../services/commonUserService');
    var transformer = require('../helpers/transformer');
    var _ = require('underscore');

    module.exports.getUsers = function (req, res) {
        try{
            adminService.getUsers(function (err, data) {
                if(err){
                    responseHandler.error(res,err);
                }
                else{
                    responseHandler.response(res,data);
                }
            });
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.getWorkshop1 = function (req, res) {
        try{
            adminService.getWorkshop1(function (err, data1) {
                if(err){
                    responseHandler.error(res,err);
                }
                else{
                    adminService.getDump1(function (err, data) {
                        if(err){
                            responseHandler.error(res,err);
                        }
                        else{
                            var details = _.union(data,data1);
                            responseHandler.response(res,details);
                        }
                    });
                }
            });
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.getWorkshop2 = function (req, res) {
        try{
            adminService.getWorkshop2(function (err, data) {
                if(err){
                    responseHandler.error(res,err);
                }
                else{
                    adminService.getDump2(function (err, data1) {
                        if(err){
                            responseHandler.error(res,err);
                        }
                        else{
                            var details = _.union(data,data1);
                            responseHandler.response(res,details);
                        }
                    });
                }
            });
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.getWorkshop3 = function (req, res) {
        try{
            adminService.getWorkshop3(function (err, data) {
                if(err){
                    responseHandler.error(res,err);
                }
                else{
                    responseHandler.response(res,data);
                }
            });
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };


    module.exports.getAccomodation = function (req, res) {
        try{
            adminService.getAccomodation(function (err, data1) {
                if(err){
                    responseHandler.error(res,err);
                }
                else{
                    adminService.getDump(function (err, data) {
                        if(err){
                            responseHandler.error(res,err);
                        }
                        else{
                            var details = _.union(data,data1);
                            responseHandler.response(res,details);
                        }
                    });
                }
            });
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.postMissedData = function (req, res) {
        try{
            if(req.body.data){
                var datam = req.body.data;
                commonService.beginTransaction(function (err) {
                    if(err){
                        console.log(err);
                        responseHandler.error(res,err);
                    }
                    else{
                        var eventName = datam.eventName;
                        commonService.getWorkshopId(eventName,function (err, wid) {
                            if(err){
                                console.log(err);
                                transactionHandler.rollbackHandler(res,err);
                            }
                            else{
                                var id = wid;
                                commonUserService.getUsers(datam.cid,function (err, data) {
                                    if(err){
                                        console.log(err);
                                        transactionHandler.rollbackHandler(res,err);
                                    }
                                    else{
                                        if(data.length>0){
                                            var email = data[0].email;
                                            commonUserService.updateRecord(email,wid,function (err, data) {
                                                if(err){
                                                    console.log(err);
                                                    transactionHandler.rollbackHandler(err,data);
                                                }
                                                else{
                                                    commonService.enterOrder(datam,function (err, data) {
                                                        if(err){
                                                            console.log(err);
                                                            transactionHandler.rollbackHandler(err,data);
                                                        }
                                                        else{
                                                            transactionHandler.commitHandler(res,data);
                                                        }
                                                    });
                                                }
                                            });
                                        }
                                        else{
                                            console.log(1);
                                            transactionHandler.rollbackHandler(res,err);
                                        }
                                    }
                                });
                            }
                        });
                    }
                });
            }
            else{
                responseHandler.error({message:"Error in body"});
            }
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.getAmbassadors = function (req, res) {
        try{
            commonService.getAmbassadors(function (err, data) {
                if(err){
                    responseHandler.error(res,err);
                }
                else{
                    responseHandler.response(res,data);
                }
            });
        }
        catch(err){
            responseHandler.error(res,err);
        }
    }

})();