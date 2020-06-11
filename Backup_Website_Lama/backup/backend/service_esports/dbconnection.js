var mysql=require('mysql');
var connection=mysql.createPool({
 
    host:'joinesports.net',
    user:'u6185042_jointesports',
    password:'Joint_Esports',
    database:'u6185042_db_jointesports'
 
});

module.exports=connection;