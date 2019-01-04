(function () {

    var transport = require('../configs/mailConfig');

    module.exports.sendMail = function(token,mail,callback){
        try{
            var mail = {
                from: "Chintokan Karate Do",
                to: mail,
                subject:"Registration Token for event",
                text:"Use the token "+token+" to complete the registration process"
            };
        }
        catch(err){
            callback(err);
        }
    };

    module.exports.ack = function (token,mail, callback) {
        try{
            var email = {
                from : "Civilization 2k18",
                to : mail,
                subject : "Acknowledgement for registration",
                text : "Thank you for registering with Civilisation18. Have a good experience. Your C18 id is "+"'"+token+"'. Use it for further reference"
            };

            transport.sendMail(email,function(err,data){
                callback(err,data);
            });
        }
        catch (err){
            callback(err);
        }
    };

    module.exports.sendReferral = function (token, mail, callback) {
        try{
            var email = {
                from : "Civilization 2k18",
                to : mail,
                subject : "Acknowledgement for registering as Student Ambassador",
                text : "Thank you for registering as student ambassador. Refer more to earn more points. Your referral code is "+"'"+token+"'"
            };

            transport.sendMail(email,function(err,data){
                callback(err,data);
            });
        }
        catch (err){
            callback(err);
        }
    };

    module.exports.sendSecret = function (link, mail, callback) {
        try{
            var email = {
                from : "Civilisation 2k18",
                to : mail,
                subject : "Password reset link",
                text : "Use this link to reset your password..."+link
            };

            transport.sendMail(email,function (err, data) {
                callback(err,data);
            });

        }
        catch(err){
            callback(err);
        }
    }

})();