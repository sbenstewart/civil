(function () {

    var commonService = require('../services/commonService');
    var moment = require('moment');
    var generator  = require('voucher-code-generator');
    var _ = require('underscore');

    module.exports.genUserData = function (token,userDetails, callback) {
        try{
            var phash = null;
            commonService.generateHash(userDetails.password,function (err, hash) {
                if(err){
                    callback(err);
                }
                else{
                    phash = hash;
                    userDetails.cid = token;
                    userDetails.password = hash;
                    callback(null,userDetails);
                }
            });
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.genSessionDetails = function (user,sessionId,token, userDetails, callback) {
        try{
            var session = {};
            setExpiry(function (expiry) {
                if(expiry){
                    console.log(expiry);
                    session.sessionid = sessionId;
                    session.expiry = expiry;
                    session.token = token;
                    session.email = userDetails.email;
                    session.name = userDetails.name;
                    session.ev = user.eventFlag;
                    session.sa = user.sa;
                    callback(null,session);
                }
                else{
                    callback({message:"Something went wrong"});
                }
            });
        }
        catch(err){
            callback(err);
        }
    };

    function setExpiry(callback) {
        var expiry = (moment(moment.now()).add(5,'hours'))*1;
        callback(expiry);
    }
    
    module.exports.genTicket = function (details, json, callback) {
        try{
            ticketGenerate(details,json,function (err, ticket) {
                callback(err,ticket);
            });
        }
        catch(err){
            callback(err);
        }
    };

    function ticketGenerate(details,json,callback) {
        commonService.getUsername(json,function (err, data) {
            if(err){
                callback(err);
            }
            else{
                if(data.length>0){
                    var username = data[0].name;
                    var ticket = {};
                    ticket.eventcode = details.eventid;
                    ticket.name = username;
                    ticket.emailid = json.email;
                    ticket.ticketname1 = details.name;
                    ticket.ticketvalue1 = 1;
                    callback(null,ticket);
                }
                else{
                    callback({message:"Error in construct"});
                }
            }
        });
    }

    module.exports.genAccTicket = function (param, details, det,user, callback) {
        try{
            var ticket = {};
            ticket.eventcode = det.eventid;
            ticket.name = user.name;
            ticket.emailid = user.email;
            ticket.ticketname1 = det.ticket;
            ticket.ticketvalue1 = 1;
            callback(null,ticket);
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.getAccDays = function (param, callback) {
        try{
            var from = param.fromdate;
            var to = param.todate;
            var days = (to-from)+1;
            callback(null,day);
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.genAcccTicket = function (param, user, ticketDetails, callback) {
        try{
            console.log(user.email);
            var ticket = {};
            ticket.eventcode = ticketDetails.eventid;
            ticket.name = user.name;
            ticket.emailid = user.email;
            ticket.ticketname1 = ticketDetails.ticket;
            ticket.ticketvalue1 = 1;
            callback(null,ticket);
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.updateCount = function (data, callback) {
        try{
            var ct = 0;
            var flag = 0;
            _.forEach(data,function (item, index) {
                var referral = item.referral;
                commonService.getCount(referral,function (err, data) {
                    if(err){
                        flag = 1;
                    }
                    else{
                        ct = ct+1;
                        console.log(data.length);
                        item.count = data.length;
                        if(ct === data.length){
                            callback(null,data);
                        }
                    }
                });
            });
            console.log("ct"+ct);
            console.log(data.length);
        }
        catch(err){
            callback(err);
        }
    }

})();