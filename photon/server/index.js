(function(){

    module.exports = function (app) {
        app.use('/user',require('./routes/userRoutes'));
        app.use('/api/web',require('./routes/commonRoutes'));
        app.use('/api/get',require('./routes/getValueRoutes'));
        app.use('/admin',require('./routes/adminRoutes'));
    };

})();