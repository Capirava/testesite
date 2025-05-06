async function connect() {
	if(global.connection && global.connection.state !== "disconnected")
		return global.connection

	const mysql = require ("mysql2/promise");
	const connection =await mysql.createConnection("mysql://user:password@localhost:3306/database");
	console.log("Conectou no MySql!");
	global.connection = connection;
	return connection;
}