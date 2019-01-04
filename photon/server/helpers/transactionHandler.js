(function(){
    var commonService = require('../services/commonService');
    var responseHandler = require('./responseHandler');
    
    module.exports.commitHandler = function (res, data) {
        try{
            commonService.commit(function(commiterr){
                if(commiterr){
                    commonService.rollback(function(rollerr){
                        if(err){
                            responseHandler.error(res,rollerr);
                        }
                        else{
                            responseHandler.error(res,commiterr);
                        }
                    });
                }
                else{
                    responseHandler.response(res,data);
                }
            });
        }
        catch (err){
            responseHandler.error(res,err);
        }
    };

    module.exports.rollbackHandler = function(res,err){
        try{
            commonService.rollback(function(rollerr){
                if(rollerr){
                    responseHandler.error(res,rollerr);
                }
                else{
                    responseHandler.error(res,err);
                }
            });
        }
        catch(err){
            responseHandler.error(res,err);
        }
    };
})();