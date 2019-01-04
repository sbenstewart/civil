(function () {

    var responseHandler = require('../helpers/responseHandler');
    var transactionHandler = require('../helpers/transactionHandler');
    var commonUserService = require('../services/commonUserService');
    var commonService = require('../services/commonService');
    var mailService = require('../services/mailService');
    var transformer = require('../helpers/transformer');


    /*module.exports.regWorkshop = function (req, res) {
        try{
            var sessionId = req.headers['sessionid'];
            if(req.query.workshopId){
                var id = req.query.workshopId;
                commonUserService.getUser(sessionId,function (err, data) {
                    if(err){
                        responseHandler.error(res,err);
                    }
                    else{
                        if(data.length>0){
                            var userId = data[0].id;
                            commonUserService.regWorkshop(id,userId,function (err, data) {
                                if(data){
                                    responseHandler.error(res,err);
                                }
                                else{

                                }
                            });
                        }
                    }
                });
            }
            else{
                responseHandler.error(res,{message:"Empty query request",statusCode:400});
            }
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };*/


    module.exports.regEvents = function (req, res) {
        try{
            var sessionId = req.headers['sessionid'];
            commonUserService.getUser(sessionId,function (err, data) {
                if(err){
                    responseHandler.error(res,err);
                }
                else{
                    if(data.length>0){
                        var userId = data[0].email;
                        commonService.beginTransaction(function (err) {
                            if(err){
                                responseHandler.error(res,err);
                            }
                            else{
                                commonUserService.regEvents(userId,function (err, data) {
                                    if(err){
                                        transactionHandler.rollbackHandler(res,{message:"Something went wrong",statusCode:500});
                                    }
                                    else{
                                        if(req.body.referral){
                                            commonUserService.addRefScore(req.body.referral,function (err, data) {
                                                if(err){
                                                    transactionHandler.rollbackHandler(res,err);
                                                }
                                                else{
                                                    transactionHandler.commitHandler(res,data);
                                                }
                                            });
                                        }
                                        else{
                                            transactionHandler.commitHandler(res,data);
                                        }
                                    }
                                });
                            }
                        });
                    }
                    else{
                        responseHandler.error(res,{message:"User not logged in",statusCode:420});
                    }
                }

            });
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.getWorkshops = function (req, res) {
        try{
            commonService.getWorkshops(function (err, data) {
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


    module.exports.regAmbassador = function (req, res) {
        try{
            var sessionId = req.headers['sessionid'];
            commonUserService.getUser(sessionId,function (err, data) {
                if(err){
                    responseHandler.error(res,err);
                }
                else{
                    if(data.length>0){
                        var user = data[0].email;
                        commonService.generateToken(8,"SA-",function (err, token) {
                            if(err){
                                responseHandler.error(res,err);
                            }
                            else{
                                commonService.beginTransaction(function (err) {
                                    if(err){
                                        responseHandler.error(res,err);
                                    }
                                    else{
                                        var param = {};
                                        param.user = user;
                                        param.referral = token;
                                        console.log(param);
                                        commonUserService.regAmbassador(param,function (err, data) {
                                            if(err){
                                                transactionHandler.rollbackHandler(res,err);
                                            }
                                            else{
                                                commonUserService.updateSA(param.user,function (err, data) {
                                                    if(err){
                                                        transactionHandler.rollbackHandler(res,err);
                                                    }
                                                    else{
                                                        mailService.sendReferral(param.referral,param.user,function (err, data) {
                                                            if(err){
                                                                transactionHandler.rollbackHandler(res,err);
                                                            }
                                                            else{
                                                                transactionHandler.commitHandler(res,param)
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        });
                                    }
                                });
                            }
                        });
                    }
                    else{
                        responseHandler.error(res,{message:"Illegal request",statusCode:420});
                    }
                }
            })
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.getEvents = function (req, res) {
        try{
            commonService.getEvents(function (err, data) {
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

    module.exports.subsEvent = function (req, res) {
        try{
            var sessionid = req.headers['sessionid'];
            if(req.body.event){
                commonUserService.getUser(sessionid,function (err, data) {
                    if(err){
                        responseHandler.error(res,err);
                    }
                    else{
                        if(data.length>0){
                            var user = data[0].email;
                            var param={};
                            param.user = user;
                            param.event = event;
                            commonUserService.subsEvent(param,function (err, data) {
                                if(err){
                                    responseHandler.error(res,err);
                                }
                                else{
                                    responseHandler.response(res,data);
                                }
                            });
                        }
                        else{
                            responseHandler.error(res,{message:"User not logged in",statusCode:420});
                        }
                    }
                });
            }
            else{
                responseHandler.error(res,{message:"Empty body",statusCode:400});
            }
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.worksopPay = function (req, res) {
        try{
            var sessionid = req.headers['sessionid'];
            if(req.body.workshop){
                var workshop = req.body.workshop;
                commonUserService.getUser(sessionid,function (err, data) {
                    if(err){
                        responseHandler.error(res,err);
                    }
                    else{
                        if(data.length>0){
                            var user = data[0].email;
                            commonUserService.checkRegistration(user,workshop,function (err, data) {
                                if(err){
                                    responseHandler.error(res,err);
                                }
                                else{
                                    if(data.length>0){
                                        var status = data[0].status;
                                        console.log(status);
                                        if(status === "Paid"){
                                            responseHandler.error(res,{message:"User already registered",statusCode:600});
                                        }
                                        else{
                                            responseHandler.response(res,{message:"Proceed for registration"});
                                        }
                                    }
                                    else{
                                        responseHandler.response(res,{message:"Proceed for registration"});
                                    }
                                }
                            });
                        }
                        else{
                            responseHandler.error(res,{message:"Illegal access",statusCode:420});
                        }
                    }
                });
            }
            else{
                responseHandler.error(res,{message:"Empty request body",statusCode:400});
            }
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.payWorks = function (req, res) {
        try{
            var sessionid = req.headers['sessionid'];
            if(req.body.workshop){
                var workshop = req.body.workshop;
                commonUserService.getUser(sessionid,function (err, data) {
                    if(err){
                        responseHandler.error(res,err);
                    }
                    else{
                        if(data.length>0){
                            var email = data[0].email;
                            var json = {};
                            json.email = email;
                            json.workshop = workshop;
                            json.referral = (req.body.referral)?req.body.referral:0;
                            commonService.beginTransaction(function (err) {
                                if(err){
                                    responseHandler.error(res,err);
                                }
                                else{
                                    commonUserService.checkRegistration(email,workshop,function (err, data) {
                                        if(err){
                                            console.log(1);
                                            transactionHandler.rollbackHandler(res,err);
                                        }
                                        else{
                                            if(data.length>0){
                                                var status = data[0].status;
                                                if(status === "Paid"){
                                                    transactionHandler.rollbackHandler(res,{message:"Already registered",statusCode:606});
                                                }
                                                else{
                                                    commonUserService.getWorkshopDetails(workshop,function (err, data) {
                                                        if(err){
                                                            console.log('err');
                                                            transactionHandler.rollbackHandler(res,err);
                                                        }
                                                        else{
                                                            if(data.length>0){
                                                                if(req.body.referral){
                                                                    var referral = req.body.referral;
                                                                    commonUserService.updateRegistration(referral,email,workshop,function (err, dat) {
                                                                        if(err){
                                                                            transactionHandler.rollbackHandler(res,err);
                                                                        }
                                                                        else{
                                                                            var details = data[0];
                                                                            transformer.genTicket(details,json,function (err, prefilldata) {
                                                                                if(err){
                                                                                    console.log('err4');
                                                                                    transactionHandler.rollbackHandler(res,err);
                                                                                }
                                                                                else{
                                                                                    if(req.body.referral){
                                                                                        var referral = req.body.referral;
                                                                                        var mail = req.body.email;
                                                                                        commonUserService.addRefScore(mail,referral,function (err, data) {
                                                                                            if(err){
                                                                                                transactionHandler.rollbackHandler(res,err);
                                                                                            }
                                                                                            else{
                                                                                                transactionHandler.commitHandler(res,prefilldata);
                                                                                            }
                                                                                        });
                                                                                    }
                                                                                    else{
                                                                                        transactionHandler.commitHandler(res,prefilldata);
                                                                                    }
                                                                                }
                                                                            });
                                                                        }
                                                                    })
                                                                }
                                                                else{
                                                                    var details = data[0];
                                                                    transformer.genTicket(details,json,function (err, prefilldata) {
                                                                        if(err){
                                                                            console.log('err4');
                                                                            transactionHandler.rollbackHandler(res,err);
                                                                        }
                                                                        else{
                                                                            if(req.body.referral){
                                                                                var referral = req.body.referral;
                                                                                var mail = req.body.email;
                                                                                commonUserService.addRefScore(mail,referral,function (err, data) {
                                                                                    if(err){
                                                                                        transactionHandler.rollbackHandler(res,err);
                                                                                    }
                                                                                    else{
                                                                                        transactionHandler.commitHandler(res,prefilldata);
                                                                                    }
                                                                                });
                                                                            }
                                                                            else{
                                                                                transactionHandler.commitHandler(res,prefilldata);
                                                                            }
                                                                        }
                                                                    });
                                                                }
                                                            }
                                                            else{
                                                                transactionHandler.rollbackHandler(res,{message:"Event does not exist"});
                                                            }
                                                        }
                                                    });
                                                }
                                            }
                                            else{
                                                commonUserService.regWorkshop(json,function (err, data) {
                                                    if(err){
                                                        console.log(2);
                                                        transactionHandler.rollbackHandler(res,err);
                                                    }
                                                    else{
                                                        commonUserService.getWorkshopDetails(workshop,function (err, data) {
                                                            if(data.length>0){
                                                                var details = data[0];
                                                                console.log('err2');
                                                                transformer.genTicket(details,json,function (err, prefilldata) {
                                                                    if(err){
                                                                        console.log('err3');
                                                                        transactionHandler.rollbackHandler(res,err);
                                                                    }
                                                                    else{
                                                                        console.log(prefilldata);
                                                                        transactionHandler.commitHandler(res,prefilldata);
                                                                    }
                                                                });
                                                            }
                                                            else{
                                                                transactionHandler.rollbackHandler(res,{message:"Event does not exist"});
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        }
                                    });
                                }
                            });
                        }
                        else{
                            responseHandler.error(res,{message:"Illegal Access",statusCode:420});
                        }
                    }
                });
            }
            else{
                responseHandler.error(res,{message:"Empty request body",statusCode:400});
            }
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.regAccomodation = function (req, res) {
        try{
            var sessionid = req.headers['sessionid'];
            if(req.body.accomodation){
                var details = req.body.accomodation;
                var day = details.day;
                commonUserService.getUser(sessionid,function (err, data) {
                    if(err){
                        responseHandler.error(res,err);
                    }
                    else{
                        if(data.length>0){
                            var email = data[0].email;
                            console.log(email);
                            commonUserService.getUserDetails(email,function (err, data) {
                                if(data.length>0){
                                    var cid = data[0].cid;
                                    var sex = data[0].sex;
                                    var user = data[0];
                                    var param = {};
                                    param.cid = cid;
                                    param.fromdate = details.fromDate;
                                    param.todate = details.toDate;
                                    param.fromtime = details.fromTime;
                                    param.totime = details.toTime;
                                    console.log(param);
                                    commonUserService.checkAccomodation(cid,function (err, data) {
                                        if(err){
                                            responseHandler.error(res,err);
                                        }
                                        else{
                                            if(data.length>0){
                                                var status = data[0].status;
                                                var det = data[0].acc;
                                                if(status === "Pending"){
                                                    commonUserService.clearPending(user.cid,function (err, data) {
                                                        if(err){
                                                            responseHandler.error(res,err);
                                                        }
                                                        else{
                                                            commonService.beginTransaction(function (err) {
                                                                if(err){
                                                                    responseHandler.error(res,err);
                                                                }
                                                                else{
                                                                    commonUserService.getDetails(user,param,day,function (err, ticketDetails) {
                                                                        if(err){
                                                                            transactionHandler.rollbackHandler(res,err);
                                                                        }
                                                                        else{
                                                                            commonUserService.regAccomodation(param,ticketDetails.id,function (err, data) {
                                                                                if(err){
                                                                                    transactionHandler.rollbackHandler(res,err);
                                                                                }
                                                                                else{
                                                                                    transformer.genAcccTicket(param,user,ticketDetails,function (err, ticket) {
                                                                                        if(err){
                                                                                            transactionHandler.rollbackHandler(res,err);
                                                                                        }
                                                                                        else{
                                                                                            console.log(ticket);
                                                                                            transactionHandler.commitHandler(res,ticket);
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        }
                                                                    });
                                                                }
                                                            });
                                                        }
                                                    });
                                                }
                                                else{
                                                    responseHandler.error(res,{message:"Already registered",statusCode:600});
                                                }
                                            }
                                            else{
                                                commonService.beginTransaction(function (err) {
                                                   if(err){
                                                       responseHandler.error(res,err);
                                                   }
                                                   else{
                                                       commonUserService.getDetails(user,param,day,function (err, ticketDetails) {
                                                           if(err){
                                                               transactionHandler.rollbackHandler(res,err);
                                                           }
                                                           else{
                                                               commonUserService.regAccomodation(param,ticketDetails.id,function (err, data) {
                                                                   if(err){
                                                                       transactionHandler.rollbackHandler(res,err);
                                                                   }
                                                                   else{
                                                                       transformer.genAcccTicket(param,user,ticketDetails,function (err, ticket) {
                                                                           if(err){
                                                                               transactionHandler.rollbackHandler(res,err);
                                                                           }
                                                                           else{
                                                                               transactionHandler.commitHandler(res,ticket);
                                                                           }
                                                                       });
                                                                   }
                                                               });
                                                           }
                                                       });
                                                   }
                                                });
                                            }
                                        }
                                    });
                                }
                                else{
                                    responseHandler.error(res,{message:"Invalid User",statusCode:420});
                                }
                            });
                        }
                        else{
                            responseHandler.error(res,{message:"Illegal access",statusCode:420});
                        }
                    }
                });
            }
            else{
                responseHandler.error(res,{message:"Empty request body",statusCode:400});
            }
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };
                            /*var user = data[0].email;
                            commonUserService.checkRegistration(user,workshop,function (err, data) {
                                if(err){
                                    responseHandler.error(res,err);
                                }
                                else{
                                    if(data.length>0){
                                        responseHandler.error(res,{message:"Already registered",statusCode:600});
                                    }
                                    else{
                                        var json = {};
                                        json.email = user;
                                        json.workshop = workshop;
                                        commonService.beginTransaction(function (err) {
                                            if(err){
                                                responseHandler.error(res,err);
                                            }
                                            else{
                                                commonUserService.regWorkshop(json,function (err, data) {
                                                    if(err){
                                                        transactionHandler.rollbackHandler(res,err);
                                                    }
                                                    else{
                                                        commonUserService.getTicketDetails(json,function (err, data) {
                                                            if(err){
                                                                transactionHandler.rollbackHandler(res,err);
                                                            }
                                                            else{
                                                                if(data.length>0){
                                                                    var ticket = data[0].name;
                                                                    transformer.getTicketDetails(json,ticket,function (err, prefilldata) {
                                                                        if(err){
                                                                            transactionHandler.rollbackHandler(res,err);
                                                                        }
                                                                        else{
                                                                            transactionHandler.commitHandler(res,prefilldata);
                                                                        }
                                                                    });
                                                                }
                                                                else{
                                                                    transactionHandler.rollbackHandler(res,{message:"Illegal access",statusCode:420});
                                                                }
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        });
                                    }
                                }
                            });*/

})();