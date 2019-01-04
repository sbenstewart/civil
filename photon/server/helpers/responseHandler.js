(function(){
    var responseHandler = {
            response : function(res,response){
                var statuscode = 200;
                var data = {message:"Success"};
                data.statusCode = statuscode;
                data.response = response;
                res.status(statuscode).json(data);
        },
        error : function(res,err){
                var message = err.message !== undefined && err.message.length>0 ? err.message : "Something went wrong";
                var data = {message: message};
                data.statusCode = err.statusCode === undefined ? 500 : err.statusCode;
                data.code = err.code === undefined ? "Error" : err.code;
                data.stack = err.stack === undefined ? "Unknown_stack" : err.stack;
                res.status(data.statusCode).json(data);
        }
    };

    module.exports = responseHandler;
})();