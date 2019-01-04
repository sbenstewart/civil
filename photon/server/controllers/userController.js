(function(){

    var userService = require('../services/userService');
    var responseHandler = require('../helpers/responseHandler');
    var transactionHandler = require('../helpers/transactionHandler');
    var commonService = require('../services/commonService');
    var mailService = require('../services/mailService');
    var transformer = require('../helpers/transformer');
    var sessionhandler = require('../helpers/sessionHandler');
    var validator = require('../helpers/validator');
    var path = require('path');
    var commonUserService = require('../services/commonUserService');

    module.exports.registerUser = function (req, res) {
        try{
            console.log(req.body);
            if(req.body.user){
                validator.nullCheck(req.body.user,function (err, data) {
                    if(err){
                        responseHandler.error(res,err);
                    }
                    else{
                        userService.gencid(function (err, token) {
                            if(err){
                                console.log(1);
                                transactionHandler.rollbackHandler(res,err);
                            }
                            else{
                                transformer.genUserData(token,req.body.user,function (err, userData) {
                                    if(err){
                                        console.log(2);
                                        responseHandler.error(res,err);
                                    }
                                    else{
                                        commonService.beginTransaction(function (err) {
                                            if(err){
                                                console.log(3);
                                                responseHandler.error(res,err);
                                            }
                                            else{
                                                userService.register( userData ,function (err, data) {
                                                    if(err){
                                                        console.log(4);
                                                        transactionHandler.rollbackHandler(res,err);
                                                    }
                                                    else{
                                                        mailService.ack(token,userData.email,function (err, data) {
                                                            if(err){
                                                                console.log(5);
                                                                transactionHandler.rollbackHandler(res,err);
                                                            }
                                                            else{
                                                                transactionHandler.commitHandler(res,data);
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

    module.exports.login = function (req, res) {
        try{
            commonService.beginTransaction(function (err) {
                if(err){
                    responseHandler.error(res,err);
                }
                else{
                    if(req.body.user){
                        validator.nullCheck(req.body.user,function (err, data) {
                            if(err){
                                transactionHandler.rollbackHandler(res,err);
                            }
                            else{
                                userService.checkLogin(req.body.user,function (err, data) {
                                    if(err){
                                        transactionHandler.rollbackHandler(res,err);
                                    }
                                    else{
                                        userService.login(req.body.user,function (err, data) {
                                            if(err){
                                                transactionHandler.rollbackHandler(res,err);
                                            }
                                            else{
                                                var user = data[0];
                                                commonService.checkHash(req.body.user.password,user.password,function (err, result) {
                                                    if(err){
                                                        transactionHandler.rollbackHandler(res,err);
                                                    }
                                                    else{
                                                        sessionhandler.createSession(user,req.body.user,function (err, token) {
                                                            if(err){
                                                                transactionHandler.rollbackHandler(res,err);
                                                            }
                                                            else{
                                                                console.log(token);
                                                                userService.updateLogin(req.body.user,function (err, data) {
                                                                    if(err){
                                                                        transactionHandler.rollbackHandler(res,err);
                                                                    }
                                                                    else{
                                                                        console.log(token);
                                                                        transactionHandler.commitHandler(res,token);
                                                                    }
                                                                });
                                                            }
                                                        });
                                                    }
                                                })
                                            }
                                        });
                                    }
                                });
                            }
                        });
                    }
                    else{
                        transactionHandler.rollbackHandler(res,{message:"Empty request body",statusCode:400});
                    }
                }
            });
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.logout = function (req, res) {
        try{
            if(req.body.user){
                if(req.body.user.sessionid){
                    validator.nullCheck(req.body.user,function (err, data) {
                        if(err){
                            responseHandler.error(res,err);
                        }
                        else{
                            commonService.beginTransaction(function (err) {
                                if(err){
                                    responseHandler.error(res,err);
                                }
                                else{
                                    var user = req.body.user;
                                    commonService.deleteSession(user.sessionid,function (err, data) {
                                        if(err){
                                            transactionHandler.rollbackHandler(res,err);
                                        }
                                        else{
                                            userService.logout(user,function (err, data) {
                                                if(err){
                                                    transactionHandler.rollbackHandler(res,err);
                                                }
                                                else{
                                                    transactionHandler.commitHandler(res,data);
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
                    console.log(4);
                    validator.nullCheck(req.body.user,function (err, data) {
                        if(err){
                            responseHandler.error(res,err);
                        }
                        else{
                            commonService.beginTransaction(function (err) {
                                if(err){
                                    responseHandler.error(res,err);
                                }
                                else{
                                    var user = req.body.user;
                                    commonService.deleteSessionAnyway(user.email,function (err, data) {
                                        if(err){
                                            transactionHandler.rollbackHandler(res,err);
                                        }
                                        else{
                                            userService.logout(user,function (err, data) {
                                                if(err){
                                                    transactionHandler.rollbackHandler(res,err);
                                                }
                                                else{
                                                    transactionHandler.commitHandler(res,data);
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
            else{
                responseHandler.error(res,{message:"Empty request body",statusCode:400});
            }
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.resetPassword = function (req, res) {
        try{
            if(req.query.secret && req.query.email){
                var secret = req.query.secret;
                var email = req.query.email;
                userService.checkLink(secret,email,function (err, data) {
                    if(err){
                        responseHandler.error(res,err);
                    }
                    else{
                        if(data.length>0){
                            var password = data[0].password;
                            commonService.beginTransaction(function (err) {
                                if(err){
                                    responseHandler.error(res,err);
                                }
                                else{
                                    userService.updatePassword(email,password,function (err, data) {
                                        if(err){
                                            transactionHandler.rollbackHandler(res,err);
                                        }
                                        else{
                                            userService.clearMap(email,function (err, data) {
                                                if(err){
                                                    transactionHandler.rollbackHandler(res,err);
                                                }
                                                else{
                                                    commonService.commit(function (comErr) {
                                                        if(comErr){
                                                            commonService.rollback(function (rollErr) {
                                                                if(rollErr){
                                                                    responseHandler.error(res,rollErr);
                                                                }
                                                                else{
                                                                    responseHandler.error(res,comErr);
                                                                }
                                                            });
                                                        }
                                                        else{
                                                            res.sendFile(path.resolve('server/pages/resetSuccess.html'));
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
                            responseHandler.error(res,{message:"Invalid link",statusCode:400});
                        }
                    }
                });
            }
            else{
                responseHandler.error(res,{message:"Invalid link",statusCode:400});
            }
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };

    module.exports.forgotPassword = function (req, res) {
        try{
            if(req.body.email && req.body.password){
                var email = req.body.email;
                var password = req.body.password;
                commonService.checkUser(email,function (err, data) {
                    if(err){
                        responseHandler.error(res,err);
                    }
                    else{
                        if(data.length>0){
                            commonService.beginTransaction(function (err) {
                                if(err){
                                    responseHandler.error(res,err);
                                }
                                else{
                                    commonService.generateToken(40,'',function (err, token) {
                                        if(err){
                                            transactionHandler.rollbackHandler(res,err);
                                        }
                                        else{
                                            var secret = token.toLowerCase();
                                            var link = "http://ec2-18-217-47-33.us-east-2.compute.amazonaws.com:443/user/resetpassword?secret="+secret+"&&email="+email;
                                            commonService.generateHash(password,function (err, hash) {
                                                if(err){
                                                    transactionHandler.rollbackHandler(res,err);
                                                }
                                                else{
                                                    commonService.mapSecret(email,secret,hash,function (err, data) {
                                                        if(err){
                                                            responseHandler.error(res,err);
                                                        }
                                                        else{
                                                            commonService.deleteSessionAnyway(email,function (err, data) {
                                                                if(err){
                                                                    transactionHandler.rollbackHandler(res,err);
                                                                }
                                                                else{
                                                                    mailService.sendSecret(link,email,function (err, data) {
                                                                        if(err){
                                                                            transactionHandler.rollbackHandler(res,err);
                                                                        }
                                                                        else{
                                                                            transactionHandler.commitHandler(res,data);
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
                            });
                        }
                        else{
                            responseHandler.error(res,{message:"User does not exist",statusCode:440});
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

    module.exports.processPayment = function (req, res) {
        try{
            if(req.body){
                var data = req.body.data;
                data = JSON.parse(data);
                var param = {};
                var email = data.userEmailId;
                var uniqueOrderId = data.uniqueOrderId;
                var eventName = data.eventName;
                console.log(email);
                commonService.getcid(email,function (err, data) {
                    if(err){
                        console.log(err);
                    }
                    else{
                        if(data.length>0){
                            commonService.getWorkshopId(eventName,function (err, wid) {
                                if(err){
                                    console.log(err);
                                }
                                else{
                                    if(data.length>0){
                                        console.log(data[0]);
                                        var wid = wid;
                                        var cid = data[0].cid;
                                        param.cid = cid;
                                        param.uniqueOrderId = uniqueOrderId;
                                        param.eventName = eventName;
                                        commonService.beginTransaction(function (err) {
                                            if(err){
                                                console.log(err);
                                            }
                                            else{
                                                commonService.updatePayment(email,wid,function (err, data) {
                                                    if(err){
                                                        commonService.rollback(function (err) {
                                                            if(err){
                                                                console.log(err);
                                                            }
                                                            else{
                                                                console.log('rolled');
                                                            }
                                                        });
                                                    }
                                                    else{
                                                        console.log(param);
                                                        commonService.enterOrder(param,function (err, data) {
                                                            if(err){
                                                                commonService.rollback(function (Rerr) {
                                                                    if(Rerr){
                                                                        console.log(Rerr);
                                                                    }
                                                                    else{
                                                                        console.log(err);
                                                                    }
                                                                });
                                                            }
                                                            else{
                                                                commonService.commit(function (cerr) {
                                                                    if(cerr){
                                                                        commonService.rollback(function (rerr) {
                                                                            if(rerr){
                                                                                console.log(rerr);
                                                                            }
                                                                            else{
                                                                                console.log(cerr);
                                                                            }
                                                                        });
                                                                    }
                                                                    else{
                                                                        console.log('entered order');
                                                                        responseHandler.response(res,{message:"Success"});
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
                        else {
                            commonService.insertDump(email,uniqueOrderId,eventName,function (err, data) {
                                if(err){
                                    console.log(err);
                                }
                                else{
                                    console.log('Success dump');
                                    responseHandler.response(res,{message:"Success"});
                                }
                            });
                        }
                    }
                });
            }
        }
        catch (err){
            responseHandler.error(res,err);
        }
    };

    module.exports.processAccomodation = function (req, res) {
        try{
            var data = req.body.data;
            data = JSON.parse(data);
            var param = {};
            var email = data.userEmailId;
            var uniqueOrderId = data.uniqueOrderId;
            var eventName = data.allTicketName;
            var ename = data.eventName;
            commonService.getcid(email,function (err, data) {
                if(err){
                    console.log(err);
                }
                else{
                    if(data.length>0){
                        var cid = data[0].cid;
                        param.cid = cid;
                        param.uniqueOrderId = uniqueOrderId;
                        param.eventName = eventName;
                        commonService.beginTransaction(function (err) {
                            if(err){
                                console.log(err);
                            }
                            else{
                                commonService.getAccId(ename,eventName,function (err, data) {
                                    if(err){
                                        commonService.rollback(function (rolerr) {
                                            if(rolerr){
                                                console.log(rolerr);
                                            }
                                            else{
                                                console.log(err);
                                            }
                                        });
                                    }
                                    else{
                                        if(data.length>0){
                                            var acc = data[0].id;
                                            commonService.updateAccomodation(acc,cid,function (err, data) {
                                                if(err){
                                                    commonService.rollback(function (rolerr) {
                                                        if(rolerr){
                                                            console.log(rolerr);
                                                        }
                                                        else{
                                                            console.log(err);
                                                        }
                                                    });
                                                }
                                                else{
                                                    commonService.enterAccOrder(param,function (err, data) {
                                                        if(err){
                                                            commonService.rollback(function (roll) {
                                                                if(roll){
                                                                    console.log(roll);
                                                                }
                                                                else{
                                                                    console.log(err);
                                                                }
                                                            });
                                                        }
                                                        else{
                                                            commonService.commit(function (comErr) {
                                                                if(comErr){
                                                                    commonService.rollback(function (rollErr) {
                                                                        if(rollErr){
                                                                            console.log(rollErr);
                                                                        }
                                                                        else{
                                                                            console.log(comErr);
                                                                        }
                                                                    });
                                                                }
                                                                else{
                                                                    console.log('Success');
                                                                    responseHandler.response(res,{message:"Success"});
                                                                }
                                                            });
                                                        }
                                                    });
                                                }
                                            });
                                        }
                                        else{
                                            commonService.rollback(function (rolerr) {
                                                if(rolerr){
                                                    console.log(rolerr);
                                                }
                                                else{
                                                    console.log('SOmething');
                                                }
                                            });
                                        }
                                    }
                                });
                            }
                        });
                    }
                    else{
                        param.email = email;
                        param.uniqueOrderId = uniqueOrderId;
                        param.eventName = eventName;
                        commonService.dumpAcc(param,function (err, data) {
                            if(err){
                                console.log(err);
                            }
                            else{
                                console.log('Dumped acc');
                                responseHandler.response(res,{message:"Success"});
                            }
                        });
                    }
                }
            });
        }
        catch(err){
            console.log(err);
        }
    };



})();