(function () {

    var _ = require('underscore');

    module.exports.nullCheck = function (obj, callback) {
        try{
            console.log(obj);
            var val = _.values(obj);
            console.log(val);
            var res = _.contains(val,null);
            if(res === true){
                callback({message:"Null attribute detected",statusCode:400});
            }
            else{
                callback(null,true);
            }
        }
        catch(err){
            callback(err);
        }
    }

})();