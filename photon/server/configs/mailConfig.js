(function () {
    var mailer = require("nodemailer");

    var transport = mailer.createTransport("SMTP",{
        service : "Gmail",
        auth : {
            user : "civilisationceg18@gmail.com",
            pass : "civilisation18"
        }
    });

    module.exports = transport;

})();